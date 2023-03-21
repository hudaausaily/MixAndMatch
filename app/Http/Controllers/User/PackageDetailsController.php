<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Trip;

use Illuminate\Http\Request;

class PackageDetailsController extends Controller
{
    public function index($id)
    {

        $trips = Trip::where('category_id',$id)->get();
        // dd( $trips);

        $data = [];
        foreach ($trips as $trip) {
            $data[] = [
                'id' => $trip->id,
                'name' => $trip->name,
                'short_description' => $trip->short_description,
                // 'long_description' => $trip->long_description,
                'guest_number' => $trip->guest_number,
                'price' => $trip->price,
                'image' => $trip->image,
                'category' => isset($trip->category) ? $trip->category->name : "",


            ];

        }
        
        return view('publicUser.bali',['data'=>$data]);
}
}
