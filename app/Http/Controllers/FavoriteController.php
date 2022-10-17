<?php

namespace App\Http\Controllers;

use App\Category;
use App\Models\Favorite;
use App\Product;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function like($id)
    {
        $user_id = auth()->user()->id;
        $fav=Favorite::where("user_id",$user_id)->where("product_id",$id)->get();
        if(count($fav)){

            $fav->each->delete();
            

        }
        else
        {
            Favorite::create(
                [
                    "user_id"    => $user_id ,
                    "product_id" => $id,
                ]
                );
        }
    }


    public function favorite_list ()
    {
        
        //$products   = Product::where('ItemCategoryName',$ItemCategoryName)->get();
        $categories = Category::where('active',1)->where("category_id",NULL)->orderBy("name",'ASC')->get();
        $category   = Category::where('active',1)->where("category_id",NULL)->orderBy("name",'ASC')->get()->first();

        $ItemCategoryName =$category->name;

        return view('favorite_list',compact('category','categories','ItemCategoryName'));
        
    }
}
