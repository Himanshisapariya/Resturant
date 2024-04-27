<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::get('/',[HomeController::class,'index']);

Route::get('/redirects',[HomeController::class,'redirects']);

Route::get('/users',[AdminController::class,'users']);

Route::get('/foodmenu',[AdminController::class,'foodmenu']);

Route::post('/uploadfood',[AdminController::class,'upload']);

Route::get('/deletefood/{id}',[AdminController::class,'deletefood']);

Route::get('/editfood/{id}',[AdminController::class,'editfood']);

Route::get('/viewreservation',[AdminController::class,'viewreservation']);

Route::post('/updatefood/{id}',[AdminController::class,'updatefood']);

Route::post('/reservation',[AdminController::class,'reservation']);

Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);

Route::get('/viewchef',[AdminController::class,'viewchef']);

Route::post('/addchef',[AdminController::class,'addchef']);

Route::get('/deletechef/{id}',[AdminController::class,'deletechef']);

Route::get('/editchef/{id}',[AdminController::class,'editchef']);

Route::post('/updatechef/{id}',[AdminController::class,'updatechef']);

Route::get('/vieworders',[AdminController::class,'vieworders']);

Route::post('/addcart/{id}',[HomeController::class,'addcart']);

Route::get('/showcart/{id}',[HomeController::class,'showcart']);

Route::get('/deletecart/{id}',[HomeController::class,'deletecart']);

Route::get('/checkout',[HomeController::class,'checkout']);

Route::post('/order',[HomeController::class,'order']);

Route::get('/lunch',[HomeController::class,'lunch']);
Route::get('/breakfast',[HomeController::class,'breakfast']);
Route::get('/dinner',[HomeController::class,'dinner']);













Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
