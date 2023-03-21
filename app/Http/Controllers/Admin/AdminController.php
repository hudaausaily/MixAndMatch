<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Reservation;
use DB;

use Illuminate\Http\Request;

class AdminController extends Controller

{
    public function index(){
        $query = "SELECT count(*) AS totalOpen from users u";
        $query_reservation = "SELECT count(*) AS reservation from reservations u";
        $query_trips = "SELECT count(*) AS trip from trips u";
        $query_message = "SELECT count(*) AS feed from feeds u";
        $totalOpen =DB::select($query);
        $reservation =DB::select($query_reservation);
        $trip =DB::select($query_trips);
        $feed =DB::select($query_message);

        $number_of_users=$totalOpen[0]->totalOpen;
        $number_of_reservation=$reservation[0]->reservation;
        $number_of_trips=$trip[0]->trip;
        $number_of_message=$feed[0]->feed;
        // dd($number_of_trips);

    return view('admin.index',['number_of_users'=>$number_of_users , 'number_of_trips'=>$number_of_trips,'number_of_reservation'=>$number_of_reservation,'number_of_message'=>$number_of_message]);
}
 public function admin(){

        $data=User::all();

        return view('admin.profile.show',['data'=>$data]);

    }
}
