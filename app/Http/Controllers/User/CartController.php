<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
        public function index()
        {
            $cartItem = array();

        $cartItems = Cart::with('product')->get();
        

        $subtotal = 0;
                foreach ($cartItems as $cartItem) {
                    $subtotal += $cartItem->product->price * $cartItem->quantity;
                }
        return view('user.cart', ['cartItems' => $cartItems, 'subtotal' => $subtotal]);

        }
   
        // public function addToCart(Request $request, $id)
        // {
        //     $product = Product::find($id);
        //     if (!Auth()->user()) {
        //         return redirect()->back()->with('error', 'Please sign in to add products to your cart!');
        //     }
        
        //     $cart = new Cart();
        //     $cart->user_id = Auth()->user()->id;
        //     $cart->product_id = $product->id;
        //     $cart->quantity= 1;
        //     // $cart->price = $product->price;
        //     $cart->save();
        
        //     return redirect()->route('user.cart.show')->with('success', 'Product added to cart successfully!');
        // }
        public function addToCart(Request $request, $id)
{
    $product = Product::find($id);
    if (!Auth()->user()) {
        return redirect()->back()->with('error', 'Please sign in to add products to your cart!');
    }
    
    // check if the product is already in the cart
    $cart = Cart::where('product_id', $product->id)
                ->where('user_id', Auth()->user()->id)
                ->first();
    
    if ($cart) {
        return redirect()->back()->with('error', 'Product already in cart!');
    }

    // add the product to the cart
    $cart = new Cart();
    $cart->user_id = Auth()->user()->id;
    $cart->product_id = $product->id;
    $cart->quantity= 1;
    // $cart->price = $product->price;
    $cart->save();

    return redirect()->route('user.cart.show')->with('success', 'Product added to cart successfully!');
}

        public function updateCart(Request $request, $id)
            {
                $cartItem = Cart::findOrFail($id);
                $cartItem->quantity = $request->quantity;
                $cartItem->save();

                $cartItems = Cart::with('product')->get();
                $subtotal = 0;
                foreach ($cartItems as $cartItem) {
                    $subtotal += $cartItem->product->price * $cartItem->quantity;
                }
                return redirect()->route('user.cart.show')->with('success', 'Cart updated successfully!')->with(['cartItems' => $cartItems, 'subtotal' => $subtotal, 'cartItem'=> $cartItem]);
            }

            public function update(){
                
            }

           
            


        public function removeFromCart($id)
{
    Cart::find($id)->delete();
    return redirect()->route('user.cart.show')->with('success', 'Product removed from cart successfully!');
}
}
