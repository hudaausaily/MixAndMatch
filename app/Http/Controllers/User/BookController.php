<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Trip;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index($id)
    {

        if(count(Trip::all()) < $id || $id < 0){
            return redirect()->back();
        }
        return view('publicUser.book', [
            'data' => Trip::findOrFail($id)
        ]);
        // $data = Trip::findOrfail($id);
        // return view('publicUser.book',['data'=>$data]);

    }
    public function create(Request $request , $id)
    {

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phoneNumber' => ['required', 'max:10' ,'min:10'],
            'res_date' => ['required'],
        ]);


        $data = Trip::findOrfail($id);
        if(  $data->guest_number ==1){
            $price =$request->guest_number*$data->price;
        }else{
            $price=$data->price;
        }
// dd($price);
        $user=$request->user_id;
        // dd($request->guest_number);
        Reservation::create([

            'first_name' => $request->first_name,
            'user_id' => $user,
            'last_name' => $request->last_name,
            'phoneNumber' => $request->phoneNumber,
            'email' => $request->email,
            'number_of_guest' => $request->guest_number,
            'res_date' => $request->res_date,
            'comment' => $request->comment,
            'price' =>   $price,
            'status' => 'Pending',
            'trip_id' => $id,


        ]);

        return redirect()->route('user.profile.index')->with('success','Reservation Successful,thank you for booking.');

    }

}
