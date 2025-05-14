<?php

use App\Models\Job;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Jobs\TranslateJob;

// Route::get('test', function(){
//     TranslateJob::dispatch();
//     return 'Done';
// });

Route::view('/', 'home');

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::get('/jobs/{job}',[JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store']);
Route::get('/jobs/{job}/edit',[JobController::class, 'edit'])
    ->middleware(['auth'])
    ->can('edit', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy']);



// //Example Code
// Route::patch('/jobs/{id}', function ($id) {
//  //validate
//  //authorize
//  //update
// //redirect
// }); 
