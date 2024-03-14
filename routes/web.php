<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\WelcomeController as WelcomeController;


Route::get('/', [PageController::class,'index'] )->name('homePage');


