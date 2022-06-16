<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Product;
use App\Category;
use App\Brand;

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

Route::get('/', [PageController::class , 'index'] );


Route::get('/food-products/{ItemCategoryName}', [PageController::class , "products"])->name("food");

Route::get('/cookbooks', function () {
    return view('cookbooks');
});

Route::get('/products-listing', function () {
    return view('products-listing');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact');
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
