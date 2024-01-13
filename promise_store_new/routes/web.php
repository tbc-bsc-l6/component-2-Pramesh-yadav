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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);


Route::middleware([
    'auth:sanctum',
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');

//category
route ::get('/view_category',[AdminController::class,'view_category']); 
route ::post('/add_category',[AdminController::class,'add_category']); 
route ::get('/delete_category/{id}',[AdminController::class,'delete_category']); 

//product
route ::get('/view_product',[AdminController::class,'view_product']);
route ::post('/add_product',[AdminController::class,'add_product']);
route ::get('/show_product',[AdminController::class,'show_product']);
route ::get('/delete_product/{id}',[AdminController::class,'delete_product']);
route ::get('/update_product/{id}',[AdminController::class,'update_product']);
route ::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);
route::get('/product_details/{id}', [HomeController::class, 'product_details']);

//cart
route::post('/add_cart/{id}', [HomeController::class, 'add_cart']); 
route ::get('/show_cart',[HomeController::class,'show_cart']);
route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']); 

//order
route ::get('/cash_order',[HomeController::class,'cash_order']);

//payment
route ::get('/stripe/{totalprice}',[HomeController::class,'stripe']);
Route::post('stripe/{totalprice}', [HomeController::class,'stripePost'])->name('stripe.post');

//order admin
route ::get('/order',[AdminController::class,'order']);
route ::get('/delivered/{id}',[AdminController::class,'delivered']);

//print pdf
route ::get('/print_pdf/{id}',[AdminController::class,'print_pdf']);

//send email
route ::get('/send_email/{id}',[AdminController::class,'send_email']);
route ::post('/send_user_email/{id}',[AdminController::class,'send_user_email']);

//search data in admin panel
route ::get('/search',[AdminController::class,'searchdata']);

//order in user homepage
route ::get('/show_order',[HomeController::class,'show_order']); 
route::get('/cancel_order/{id}', [HomeController::class, 'cancel_order']);  

//reply comment
route ::post('/add_comment',[HomeController::class,'add_comment']); 
route ::post('/add_reply',[HomeController::class,'add_reply']); 





