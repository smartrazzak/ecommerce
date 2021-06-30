<?php

namespace App\Http\Controllers;

use App\Model\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    
    public function index()
    {
        $allbrand = Brand::get();
        return view('brand.index', compact('allbrand'));
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->name = $request->input('name');
        if($request->hasfile('image'))
        {
          $file = $request->file('image');
          $extention = $file->getClientOriginalExtension();
          $filename = time().'.'.$extention;
          $file->move('uploads/brand/', $filename);
          $brand->image = $filename;
        }
       
        $brand->save();

        return redirect()->route('brands.index')->with('success', 'Brand created successfully.');
    }

    public function edit($id)
    {
     $brand = Brand::findOrFail($id);
 
     return view('brand.edit', compact('brand'));
 
    }
 
    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->name = $request->input('name');
        if($request->has('image'))
        {
          $file = $request->file('image');
          $extention = $file->getClientOriginalExtension();
          $filename = time().'.'.$extention;
          $file->move('uploads/brand/', $filename);
          $brand->image = $filename;
        }
        $brand->save();
      /* Brand::whereId($id)->update($brand); */
 
      return redirect()->route('brands.index')->with('success','Brand Update successfully.');
    }
 

    public function destroy($id)
   {
       $brand = Brand::findOrFail($id);
       $brand->delete();

       return redirect()->route('brands.index')->with('success','Brand Delete successfully.');
   }  
}
