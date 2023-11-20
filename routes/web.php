<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;

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
    return view('website.index');
});
Route::get('/404', function () {
    return view('errors.404');
});
Route::get('/shop', function () {
    return view('website.shop');
});
Route::get('/cart', function () {
    return view('website.cart');
});
Route::get('/checkout', function () {
    return view('website.checkout');
});
Route::get('/sign-up', function () {
    return view('website.sign-up');
});
Route::get('/login', function () {
    return view('website.login');
});
Route::get('/recover-password', function () {
    return view('website.recover-password');
});
Route::get('/blog', function () {
    return view('website.blog');
});
Route::get('/wishlist', function () {
    return view('website.wishlist');
});
Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/faq', function () {
    return view('website.faq');
});


//========= Admin Route List =======//
Route::get('/admin', function () {
    return view('admin.index');
});


Route::resource('/testimonial', TestimonialController::class);
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    //Route::get('/', [BackendController::class, 'index'])->name('admin.index');
    //Route::resource('/review', ReviewController::class);
});