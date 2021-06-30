<?php

namespace App\Http\Controllers;

use App\Model\Brand;
use App\Model\Product;
use App\Model\Category;
use App\Model\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index ()
    {
        $data['products'] = Product::get();
        $data['brands'] = Brand::get();
        $data['categories'] = Category::get();
        $data['subcategories'] = SubCategory::with('category')->get();
    // return $data;
        return view('product.index', $data);
    }

    public function create ()
    {
        $categories = Category::get();
        $child = SubCategory::get();
        $brand = Brand::get();
      return view('product.create', compact('child','categories', 'brand'));
    }

    public function store (Request $request)
    {
      
        //  $pro = new Product;
        //  $pro->cate_id = $request->input('cate_id');
        //  $pro->eng_name = $request->input('eng_name');
        //  $pro->bang_name = $request->input('bang_name');
        //  $pro->pro_code = $request->input('pro_code');
        //  $pro->price = $request->input('price');
        //  $pro->image = $request->input('image');

        $data=$request->except('image');
         if($request->hasfile('image'))
         {
           $file = $request->file('image');
           $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file->move('uploads/product/', $filename);
           $data['image'] = $filename;
         }
  
        //  $pro->save();
        Product::create($data);


        return redirect()->route('products.index')->with('success','Product created successfully.'); 
    }
    
}
