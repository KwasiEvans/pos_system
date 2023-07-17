<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::prefix('dashboard')->middleware(['auth','verified'])->group(function (){
 Route::get('/',[DashboardController::class,'index'])->name('dashboard');

//  Creating plroducts
  //category
  Route::get('/create-category',[ProductController::class,'create_category'])->name('create_category');   
});

require __DIR__.'/auth.php';
