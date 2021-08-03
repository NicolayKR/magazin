<?php

use Illuminate\Support\Facades\Route;

use App\Models\clothes;

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
});
Route::get('/test', function () {
    for($i=2; $i<8; $i++){
        $newObject = clothes::create(array(
            'category' => 'Футболка',
            'name'=> 'Футболка с тигром',
            'price' => 20.00,
            'img_path'=> 'assets/img/'.$i.'.jpg'
        ));
        $newObject->save();
    }
});



Auth::routes();


