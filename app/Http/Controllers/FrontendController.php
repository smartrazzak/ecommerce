<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\SubCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
         $data['categories'] = Category::with('subCategories')->get();
                // $data['subcategories'] = SubCategory::with('category')->get();
        return view('frontend.layouts.home', $data);
    }

     public function about()
    {
        return view('frontend.layouts.about');

    }

    public function category()
    {
        return view('frontend.layouts.category');

    }
    public function singleProduct()
    {
        return view('frontend.layouts.single-product');

    }

    public function checkout()
    {
        return view('frontend.layouts.checkout');

    }

     public function cart()
    {
        return view('frontend.layouts.cart');

    }
}
