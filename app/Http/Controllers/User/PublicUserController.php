<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class PublicUserController extends Controller
{
    public function index(){
        $data=Category::all();


        return view('publicUser.home',['data'=>$data]);


}

 
}
