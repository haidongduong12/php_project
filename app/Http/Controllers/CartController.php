<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::find($request->id);
        $user = Auth::user(); // Get the authenticated user
        $cart = session()->get('cart', []);

        if (isset($cart[$user->id][$product->id])) {
            $cart[$user->id][$product->id]['quantity']++;
        } else {
            $cart[$user->id][$product->id] = [
                "name" => $product->product_name,
                "quantity" => 1,
                "price" => $product->product_price,
                "image" => $product->product_image,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.index');
    }

    public function index()
    {
        $user = Auth::user();
        $cart = session()->get('cart', []);
        $userCart = isset($cart[$user->id]) ? $cart[$user->id] : [];
        $totalPrice = 0;
        foreach ($userCart as $id => $details) {
            $totalPrice += $details['price'] * $details['quantity'];
        }
        return view('cart', compact('userCart', 'totalPrice'));
    }

    public function remove(Request $request)
    {
        $user = Auth::user();
        $cart = session()->get('cart', []);

        if (isset($cart[$user->id][$request->id])) {
            unset($cart[$user->id][$request->id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }
    public function update(Request $request)
    {
        $user = Auth::user();
        $cart = session()->get('cart', []);

        if (isset($cart[$user->id][$request->id])) {
            $cart[$user->id][$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }
}
