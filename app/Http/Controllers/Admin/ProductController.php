<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageStoreRequest;

use App\Models\product;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productTables = Product::with('category')->get();
        $data = [];
        foreach ($productTables as $productTable) {
            $data[] = [
                'id' => $productTable->id,
                'name' => $productTable->name,
                'short_description' => $productTable->short_description,
                'long_description' => $productTable->long_description,
                'guest_number' => $productTable->guest_number,
                'price' => $productTable->price,
                'image' => $productTable->image,
                'image2' => $productTable->image2,
                'category' => isset($productTable->category) ? $productTable->category->name : "",


            ];
        }


        return view('admin.productTable.show',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();

        return view('admin.productTable.create',['category'=>$category]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'productTable_name' => ['required'],
            'short_description' => ['required'],
            'long_description' => ['required'],
            'guest_number' => ['required'],
            'productTable_price' => ['required'],
            'select' => ['required'],
            'productTable_image' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
            'productTable_image2' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
        ]);
        $photoName = $request->file('productTable_image')->getClientOriginalName();
        $request->file('productTable_image')->storeAs('public/image', $photoName);
        $photoName2 = $request->file('productTable_image2')->getClientOriginalName();
        $request->file('productTable_image2')->storeAs('public/image', $photoName2);

        productTable::create([

            'name' => $request->productTable_name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'guest_number' => $request->guest_number,
            'price' => $request->productTable_price,
            'category_id' => $request->select,
            'image' => $photoName,
            'image2' => $photoName2,

        ]);

        return redirect()->route('admin.productTables.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productTables = Product::where('id', $id)->get();
        $data = [];
        foreach ($productTables as $productTable) {
            $data[] = [
                'id' => $productTable->id,
                'name' => $productTable->name,
                'short_description' => $productTable->short_description,
                'long_description' => $productTable->long_description,
                'guest_number' => $productTable->guest_number,
                'price' => $productTable->price,
                'image' => $productTable->image,
                'image2' => $productTable->image2,
                'category' => isset($productTable->category) ? $productTable->category->name : "",


            ];
        }
        if($productTables->isEmpty()) {
            return redirect()->back();
        }

        return view('admin.productTable.details', [
            'data' =>  $data 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $category=Category::all();
        $productTable = Product::where('id', $id)->get();

        // $productTable=productTable::findOrFail($id); is emptyما بتزبط مع ال
        if($productTable->isEmpty()) {
            return redirect()->back();
        }
        // if(count(productTable::all()) < $id || $id < 0){
        //     return redirect()->back();
        // }
        return view('admin.productTable.edit', [
            'data' => productTable::findOrFail($id),'category'=>$category
        ]);


        // $data = productTable::findOrfail($id);

        // return view('admin.productTable.edit', ['data' => $data,'category'=>$category]);
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
        $request->validate([
            'productTable_name' => ['required'],
            'short_description' => ['required'],
            'long_description' => ['required'],
            'guest_number' => ['required'],
            'productTable_price' => ['required'],
            'select' => ['required'],
            'productTable_image' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
            'productTable_image2' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
        ]);

        $photoName = $request->file('productTable_image')->getClientOriginalName();
        $request->file('productTable_image')->storeAs('public/image', $photoName);
        $photoName2 = $request->file('productTable_image2')->getClientOriginalName();
        $request->file('productTable_image2')->storeAs('public/image', $photoName2);


        $data = productTable::findOrfail($id);
        $data->name = $request->productTable_name;  //id لانه هون انا موجودة عندي البيانات من خلال ال  new model ما عملت هون
        $data->short_description = $request->short_description;
        $data->long_description = $request->long_description;
        $data->guest_number = $request->guest_number;
        $data->price = $request->productTable_price;
        $data->category_id = $request->select;
        $data->image = $photoName;
        $data->image2 = $photoName2;
        $data->save();
        //-------------------------------

        return redirect()->route('admin.productTables.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrfail($id)->delete();
        return redirect()->route('admin.productTables.index');
    }
}
