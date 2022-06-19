<?php

use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\DashboardController;
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
Route::resource('category',CategoryController::class);
});


require __DIR__.'/auth.php';
