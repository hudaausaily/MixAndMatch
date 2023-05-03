<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\order;
use DB;

use Illuminate\Http\Request;

class AdminController extends Controller

{
    public function index(){
        $query = "SELECT count(*) AS totalOpen from users u";
        $query_order = "SELECT count(*) AS `order` from orders u";
        $query_products = "SELECT count(*) AS product from products u";
        $query_message = "SELECT count(*) AS feed from feeds u";
        $totalOpen =DB::select($query);
        $order =DB::select($query_order);
        $product =DB::select($query_products);
        $feed =DB::select($query_message);

        $number_of_users=$totalOpen[0]->totalOpen;
        $number_of_order=$order[0]->order;
        $number_of_products=$product[0]->product;
        $number_of_message=$feed[0]->feed;
        // dd($number_of_productTables);

    return view('admin.index',['number_of_users'=>$number_of_users , 'number_of_products'=>$number_of_products,'number_of_order'=>$number_of_order,'number_of_message'=>$number_of_message]);
}
 public function admin(){

        $data=User::all();

        return view('admin.profile.show',['data'=>$data]);

    }
}
