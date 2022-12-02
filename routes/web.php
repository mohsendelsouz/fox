<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::controller(MainController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/privacy-policy','PrivacyPolicy')->name('PrivacyPolicy');
    Route::get('/Terms-&-conditions','terms')->name('terms');
    Route::post('/stripe-payment','stripePayment')->name('stripePayment');
    Route::post('/sendMail','sendMail')->name('sendMail');
});
