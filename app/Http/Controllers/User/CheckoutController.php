<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;


class CheckoutController extends Controller

{
    // public function __construct()
    // {
    //     if (!Auth()->user()) {

    //         return redirect()->route('user.shop')->with('message', 'Please sign in to continue');
    //     }

    // }
    public function index(Request $request, $id)
    {
        $cartItems = Cart::with('product')->get();
        

        $subtotal = 0;
                foreach ($cartItems as $cartItem) {
                    $subtotal += $cartItem->product->price * $cartItem->quantity;
                }
        
        return view('user.checkout', ['cartItems' => $cartItems, 'subtotal' => $subtotal]);
    }
    
}
