<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ChildSubCategory;
use App\Model\SubCategory;
use App\Model\Category;

class ChildSubCategoryController extends Controller
{
    

    public function index()
   { 

    $data['childSubCategories'] = ChildSubCategory::with('subcategory', 'category')->get();
    $data['categories'] = Category::get();
    $data['subcategories'] = SubCategory::with('category')->get();

    return view('ChildSubCategory.index', $data);
   } 



    public function create()
    {
        $categories = Category::get();
        $child = SubCategory::get();
        return view('childSubCategory.create', compact( 'child','categories'));
      
    }


    public function store(Request $request)
    {
        $request->validate([
           'cate_id'=> 'required', 
           'subcate_id'=> 'required',
           'name' => 'required'
        ]);
 
 
        ChildSubCategory::create($request->all());
        return redirect()->route('childsubcategory.index')->with('success','Child subcategory created successfully.');      
    }

    public function destroy($id)
   {
       $childSubCategories = ChildSubCategory::findOrFail($id);
       $childSubCategories->delete();

       return redirect()->route('childsubcategory.index')->with('success','subcategory Delete successfully.');
   }  

   
}
