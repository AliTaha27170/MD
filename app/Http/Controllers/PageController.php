<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class PageController extends Controller
{
    public function products($ItemCategoryName)
    {
        $products   = Product::where('ItemCategoryName',$ItemCategoryName)->get();
        $categories = Category::where("category_id",NULL)->get();
        return view('foods',compact('products','categories','ItemCategoryName'));
    }

    public function index()
    {
        $category = Category::where("category_id",NULL)->get()->first();
        return view('index',compact('category'));


    }

}
