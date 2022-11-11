<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CategoryController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::view('info','admindash.info');
Route::view('update','admindash.infoupdate');
Route::get('create_user',[HomeController::class, 'create'])->name('createUser');
Route::post('create_user',[HomeController::class, 'createuser'])->name('storeuser');
Route::delete('delete/{id}', [HomeController::class, 'destroy'])->name('delete');
Route::resource('user', HomeController::class);
// Route::get('user/{id}/edit',[HomeController::class,'edit'])->name('edituser');

// product url

Route::resource('product',ProductController::class);
Route::post('productUpload', [ProductController::class, 'productUpload'])->name('ProductUpload');

// vendor url

Route::resource('vendor',VendorController::class);

// Category url

Route::resource('category', CategoryController::class);