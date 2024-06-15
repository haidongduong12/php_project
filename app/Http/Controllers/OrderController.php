<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use App\Mail\InvoiceMail;
use Illuminate\Support\Facades\Mail;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('dashboard.order.orders', compact('orders'));
    }
    public function checkout()
    {
        $user = Auth::user();
        $cart = session()->get('cart', []);
        if ($user) {
            $userCart = isset($cart[$user->id]) ? $cart[$user->id] : [];
            $totalPrice = 0;
            foreach ($userCart as $id => $details) {
                $totalPrice += $details['price'] * $details['quantity'];
            }
            return view('checkout', compact('userCart', 'totalPrice', 'user'));
        }

        return view('checkout');
    }

    public function store(Request $request)
    {
        // Lấy user hiện tại
        $user = Auth::user();

        // Lấy giỏ hàng từ session
        $cart = session()->get('cart');

        // Kiểm tra nếu giỏ hàng rỗng hoặc không có sản phẩm nào của user hiện tại
        if (!$cart || !isset($cart[$user->id]) || empty($cart[$user->id])) {
            return back()->with('error', 'Giỏ hàng của bạn đang trống');
        }

        // Lấy giỏ hàng của user hiện tại
        $userCart = $cart[$user->id];

        // Tính tổng giá trị đơn hàng
        $totalPrice = array_reduce($userCart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        // Tạo bản ghi mới trong bảng orders
        $order = new Order();
        $order->user_id = $user->id;
        $order->total_price = $totalPrice;
        $order->save();

        // var_dump($userCart);

        // Lưu từng sản phẩm trong giỏ hàng vào bảng order_items
        foreach ($userCart as $productId => $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $productId;
            $orderItem->quantity = $item['quantity'];
            $orderItem->price = $item['price'];
            $orderItem->save();
        }

        // Xóa giỏ hàng của user hiện tại sau khi checkout
        unset($cart[$user->id]);
        session()->put('cart', $cart);

        // Gửi email hóa đơn
        Mail::to($user->email)->send(new InvoiceMail($order));

        return back()->with('success', 'Checkout thành công, hóa đơn đã được gửi qua email.');
    }

    public function showItemsOrder($id)
    {
        $userID = Auth::id(); // Lấy ID của người dùng đã đăng nhập
        if ($userID) {
            // Tìm tất cả các đơn hàng với user_id là $userID
            $orderItems = OrderItem::where('order_id', $id)->get();
        } else {
            $orderItems = collect(); // Trả về một collection rỗng nếu không có người dùng đăng nhập
        }

        return view('dashboard.order.orderItems', compact('orderItems'));
    }

    public function edit($id)
    {
        $order = Order::find($id);
        return view('dashboard.order.edit', compact('order'));
    }
    public function update(Request $request, $id)
    {
        // Lấy đơn hàng theo ID
        $order = Order::findOrFail($id);

        // Kiểm tra nếu đơn hàng đã hoàn thành, không cho phép cập nhật
        if ($order->isCompleted()) {
            return redirect()->route('orders.index')->with('errors', 'Cannot update a completed order');
        }

        // Cập nhật trạng thái đơn hàng
        $order->status = $request->status;

        // Kiểm tra nếu lưu đơn hàng thành công
        if ($order->save()) {
            // Nếu trạng thái đơn hàng là "Completed"
            if ($request->status == 'Completed') {
                // Lấy các mục đơn hàng liên quan đến đơn hàng này
                $orderItems = OrderItem::where('order_id', $id)->get();

                foreach ($orderItems as $orderItem) {
                    // Lấy sản phẩm theo product_id trong orderItem
                    $product = Product::findOrFail($orderItem->product_id);

                    // Cập nhật số lượng sản phẩm và số lượng trong kho
                    $product->product_quantity -= $orderItem->quantity;
                    $product->product_sold = $orderItem->quantity;

                    // Lưu thay đổi
                    $product->save();
                }
            }

            // Chuyển hướng về trang danh sách đơn hàng với thông báo thành công
            return redirect()->route('orders.index')->with('success', 'Order updated successfully');
        } else {
            // Chuyển hướng về trang danh sách đơn hàng với thông báo lỗi
            return redirect()->route('orders.index')->with('errors', 'Failed to update order');
        }
    }
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        if ($order) {
            $order->delete();
            return redirect()->route('orders.index')->with('success', 'Order updated successfully');
        } else {
            return redirect()->route('orders.index')->with('errors', 'Failed to update order');
        }
    }

    public function orderInfo()
    {
        $lastOrder = Order::latest()->first();
        return view('email.order', compact('lastOrder'));
    }
}
