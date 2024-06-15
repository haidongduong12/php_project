<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{


    public function dashboard()
    {
        // Tính tổng giá trị của cột total_price
        $totalPriceOrder = Order::sum('total_price');
        // Tính tổng giá trị của cột total_price
        $qtyInstock = Product::sum('product_quantity');
        // Tính tổng giá trị của cột product_sold
        $qtySold = Product::sum('product_sold');

        $qtyOders = 0; // Initialize outside the loop

        $order = Order::all();
        foreach ($order as $items) {
            if ($items->status == 'Completed') {
                $qtyOders++;
            }
        }
        if (Auth::check() && Auth::user()->role != 'admin') {
            // Return the custom 404 view
            return response()->view('errors.404', ['error' => 'Access Denied'], 404);
        }

        // Pass all calculated values to the view
        return view('dashboard.index', compact('totalPriceOrder', 'qtyInstock', 'qtySold', 'qtyOders'));
    }
    public function cart()
    {
        return view('cart');
    }
    public function index()
    {
        return view('profileIndex');
    }
    public function showProfile()
    {
        $userID = Auth::id();
        $user = User::find($userID);
        return view('profile', compact('user'));
    }
    public function updateProfile(Request $request)
    {
        // Validate the request data
        $request->validate([
            'fullname' => 'required|string|max:100',
            'phonenumber' => 'required|string|digits:10|numeric|unique:users,phonenumber',
            'address' => 'required|string|max:255',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Ensure $user is an instance of the User model
        if (!$user instanceof User) {
            return redirect()->route('profile.show')->with('error', 'User not found.');
        }

        // Update user profile using the update method
        $user->update([
            'fullname' => $request->input('fullname'),
            'phonenumber' => $request->input('phonenumber'),
            'address' => $request->input('address'),
        ]);

        // Redirect back with a success message
        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
    public function showchangePassword()
    {
        $userID = Auth::id();
        return view('changpassword');
    }
    public function updatePassword(Request $request)
    {
        $userID = Auth::id();
        $user = User::find($userID);

        // Validate the request
        $request->validate([
            'password' => 'required|string',
            'newpassword' => 'required|string|min:8',
            'comfirmpassword' => 'required|string|min:8|same:newpassword'
        ]);

        // Check if the current password matches
        if (!Hash::check($request->input('password'), $user->password)) {
            return back()->withErrors(['password' => 'Current password is incorrect']);
        }

        // First, check if the new password matches the current password
        if (Hash::check($request->input('newpassword'), $user->password)) {
            return back()->withErrors(['newpassword' => 'New password must be different from the current password.'])->withInput();
        }


        // Update the password
        $user->password = Hash::make($request->input('newpassword'));
        $user->save();

        return redirect()->route('changepassword.show')->with('status', 'Password updated successfully');
    }

    public function showHistoryOrder()
    {
        $userID = Auth::id(); // Lấy ID của người dùng đã đăng nhập
        if ($userID) {
            // Tìm tất cả các đơn hàng với user_id là $userID
            $historyOrder = Order::where('user_id', $userID)->get();
        } else {
            $historyOrder = collect(); // Trả về một collection rỗng nếu không có người dùng đăng nhập
        }

        return view('historyOrder', compact('historyOrder'));
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

        return view('orderItems', compact('orderItems'));
    }
}
