<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SubCategory;
//use App\Model\Category;

class SubCategoryController extends Controller
{
   /* public function index()
   {
        $data = SubCategory::with('category')->get();
        return $data;

        return view('category.manage-sub-cateogry', compact('data'));
   } */

   public function create()
   {
       return view('subCategory.create');
   }
   

}
