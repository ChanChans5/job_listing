<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::view('/', 'home');

Route::get('/jobs', [JobController::class, 'index']);


Route::resource('/jobs', JobController::class);
// Route::get('/jobs/create', [JobController::class, 'create']);
// Route::get('/jobs/{job}',[JobController::class, 'show']);
// Route::post('/jobs', [JobController::class, 'store']);
// Route::get('/jobs/{job}/edit',[JobController::class, 'edit']);
// Route::patch('/jobs/{job}', [JobController::class, 'update']);
// Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);



// //Example Code
// Route::patch('/jobs/{id}', function ($id) {
//  //validate
//  //authorize
//  //update
// //redirect
// }); 
