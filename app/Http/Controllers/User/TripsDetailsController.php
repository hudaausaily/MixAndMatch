<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\product;

use Illuminate\Http\Request;

class productsDetailsController extends Controller
{
    public function index($id)
    {

        if(count(product::all()) < $id || $id < 0){
            return redirect()->back();
        }


        $products = product::where('id',$id)->get();

        $data = [];
        foreach ($products as $product) {
            $data[] = [
                'id' => $product->id,
                'name' => $product->name,
                'short_description' => $product->short_description,
                'long_description' => $product->long_description,
                'guest_number' => $product->guest_number,
                'price' => $product->price,
                'image' => $product->image,
                'image2' => $product->image2,
                'category' => isset($product->category) ? $product->category->name : "",


            ];
        };
        return view('publicUser.details', [
            'data' => $data
        ]);
        // return view('publicUser.details',compact('data'));
        // return view('publicUser.details',['data'=>$data]);

    }
}
