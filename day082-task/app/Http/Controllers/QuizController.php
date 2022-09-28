<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(Request $request)
    {
        return view('quiz');
    }

    public function catchQuestion(Request $request)
    {
        dd($request);
    }
}
