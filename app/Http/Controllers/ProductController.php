<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;

class ProductController extends Controller
{
    public function index()

    {
       /*  $product = Product::all();
        return view('product.index' , compact('product')); */

        return view('product.index');

    }


    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_code' => 'required',
            'price' => 'required'
        ]);

        Product::create($request->all());

        return redirect()->route('product.index')
            ->with('success', 'Product created successfully.');
    }

}
