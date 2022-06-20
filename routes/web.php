<?php

use App\Http\Controllers\dashboard\BrandController;
use App\Http\Controllers\dashboard\SubCategoryController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth',])->prefix('admin')->group(function () {

Route::get('/dashboard',[DashboardController::class,'DashboardView'])->name('DashboardView');
Route::post('/summer-note/upload',[DashboardController::class,'SummerNoteUpload'])->name('SummerNoteUpload');
Route::resource('category',CategoryController::class);
Route::resource('subcategory',SubCategoryController::class);
Route::resource('brand',BrandController::class);

Route::get('/product/get-sub-cat/{cat_id}', [ProductController::class, 'GetSubcatbyAjax'])->name('GetSubcatbyAjax');
Route::resource('product',ProductController::class);
});


require __DIR__.'/auth.php';
