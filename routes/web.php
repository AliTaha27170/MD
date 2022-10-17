<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Product;
use App\Category;
use App\Brand;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FavoriteController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class , 'index'] )->name('index');


Route::get('/food-products/{ItemCategoryName}', [PageController::class , "products"])->name("food");

Route::get('/cookbooks', [PageController::class , "cookbooks"])->name("cookbooks");
Route::get('/products-listing', [PageController::class , "products_listing"])->name("products-listing");
Route::get('/about-us', [PageController::class , "about_us"])->name("about-us");
Route::get('/contact-us', [PageController::class , "contact_us"])->name("contact-us");




// 'middleware' => 'auth'
Route::group([], function () {
   Route::post("checkout",[checkoutController::class , "checkout"])->name("checkout");
});

Route::group(['middleware' => 'auth'], function () {
    Route::get("favorite/{id}",[FavoriteController::class , "like"])->name("like");
    Route::get("favorite_list",[FavoriteController::class , "favorite_list"])->name("favorite_list");
 });
 

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get("test",function(){

    $products = Product::get();

    foreach ($products as $product) {
        $product->update([
            "ItemImage"  => "products/".$product['ItemID']."-L.jpg"
        ]);
        # code...
    }

});
Route::get("update_customers/{key}",[CustomerController::class , "update"])->name("update_customers");

Route::get("login",function () {
return redirect("/update_customers/login");
})->name("login");

Route::post("logout",function () {
    Auth::logout();
    return back();
    })->name("logout");

    
Route::get("cus",function () {
    return redirect("/update_customers/cus");
    })->name("cus");
    