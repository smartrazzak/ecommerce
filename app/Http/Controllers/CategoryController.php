<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Model\Category;

class CategoryController extends Controller
{

    public function index()
    {
        return view('');
    }
    



    public function store(Request $request)
    {
        $request->validate([
            'cateogry_name' => 'required',
            'cateogry_slug' => 'required',
            
        ]);

        Category::create($request->all());

        return redirect()->route('category.index')
            ->with('success', 'Category created successfully.');
    }

}
