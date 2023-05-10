<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageStoreRequest;

use App\Models\Product;
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
        $products = Product::with('category')->get();
        $data = [];
        foreach ($products as $product) {
            $data[] = [
                'id' => $product->id,
                'name' => $product->name,
                'short_description' => $product->short_description,
                'long_description' => $product->long_description,
                'price' => $product->price,
                'image' => $product->image,
                'category' => isset($product->category) ? $product->category->name : "",


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
            'name' => ['required'],
            'short_description' => ['required'],
            'long_description' => ['required'],
            'price' => ['required'],
            'category' => ['required'],
            'product_image' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
        ]);
        $photoName = $request->file('product_image')->getClientOriginalName();
        $request->file('product_image')->storeAs('public/image', $photoName);

        Product::create([

            'name' => $request->name,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'price' => $request->price,
            'category_id' => $request->category,
            'image' => $photoName,

        ]);

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('id', $id)->get();
        $data = [];
        foreach ($products as $product) {
            $data[] = [
                'id' => $product->id,
                'name' => $product->name,
                'short_description' => $product->short_description,
                'long_description' => $product->long_description,
                'price' => $product->price,
                'image' => $product->image,
                'category' => isset($product->category) ? $product->category->name : "",


            ];
        }
        if($products->isEmpty()) {
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
        $product = Product::where('id', $id)->get();

        // $productTable=productTable::findOrFail($id); is emptyما بتزبط مع ال
        if($product->isEmpty()) {
            return redirect()->back();
        }
        // if(count(productTable::all()) < $id || $id < 0){
        //     return redirect()->back();
        // }
        return view('admin.productTable.edit', [
            'data' => Product::findOrFail($id),'category'=>$category
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
            'name' => ['required'],
            'short_description' => ['required'],
            'long_description' => ['required'],
            'price' => ['required'],
            'category' => ['required'],
            'product_image' => ['required','image','mimes:jpg,png,jpeg,gif','max:2048'],
        ]);

        $photoName = $request->file('product_image')->getClientOriginalName();
        $request->file('product_image')->storeAs('public/image', $photoName);


        $data = Product::findOrfail($id);
        $data->name = $request->name;  //id لانه هون انا موجودة عندي البيانات من خلال ال  new model ما عملت هون
        $data->short_description = $request->short_description;
        $data->long_description = $request->long_description;
        $data->price = $request->price;
        $data->category_id = $request->category;
        $data->image = $photoName;
        $data->save();
        //-------------------------------

        return redirect()->route('admin.products.index');
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
        return redirect()->route('admin.products.index');
    }
}
