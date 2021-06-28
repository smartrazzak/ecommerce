<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Model\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $data = Category::get();
         return view('category.index',compact('data')); 
    }
    
    public function create()
    {

        $categories = Category::get();
        return view('category.create')->with('categories', $categories);
       // return view('category.create');

    }



    public function store(Request $request)
    {           
         $request->validate([
            'category_name' => 'required',
            'position' => 'required',
            'image' => 'required'
            
        ]);

        Category::create($request->all()); 
        return redirect()->route('category.index')->with('success', 'Category created successfully.'); 
    }

    public function edit($id)
    {
     $categories = Category::findOrFail($id);
 
     return view('category.edit', compact('categories'));
 
    }
 
    public function update(Request $request, $id)
    {
     $data = $request->validate([
         'category_name'=> 'required',
         'position'=> 'required', 
         'image' => 'required'
      ]);
 
      Category::whereId($id)->update($data);
 
      return redirect()->route('category.index')->with('success','category Update successfully.');
    }
 

    public function destroy($id)
   {
       $categories = Category::findOrFail($id);
       $categories->delete();

       return redirect()->route('category.index')->with('success','category Delete successfully.');
   }  


   

}
