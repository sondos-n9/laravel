<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\StaticController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticControllers;

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
Route::get('/',[StaticController::class, 'index']);
Route::get('/about',[StaticController::class, 'about']);
Route::get('/portfolio',[StaticController::class, 'portfolio']);
Route::get('/contact',[StaticController::class, 'index']);

Route::resource('computres',ComputerController::class);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/store/{category?}/{item?}', function ($category=null, $item=null) {
   
    if(isset($category)){
      if(isset($item)){
        return '<h1>'.$item.'</h1>';
      }
      return '<h1>'.$category.'</h1>';}
      return '<h1> store</h1>';
});
/*
Route::get('/store', function () {
   $select= request('style');

   if(isset($select)){
    return 'this page is viewing '. $select;
// return 'this page is viewing '. strip_tags($select);
   }
    return 'this page is viewing all products ';
});*/