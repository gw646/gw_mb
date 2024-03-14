<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\DashboardController;
use \App\Http\Controllers\Admin\UserGroupController;
use \App\Http\Controllers\Admin\ProfileController;
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
        Route::get('/',[UserGroupController::class,'index'])->name('index')->middleware('permission:user_groups.index');
        Route::get('create',[UserGroupController::class,'create'])->name('create')->middleware('permission:user_groups.create');
        Route::post('create',[UserGroupController::class,'store'])->name('store');
        Route::get('edit/{id}',[UserGroupController::class,'edit'])->name('edit')->middleware('permission:user_groups.edit');
        Route::put('update/{id}',[UserGroupController::class,'update'])->name('update');
        Route::delete('delete',[UserGroupController::class,'delete'])->name('delete')->middleware('permission:user_groups.delete');
        Route::get('access/{id}',[UserGroupController::class,'access'])->name('access')->middleware('permission:user_groups.access');
        Route::put('access/{id}',[UserGroupController::class,'accessUpdate'])->name('access');
    });
    Route::prefix('profile')->name('profile.')->group(function (){
        Route::get('/',[ProfileController::class,'index'])->name('index')->middleware('permission:profile.index');
    });
});
Route::fallback(function () {
    return abort(404);
})->middleware('auth');
Route::get('clear',function (){
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'All caches cleared successfully.';
});
