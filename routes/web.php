<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\WorkController;
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
Route::get('/', [Controller::class, 'landingPage'])->name('front-landing');
Route::get('/project/{id}', [Controller::class, 'workPage'])->name('view project');
Route::get('/change_lang', [Controller::class, 'lang_change'])->name('language change');


Route::get('admin/login', [Controller::class, 'get_login'])->name('admin login page');
Route::post('admin/login', [Controller::class, 'login'])->name('admin login');
Route::get('admin/setup', [Controller::class, 'setup'])->name('admin setup');


Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {

    Route::get('/', [Controller::class, 'dashboard'])->name('dashboard');

    Route::group(['prefix' => 'category'], function () {
        Route::post('/', [CategoryController::class, 'create'])->name('create category');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('delete category');
        Route::post('/edit/{id}', [CategoryController::class, 'edit'])->name('edit category');
    });

    Route::group(['prefix' => 'work'], function () {
        Route::post('/', [WorkController::class, 'create'])->name('create work');
        Route::get('/delete/{id}', [WorkController::class, 'delete'])->name('delete work');
        Route::post('/edit/{id}', [WorkController::class, 'edit'])->name('edit work');
    });

    Route::group(['prefix' => 'work/images'], function () {
        Route::post('/edit/{id}', [ImageController::class, 'edit'])->name('edit work images');
    });


});

