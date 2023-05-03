<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;

use App\Models\User;


class ProfileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $orders = order::where('user_id', $id)->get();
        // dd($orders);
        $data = [];
        foreach ($orders as $order) {
            $data[] = [
                'id' => $order->id,
                // 'first_name' => $order->first_name,
                // 'last_name' => $order->last_name,
                // 'phoneNumber' => $order->phoneNumber,
                // 'email'=>$order->email,
                'number_of_guest' => $order->number_of_guest,
                'res_date' => $order->res_date,
                'price' => $order->price,
                'status' => $order->status,
                'product' => isset($order->product) ? $order->product->name : "",
                'product_image' => isset($order->product) ? $order->product->image : "",
                // 'user' => isset($order->user) ? $order->user->name : "",


            ];
        }
        // dd($data);

        return view('publicUser.profile', ['data' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('publicUser.editProfile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = User::findorFail($id);
        $profile->name = $request->name;  //id لانه هون انا موجودة عندي البيانات من خلال ال  new model ما عملت هون
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        // $profile->guest_number = $request->guest_number;
        // $data->price = $request->product_price;
        // $data->category_id = $request->select;
        // $data->image = $photoName;
        $profile->save();
        // return view('publicUser.profile');
        return redirect()->route('user.profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        order::findOrfail($id)->delete();
        return redirect()->route('user.profile.index');
    }
}
