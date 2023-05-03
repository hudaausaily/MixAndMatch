<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrderStoreRequest;
use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders = order::with('productTable')->get();
        // dd($orders);
        $data = [];
        foreach ($orders as $order) {
            $data[] = [
                'id' => $order->id,
                'first_name' => $order->first_name,
                'last_name' => $order->last_name,
                'phoneNumber' => $order->phoneNumber,
                'email'=>$order->email,
                'number_of_guest' => $order->number_of_guest,
                'res_date' => $order->res_date,
                'price' => $order->price,
                'status' => $order->status,
                'productTable' => isset($order->productTable) ? $order->productTable->name : "",
                'user' => isset($order->user) ? $order->user->name : "",


            ];
        }
        // $data= order::all();
        return view('admin.orderTable.show',compact('data'));
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
    public function store(orderStoreRequest $request)
    {
        // order::create([

        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'phoneNumber' => $request->phoneNumber,
        //     'email' => $request->email,
        //     'number_of_guest' => $request->number_of_guest,
        //     'res_date' => $request->res_date,
        //     'price' => $request->price,
        //     'status' => $request->status,
        //     'productTable_id' => $request->select,


        // ]);
        order::create($request->validated());

        return redirect()->route('admin.order.index');
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
        $data = order::findOrfail($id);
        return view('admin.orderTable.edit', ['data' => $data]);
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

        $data = order::findOrfail($id);

        $data->status = $request->status;


        $data->save();
        //-------------------------------

        return redirect()->route('admin.order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        order::findOrfail($id)->delete();
        return redirect()->route('admin.order.index');
    }
}
