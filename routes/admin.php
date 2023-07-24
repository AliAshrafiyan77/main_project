<?php


use App\Http\Controllers\Admin\AdminPanelController;
use Illuminate\Support\Facades\Route;




Route::get('/index' , [AdminPanelController::class , 'index']);
