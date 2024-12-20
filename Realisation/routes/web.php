<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {return view('welcome');});
Route::get("/contact", function () {return view('contact');})->name('contact');
Route::post("/contact", [ContactController::class, 'send'])->name('sendMail');
