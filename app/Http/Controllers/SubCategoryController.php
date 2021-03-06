<?php

namespace App\Http\Controllers;


use App\Model\Category;
use Illuminate\Http\Request;
use App\Model\SubCategory;

class SubCategoryController extends Controller
{
    public function index()
   {
       
    // $data['categories'] = Category::with('subCategories')->get();
    $data['subcategories'] = SubCategory::with('category')->get();

    return view('subCategory.index', $data);
   } 

   public function create()
   {
       $subcategories = Category::get();
       return view('subCategory.create')->with('categories', $subcategories);
   }

   public function store(Request $request)
   {


       $catsub = new SubCategory;
       $catsub->subCat_name = $request->input('subCat_name');
       $catsub->cate_id = $request->input('cate_id');
       $catsub->image = $request->input('image');

       if($request->hasfile('image'))
       {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('uploads/subcategory/', $filename);
         $catsub->image = $filename;
       }

       $catsub->save();

       return redirect()->route('subCategory.index')->with('success','subcategory created successfully.');      
   }
   
   public function edit($id)
   {
    $subcategories = SubCategory::findOrFail($id);

    return view('subCategory.edit', compact('subcategories'));

   }

   public function update(Request $request, $id)
   {
    $data = $request->validate([
        'subCat_name'=> 'required',
        'cate_id'=> 'required', 
        'image' => 'required'
     ]);

     SubCategory::whereId($id)->update($data);

     return redirect()->route('subCategory.index')->with('success','subcategory Update successfully.');
   }

   public function destroy($id)
   {
       $subcategories = SubCategory::findOrFail($id);
       $subcategories->delete();

       return redirect()->route('subCategory.index')->with('success','subcategory Delete successfully.');
   }  

}
