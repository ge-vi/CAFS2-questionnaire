<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{IndexController, QuizController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('/', [IndexController::class, 'createGuest'])->name('index.create');

Route::get('/quiz', [QuizController::class, 'index'])->name('quiz');
Route::post('/quiz', [QuizController::class, 'catchQuestion'])->name('quiz.submit');
