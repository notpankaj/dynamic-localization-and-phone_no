<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HandleLanguageChange;

use Illuminate\Http\Request;

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

Route::group(['middleware' => 'checkLocale'], function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/work', function () {
        return view('work');
    });
    Route::get('/works', function () {
        return view('works');
    });
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/contact', function () {
        return view('contact');
    });
    Route::get('/components', function () {
        return view('components');
    });
});


Route::get('/change/lang',function(Request $req){
        if($req->lang){
            session()->put("applocale",$req->lang);
            return redirect('/');
        }else{
            return redirect('/');
        }
});


Route::get('/numberList',function(Request $req){
    return view('dash');
});
