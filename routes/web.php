<?php

use Illuminate\Support\Facades\Route;

use App\Models\clothes;
use App\Models\Blog;
use App\Models\tableimg;
use Darryldecode\Cart\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('aboutUs');
})->name('about');
Route::get('/404', function () {
    return view('404');
})->name('404');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');
Route::get('/card-product', function () {
    return view('productCard');
})->name('card-product');
Route::get('/basket', function () {
    return view('basket');
})->name('basket');
Route::get('/getDataSlider','App\Http\Controllers\DataController@getDataSlider');
Route::get('/getDataNew','App\Http\Controllers\DataController@getDataNew');
Route::get('/getDataBlogs', 'App\Http\Controllers\DataController@getDataBlogs');
Route::get('/getDataCatalog', 'App\Http\Controllers\DataController@getDataCatalog');
Route::get('/card-product/{id}', 'App\Http\Controllers\DataController@getCardProduct');
Route::get('/getCardData', 'App\Http\Controllers\DataController@getCardData');
Route::get('/blog/{id}', 'App\Http\Controllers\DataController@getBlog');
Route::get('/basketData', 'App\Http\Controllers\BasketController@basketData')->name('basketData');
Route::get('/add-to-cart', 'App\Http\Controllers\BasketController@addToCart')->name('addToCart');
Route::get('/remove-to-cart', 'App\Http\Controllers\BasketController@removeToCart')->name('removeToCart');
Route::get('/remove-all-cart', 'App\Http\Controllers\BasketController@removeAllCart')->name('removeAllCart');
Route::get('/basket-place', 'App\Http\Controllers\BasketController@BasketPlace')->name('BasketPlace');
Route::post('/basket-confirm', 'App\Http\Controllers\BasketController@BasketConfirm')->name('BasketConfirm');
Route::get('/preview', 'App\Http\Controllers\BasketController@GetPreview')->name('preview');
Route::get('/finish-order', 'App\Http\Controllers\BasketController@finishOrder')->name('finish-order');
Route::get('/basket-count', 'App\Http\Controllers\BasketController@BasketCount')->name('basket-count');
Route::get('/modalBasket', 'App\Http\Controllers\BasketController@modalBasket')->name('modalBasket');
Route::get('/getDataBlog', 'App\Http\Controllers\DataController@getDataBlog');
Route::get('/slider', function () {
    return view('test');
});
Route::get('/test', function () {
    for($j=1; $j<30;$j++){
        for($i=1; $i<4; $i++){
            $current_status = rand(2, 5);
            $newObject = tableimg::create(array(
                'id_product'=>$j,
                'img_path'=> '/assets/img/'.$current_status.'.jpg'
            ));
            $newObject->save();
        }
    }
    $collection = clothes::select('category', 'name', 'price', 'img_path')->get();
    for($i=2; $i<11; $i++){
        $newObject = Blog::create(array(
            'author'=>'Коля Крючков',
            'topic' => 'Новая тема',
            'title'=> 'Что происходит в мире?',
            'text'=> 'Мне бегом делать прививки!',
            'img_path'=> '/assets/img/'.$i.'.jpg'
        ));
        $newObject->save();
    }
    for($i=1; $i<50; $i++){
        $current_status = rand(1, 4);
        $newObject = clothes::create(array(
            'category' => 'Футболка',
            'name'=> 'Футболка с тигром',
            'price' => 20.00,
            'img_path'=> '/assets/img/2.jpg',
            'status'=> $current_status,
            'reviews'=> 0,
            'old_price'=>40.00,
            'description'=>"Описание",
            'tags'=>'Летняя'
        ));
        $newObject->save();
    }
});

Auth::routes();


