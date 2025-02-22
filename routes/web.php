<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReponseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [QuestionController::class, 'show']);

Route::get('/login', function () {
    return view('Auth.login');
});
Route::get('/register', function () {
    return view('Auth.register');
});
Route::get('/details/{id}', function () {
    return view('Questions.details');
});

Route::get('/details/{id}', [QuestionController::class, 'showById']);

Route::get('/404', function () {
    return view('components.404');
});

Route::post('/', [QuestionController::class, 'save'])->name('questions.save');
Route::post('/details/{id}', [ReponseController::class, 'save'])->name('reponse.save');

// Route::post('/reponse', [QuestionController::class, 'save'])->name('questions.save');

