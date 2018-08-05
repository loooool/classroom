<?php

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
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@create')->name('home');
Route::get('test', function (){
     foreach(\App\Plan::find(1)->days()->orderByDesc('day')->get() as $day) {
         if ($day->watched()) {
             if (date('Y-m-d', strtotime($day->check()->created_at)) == date('Y-m-d')) {
                 echo 'Hooray';
             }
         }
     }
});
Route::get('verify', 'VerifyController@index')->name('verify');
Route::post('verify', 'VerifyController@store')->name('verify');

Route::get('/day/{id}', 'PlanController@show')->name('day');
Route::get('/plans', 'PlanController@index')->name('plans');
Route::get('/plans/{id}', 'PlanController@home')->name('plan');


Route::get('/purchase', 'PlanController@purchase')->name('purchase');
Route::get('/proceed_purchase', 'PlanController@proceed_purchase')->name('proceed_purchase');
Route::get('/cancel_purchase', 'PlanController@cancel_purchase')->name('cancel_purchase');
Route::get('/getplan/{id}', 'PurchaseController@home')->name('getplan');


Route::get('logout', function(){
    session()->flush();
    Auth::logout(); // logout user
    return Redirect::to('/');
});

