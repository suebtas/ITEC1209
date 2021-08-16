<?php

use Illuminate\Support\Facades\Route;

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
use  \App\Http\Controllers\ArticlesController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articles',ArticlesController::class);

Route::get('/show',function(){
    $article = App\Models\Article::all();
    return view('show',compact('article'));
});

Route::post('register/store',[RegisterController::class,'store']);