<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        //call the model
        //Getting all the data
        $products = Product::all();
        return view('product.index',['products'=>$products]);

    }
    public function create()
    {
        return view('product.create'); //to view only

    }

    public function store(Request $request)
    {
        //dd($request->name);//accesing data on frontend in controller on showing name

        //validation and storing data into the db
        $data = $request->validate([
            'name' => 'required',
            //it is required and the data type
            'qty' => 'required|numeric',
            'price' => 'required|decimal:2',
           'description' => 'nullable'
        ]);

        $newProduct = Product::create($data);
        //after storing data i should be redirected to index
        return redirect(route('product.index'));

    }

    public function edit(Product $product){
        //to taste if it is getting any data, 
        //dd($product);
        return view('product.edit', ['product'=>$product]);

    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            //it is required and the data type
            'qty' => 'required|numeric',
            'price' => 'required|decimal:2',
           'description' => 'nullable'
        ]);
        //to update
        $product->update($data);
        return redirect(route('product.index'))->with('success', 'Product updated Successfully');
    }
    public function delete(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('delete', 'Product deleted Successfully');
   
    }
}