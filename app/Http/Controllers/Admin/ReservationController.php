<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReservationStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $reservations = Reservation::with('trip')->get();
        // dd($reservations);
        $data = [];
        foreach ($reservations as $reservation) {
            $data[] = [
                'id' => $reservation->id,
                'first_name' => $reservation->first_name,
                'last_name' => $reservation->last_name,
                'phoneNumber' => $reservation->phoneNumber,
                'email'=>$reservation->email,
                'number_of_guest' => $reservation->number_of_guest,
                'res_date' => $reservation->res_date,
                'price' => $reservation->price,
                'status' => $reservation->status,
                'trip' => isset($reservation->trip) ? $reservation->trip->name : "",
                'user' => isset($reservation->user) ? $reservation->user->name : "",


            ];
        }
        // $data= Reservation::all();
        return view('admin.reservationTable.show',compact('data'));
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
    public function store(ReservationStoreRequest $request)
    {
        // Reservation::create([

        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'phoneNumber' => $request->phoneNumber,
        //     'email' => $request->email,
        //     'number_of_guest' => $request->number_of_guest,
        //     'res_date' => $request->res_date,
        //     'price' => $request->price,
        //     'status' => $request->status,
        //     'trip_id' => $request->select,


        // ]);
        Reservation::create($request->validated());

        return redirect()->route('admin.reservation.index');
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
        $data = Reservation::findOrfail($id);
        return view('admin.reservationTable.edit', ['data' => $data]);
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

        $data = Reservation::findOrfail($id);

        $data->status = $request->status;


        $data->save();
        //-------------------------------

        return redirect()->route('admin.reservation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::findOrfail($id)->delete();
        return redirect()->route('admin.reservation.index');
    }
}
