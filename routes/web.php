<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReponseController;
use App\Http\Controllers\FavorisController;
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

Route::get('/favoris', [FavorisController::class, 'show']);

Route::get('/populaires', [QuestionController::class, 'populaireQuestion']);

Route::get('/profile', [QuestionController::class, 'showByUser']);

Route::delete('/question/{id}', [QuestionController::class, 'destroy'])->name('question.delete');

Route::post('/question/{id}/favoris', [FavorisController::class, 'addFavoris'])->name('question.favori');



Route::get('/404', function () {
    return view('components.404');
});

Route::post('/', [QuestionController::class, 'save'])->name('questions.save');
Route::post('/details/{id}', [ReponseController::class, 'save'])->name('reponse.save');


// Route::post('/reponse', [QuestionController::class, 'save'])->name('questions.save');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';