<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class PageController extends Controller
{
    public function products($ItemCategoryName)
    {
        $products   = Product::where('ItemCategoryName',$ItemCategoryName)->orderBy('SortingLevel2')->orderBy('ItemID')->where("Availability",1)->get();
        $ItemCategoryName = Category::find($ItemCategoryName)->name;
        $categories = Category::where("category_id",NULL)->where('active',1)->orderBy('name','ASC')->get();
        $category   = Category::where("category_id",NULL)->where('active',1)->get()->first();

        return view('foods',compact('products','category','categories','ItemCategoryName'));
    }

    public function index()
    {
        $category = Category::where("category_id",NULL)->get()->first();
        return view('index',compact('category'));


    }


    
    public function cookbooks()
    {
        $category = Category::where("category_id",NULL)->get()->first();
        return view('index',compact('category'));
    }

    
    public function products_listing()
    {
        $category = Category::where("category_id",NULL)->get()->first();
        return view('index',compact('category'));


    }
    
    public function about_us()
    {
        $category = Category::where("category_id",NULL)->get()->first();
        return view('about',compact('category'));


    }
    
    public function contact_us()
    {
        $category = Category::where("category_id",NULL)->get()->first();
        return view('contact',compact('category'));


    }


}
