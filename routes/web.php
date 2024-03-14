<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\DashboardController;
use \App\Http\Controllers\Admin\UserGroupController;
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



Auth::routes();
Route::middleware('auth')->group(function (){
    Route::get('/',[DashboardController::class,'index'] )->name('landing');
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::prefix('user-group')->name('user-group.')->group(function (){
        Route::get('/',[UserGroupController::class,'index'])->name('index');
        Route::get('create',[UserGroupController::class,'create'])->name('create');
        Route::get('edit/{id}')->name('edit');
        Route::delete('delete')->name('delete');

        Route::get('access/{id}')->name('access');
        Route::post('access/{id}')->name('access');

    });
});
