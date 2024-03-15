<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\DashboardController;
use \App\Http\Controllers\Admin\UserGroupController;
use \App\Http\Controllers\Admin\ProfileController;
use \App\Http\Controllers\Admin\StaffPanelController;
use \App\Http\Controllers\Admin\OnlinePaymentSystemController;
use \App\Http\Controllers\Admin\SubCommitteesController;
use \App\Http\Controllers\Admin\AllMembersController;
use \App\Http\Controllers\Admin\PollsAndSurveyController;
use \App\Http\Controllers\Admin\ArticleController;
use \App\Http\Controllers\Admin\CalendarOfEventsController;
use \App\Http\Controllers\Admin\MessageController;
use \App\Http\Controllers\Admin\CmeManagementController;
use \App\Http\Controllers\Admin\SettingController;
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



Auth::routes(['register' => false]);
Route::middleware('auth')->group(function (){
    Route::get('/',[DashboardController::class,'index'] )->name('landing');
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::prefix('staff-panel')->name('staff-panel.')->group(function (){
        Route::get('/',[StaffPanelController::class,'index'])->name('index')->middleware('permission:staff-panel.index');
    });
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
    Route::prefix('online-payment-system')->name('online-payment-system.')->group(function (){
        Route::get('/',[OnlinePaymentSystemController::class,'index'])->name('index')->middleware('permission:online-payment-system.index');
    });

    Route::prefix('profile')->name('profile.')->group(function (){
        Route::get('/',[ProfileController::class,'index'])->name('index')->middleware('permission:profile.index');
        Route::get('edit/{id}',[ProfileController::class,'edit'])->name('edit');
    });
    Route::prefix('sub-committees')->name('sub-committees.')->group(function (){
        Route::get('/',[SubCommitteesController::class,'index'])->name('index')->middleware('permission:sub-committees.index');
    });
    Route::prefix('all-members')->name('all-members.')->group(function (){
        Route::get('/',[AllMembersController::class,'index'])->name('index')->middleware('permission:all-members.index');
    });
    Route::prefix('polls-and-survey')->name('polls-and-survey.')->group(function (){
        Route::get('/',[PollsAndSurveyController::class,'index'])->name('index')->middleware('permission:polls-and-survey.index');
    });
    Route::prefix('articles')->name('articles.')->group(function (){
        Route::get('/',[ArticleController::class,'index'])->name('index')->middleware('permission:articles.index');
    });
    Route::prefix('calendar-of-events')->name('calendar-of-events.')->group(function (){
        Route::get('/',[CalendarOfEventsController::class,'index'])->name('index')->middleware('permission:calendar-of-events.index');
    });
    Route::prefix('messages')->name('messages.')->group(function (){
        Route::get('/',[MessageController::class,'index'])->name('index')->middleware('permission:messages.index');
    });
    Route::prefix('cme-management')->name('cme-management.')->group(function (){
        Route::get('/',[CmeManagementController::class,'index'])->name('index')->middleware('permission:cme-management.index');
    });
    Route::prefix('settings')->name('settings.')->group(function (){
        Route::get('/',[SettingController::class,'index'])->name('index')->middleware('permission:settings.index');
    });
});
Route::fallback(function () {
     abort(404);
})->middleware('auth');
Route::get('clear',function (){
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'All caches cleared successfully.';
});
