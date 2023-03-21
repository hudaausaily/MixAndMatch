<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

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
        $reservations = Reservation::where('user_id', $id)->get();
        // dd($reservations);
        $data = [];
        foreach ($reservations as $reservation) {
            $data[] = [
                'id' => $reservation->id,
                // 'first_name' => $reservation->first_name,
                // 'last_name' => $reservation->last_name,
                // 'phoneNumber' => $reservation->phoneNumber,
                // 'email'=>$reservation->email,
                'number_of_guest' => $reservation->number_of_guest,
                'res_date' => $reservation->res_date,
                'price' => $reservation->price,
                'status' => $reservation->status,
                'trip' => isset($reservation->trip) ? $reservation->trip->name : "",
                'trip_image' => isset($reservation->trip) ? $reservation->trip->image : "",
                // 'user' => isset($reservation->user) ? $reservation->user->name : "",


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
        // $data->price = $request->trip_price;
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
        Reservation::findOrfail($id)->delete();
        return redirect()->route('user.profile.index');
    }
}
