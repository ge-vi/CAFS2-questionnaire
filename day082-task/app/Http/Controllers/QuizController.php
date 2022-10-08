<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Guest;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(Request $request, int $id)
    {
        $guestId = $request->session()->get('guest_id');
        $guest = Guest::find($guestId);

        $question = Question::find($id);

        if (is_null($question)) {
            return redirect(route('quiz.result'));
        }

        return view('quiz', [
            'guest_name' => $guest->name,
            'q' => $question,
        ]);
    }

    public function catchQuestion(Request $request, int $id)
    {
        // validate ???
        // check before if user id exists

        Answer::query()->create(
            [
                'question_name' => $id,
                'question_answer' => $request->input($id),
                'guest_id' => $request->session()->get('guest_id'),
            ]
        );

//        $answer = new Answer();
//        $answer->question_name = $id;
//        $answer->question_answer = $request->input($id);
//        $answer->guest_id = $request->session()->get('guest_id');
//
//        $answer->save();

        return redirect()->route('quiz', ['id' => ++$id]);
    }
}
