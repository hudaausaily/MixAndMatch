<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\product;

use Illuminate\Http\Request;

class EditBookController extends Controller
{

    public function index($id)
    {

        $order = order::where('id', $id)->get();
        if($order->isEmpty()) {
            return redirect()->back();
        }

        $product_id=$order[0]->product_id;

        $product = product::where('id', $product_id)->get();

        // dd($product);
        return view('publicUser.editBook', ['order' => $order,'product'=>$product]);
    }
    public function update(Request $request , $id)
    {


        $product_id=$request->product_id;
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phoneNumber' => ['required', 'max:10' ,'min:10'],
            'res_date' => ['required'],
        ]);

        $data = product::findOrfail($product_id);
        if(  $data->guest_number ==1){
            $price =$request->guest_number*$data->price;
        }else{
            $price=$data->price;
        }
        $user=$request->user_id;
        // dd($request->guest_number);

        $data = order::findOrfail($id);
        $date1=date_create(  $data->res_date );
        $date2=date_create(now());
        $diff=date_diff($date2,$date1);


        if($diff->format("%d%")>3){
        $data->first_name = $request->first_name ;  //id لانه هون انا موجودة عندي البيانات من خلال ال  new model ما عملت هون
        $data->user_id = $user;
        $data->last_name = $request->last_name;
        $data->phoneNumber = $request->phoneNumber;
        $data->email = $request->email;
        $data->number_of_guest = $request->guest_number;
        $data->res_date = $request->res_date;
        $data->comment = $request->comment;
        $data->price = $price;
        $data->status = 'Pending';
        $data->product_id = $product_id;
        $data->save();


        return redirect()->route('user.profile.index');
        }else{
            return redirect()->back()->with('danger','not success');

        }


    }

}
