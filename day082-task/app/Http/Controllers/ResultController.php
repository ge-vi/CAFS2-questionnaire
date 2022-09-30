<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Guest;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function calculateResult(Request $request)
    {
        $guestId = $request->session()->get('guest_id');
        $guest = Guest::find($guestId);

        $answers = Answer::all();

        return view('result', ['answers' => $answers, 'guest_name' => $guest->name]);
    }
}
