<?php


use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Admin\GalleryController;
use Illuminate\Support\Facades\Route;




Route::resource('/index' , AdminPanelController::class);
Route::get('/galleries' , [GalleryController::class , 'index'])->name('galleriesIndex');
Route::post('/galleries' , [GalleryController::class , 'store']);
Route::post('/get-galleries' , [GalleryController::class , 'getGalleries']);
