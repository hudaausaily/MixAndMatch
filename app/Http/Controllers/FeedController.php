<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;
use App\Models\User;
use DB;

class FeedController extends Controller
{
    public function index(){
        return view('publicUser.contact');
    }
    public function store(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phoneNumber' => ['required', 'max:10'],
            'subject' => ['required','string','max:255'],
            'message' => ['required','string', 'max:255'],
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $phoneNumber = $request->input('phoneNumber');
        $subject = $request->input('subject');
        $message = $request->input('message');
        $data=array('name'=>$name,"email"=>$email,"phoneNumber"=>$phoneNumber,
        "subject"=>$subject,'message'=>$message);
        DB::table('feeds')->insert($data);

        return redirect()->route('user.contact');
    }
    public function show(){
        $data=Feed::all();
        // dd($data);
        return view('admin.messages.show',['data'=>$data]);
    }
}
