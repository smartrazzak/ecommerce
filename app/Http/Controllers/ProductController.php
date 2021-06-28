<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;

class ProductController extends Controller
{
    public function index()

    {
        $product = Product::get();
        return view('product.index' , compact('product'));

        /* return view('product.index'); */

    }


    public function create()
    {
        $product = Product::get();
        return view('product.create', compact('product'));
    }

    public function store(Request $request)
    {


        $request->validate([
            'product_name' => 'required',
            'product_code' => 'required',
            'price' => 'required',
            'details' => 'required'
        ]);

        Product::create($request->all());

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }



    public function edit($id)
    {
     $product = Product::findOrFail($id);
 
     return view('product.edit', compact('product'));
 
    }
 
    public function update(Request $request, $id)
    {
     $data = $request->validate([
        'product_name' => 'required',
        'product_code' => 'required',
        'price' => 'required',
        'details' => 'required'
      ]);
 
      Product::whereId($id)->update($data);
 
      return redirect()->route('product.index')->with('success','category Update successfully.');
    }
 

    public function destroy($id)
   {
       $product = Product::findOrFail($id);
       $product->delete();

       return redirect()->route('product.index')->with('success','category Delete successfully.');
   }  

}
