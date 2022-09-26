<?php

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

Route::get('/', function () {
    return view('index');
});

Route::post('/quiz/php', function () {

    // TODO move into controller
    session(['answers' => [
        'q1' => $_POST
    ]]);

    // after storing an answer redirect to another page
    // or give ability to page through question pages ???
    redirect('/quiz/php/2');
})->name('quiz.php');
