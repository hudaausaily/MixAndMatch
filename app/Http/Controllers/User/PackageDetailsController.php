<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\product;

use Illuminate\Http\Request;

class PackageDetailsController extends Controller
{
    public function index($id)
    {

        $products = product::where('category_id',$id)->get();
        // dd( $products);

        $data = [];
        foreach ($products as $product) {
            $data[] = [
                'id' => $product->id,
                'name' => $product->name,
                'short_description' => $product->short_description,
                // 'long_description' => $product->long_description,
                'guest_number' => $product->guest_number,
                'price' => $product->price,
                'image' => $product->image,
                'category' => isset($product->category) ? $product->category->name : "",


            ];

        }
        
        return view('publicUser.bali',['data'=>$data]);
}
}
