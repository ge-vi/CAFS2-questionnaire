<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'index'])
    ->middleware('named')
    ->name('index');
Route::post('/', [IndexController::class, 'createGuest'])
    ->name('index.create');

Route::get('/quiz/{id}', [QuizController::class, 'index'])
    ->middleware('named')
    ->name('quiz');
Route::post('/quiz/{id}', [QuizController::class, 'catchQuestion'])
    ->middleware('named')
    ->name('quiz.submit');

Route::get('/result', [ResultController::class, 'calculateResult'])
    ->name('quiz.result');
