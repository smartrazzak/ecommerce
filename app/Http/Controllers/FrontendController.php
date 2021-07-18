<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\Model\Category;
use App\Model\SubCategory;
use Illuminate\Http\Request;
use App\Model\ChildSubCategory;

class FrontendController extends Controller
{
    public function index()
    {
         $data['categories'] = Category::with('subCategories.child_categories')->get();
         $data['childSubCategories'] = ChildSubCategory::with('subcategory', 'category')->get();
                // $data['subcategories'] = SubCategory::with('category')->get();
                
         $data['products'] = Product::get();

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
     public function allCategory()
    {
        $data['categories'] = Category::with('subCategories')->get();
        return view('frontend.layouts.category', $data);

    }

    public function single_Product()
    {
        $data['products'] = Product::get();
        $data['categories'] = Category::with('subCategories')->get();
        return view('frontend.layouts.single-product', $data);

    }

    public function checkout()
    {
        return view('frontend.layouts.checkout');

    }

    public function allCheckout()
    {
        $data['products'] = Product::get();
        $data['categories'] = Category::with('subCategories')->get();
        return view('frontend.layouts.checkout', $data);

    }
     public function cart()
    {
        return view('frontend.layouts.cart');

    } 
    public function accountCart()
    {
        $data['products'] = Product::get();
        $data['categories'] = Category::with('subCategories')->get();
        return view('frontend.layouts.cart', $data);

    }
}
