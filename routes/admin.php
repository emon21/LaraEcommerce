<?php

use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/admin-login', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login');

// Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');

// Route::get('check',function(){

//     echo 'admin route';
// });
Route::group(['namespace'=>'App\Http\Controllers\admin','middleware' => 'is_admin'],function(){

    Route::get('/admin/home', 'adminController@admin')->name('admin.home');

    Route::get('/admin/logout', 'adminController@logout')->name('admin.logout');


    // Category Route //
    Route::group(['prefix'=>'category'],function (){

        //____ Category Crud ____ //

        Route::get('/index',[CategoryController::class,'index'])->name('category.index');

        Route::get('/create',[CategoryController::class,'create'])->name('category.create');

        Route::post('/store',[CategoryController::class,'store'])->name('category.store');

        Route::get('/edit/{id}',[CategoryController::class,'edit']);

        Route::post('/update',[CategoryController::class,'update'])->name('category.update');

        Route::get('/delete/{category}',[CategoryController::class,'destroy'])->name('category.delete');


    });


});
