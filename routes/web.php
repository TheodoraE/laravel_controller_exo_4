<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StoreController;
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

// laravel_controller_exo_4
// Integration d'un tempalte multi-page, toutes les données du sites doivent faire partie de variable objet qui sont renvoyées dans des views
// Un controller par view
// Utilisation des templates ( template,yield, etc.. )
// Utilisation de git

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'home'])->name('hom');
Route::get('/about', [AboutController::class,'about'])->name('abou');
Route::get('/products', [ProductsController::class, 'products'])->name('produ');
Route::get('/store', [StoreController::class, 'store'])->name('sto');