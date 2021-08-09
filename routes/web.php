<?php

use Illuminate\Support\Facades\Route;

use App\Models\clothes;
use App\Models\Blog;
use App\Models\tableimg;
use Darryldecode\Cart\Cart;
use App\Models\Order;
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

Route::get('/basket', 'App\Http\Controllers\BasketController@basket')->name('basket');
Route::get('/getDataSlider','App\Http\Controllers\DataController@getDataSlider');
Route::get('/getDataNew','App\Http\Controllers\DataController@getDataNew');
Route::get('/getDataBlogs', 'App\Http\Controllers\DataController@getDataBlogs');
Route::get('/getDataCatalog', 'App\Http\Controllers\DataController@getDataCatalog');
Route::get('/card-product/{id}', 'App\Http\Controllers\DataController@getCardProduct');
Route::get('/blog/{id}', 'App\Http\Controllers\DataController@getBlog');
Route::post('/add-to-cart/{id}', 'App\Http\Controllers\BasketController@addToCart')->name('addToCart');
Route::post('/remove-to-cart/{id}', 'App\Http\Controllers\BasketController@removeToCart')->name('removeToCart');
Route::post('/remove-all-cart/{id}', 'App\Http\Controllers\BasketController@removeAllCart')->name('removeAllCart');
Route::get('/basket-place', 'App\Http\Controllers\BasketController@BasketPlace')->name('BasketPlace');
Route::post('/basket-confirm', 'App\Http\Controllers\BasketController@BasketConfirm')->name('BasketConfirm');
Route::get('/preview', 'App\Http\Controllers\BasketController@GetPreview')->name('preview');
Route::get('/finish-order', 'App\Http\Controllers\BasketController@finishOrder')->name('finish-order');


Route::get('/basket-count', function(){
    $count = 0;
    $orderId = session('orderId');
    if(!is_null($orderId)){
        $order = Order::find(session('orderId'));
        foreach($order->clothes as $product){
            $count =$count + $product->pivot->count;
        }
    }
    return $count;
});
Route::get('/slider', function () {
    return view('test');
});
Route::get('/test', function () {
    session()->forget('orderId');
    // $orderId = session('orderId'); 
    // $order = Order::find($orderId); 
    // $array = $order->clothes;
    // foreach($array as $item){
    //     if($item->)
    // }
    // if($order->clothes->contains(1)){
    //     return 1;
    // }
    // else{
    //     return 0;
    // }
   // return $order->clothes->contains(1);
    // for($i=1; $i<4; $i++){
    //     $current_status = rand(2, 5);
    //     $newObject = tableimg::create(array(
    //         'id_product'=>1,
    //         'img_path'=> '/assets/img/'.$current_status.'.jpg'
    //     ));
    //     $newObject->save();
    // }
    // $collection = clothes::select('category', 'name', 'price', 'img_path')->get();
    // for($i=2; $i<11; $i++){
    //     $newObject = Blog::create(array(
    //         'author'=>'Коля Крючков',
    //         'topic' => 'Новая тема',
    //         'title'=> 'Что происходит в мире?',
    //         'text'=> 'Мне бегом делать прививки!',
    //         'img_path'=> '/assets/img/'.$i.'.jpg'
    //     ));
    //     $newObject->save();
    // }
    // for($i=1; $i<50; $i++){
    //     $current_status = rand(1, 4);
    //     $newObject = clothes::create(array(
    //         'category' => 'Футболка',
    //         'name'=> 'Футболка с тигром',
    //         'price' => 20.00,
    //         'img_path'=> '/assets/img/2.jpg',
    //         'status'=> $current_status,
    //         'reviews'=> 0,
    //         'old_price'=>40.00,
    //         'description'=>"Описание",
    //         'tags'=>'Летняя'
    //     ));
    //     $newObject->save();
    // }
});

Auth::routes();


