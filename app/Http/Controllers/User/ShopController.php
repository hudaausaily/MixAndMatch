<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){

        $products= Product::all();
        return view('user.shop',['products'=> $products]);
    }

        public function single($id)
    {
        $product = Product::findOrFail($id);

        return view('user.singleProduct', compact('product'));
    }

    



    
}
