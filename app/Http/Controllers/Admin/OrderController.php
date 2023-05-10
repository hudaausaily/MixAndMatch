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

        $orders = order::with('product')->get();
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
    public function store(OrderStoreRequest $request)
{
    $cartItems = json_decode($request->input('cartItems'));

    // create a new order with the submitted data
    $order = new Order();
    $order->name = $request->input('name');
    $order->email = $request->input('email');
    $order->address = $request->input('address');
    $order->phone = $request->input('phone');
    $order->comment = $request->input('bill');
    $order->subtotal = $request->input('subtotal');
    $order->status = 'Pending';
    $order->product_id = $cartItems[0]->product->id; // assuming there's only one product in the cart
    $order->user_id = auth()->user()->id; // assuming there's an authenticated user
    $order->save();

    // associate the order with the cart items
    foreach ($cartItems as $cartItem) {
        $orderItem = new OrderItem();
        $orderItem->product_id = $cartItem->product->id;
        $orderItem->quantity = $cartItem->quantity;
        $orderItem->price = $cartItem->product->price;
        $orderItem->order_id = $order->id;
        $orderItem->save();
    }

    // redirect to a success page or show a success message
    return redirect()->route('user.orders')->with('success', 'Order placed successfully.');
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
