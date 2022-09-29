<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(Request $request)
    {
        $guestId = $request->session()->get('guest_id');
        $guest = Guest::find($guestId);

        return view('quiz', ['guest_name' => $guest->name]);
    }

    public function catchQuestion(Request $request)
    {
        $answer = $request->input('q1');
    }
}
