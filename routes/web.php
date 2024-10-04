<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('one-to-one',[SellerController::class,'list']);

Route::get('one-to-many',[SellerController::class,'manyRel']);

Route::get('many-to-one',[SellerController::class,'manyToOne']);