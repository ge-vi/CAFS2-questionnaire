<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Guest;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(Request $request, int $id)
    {
        $guestId = $request->session()->get('guest_id');
        $guest = Guest::find($guestId);

        // TODO get data from DB
        $question = [
            'id' => $id,
            'question_text' => 'PHP language is:',
        ];
        $question['variants'][] = [
            'label' => 'Interpreted programming language',
            'value' => 'q1-a1',
        ];
        $question['variants'][] = [
            'label' => 'Compiled programming language',
            'value' => 'q1-a2',
        ];
        $question['variants'][] = [
            'label' => 'Internet programming language',
            'value' => 'q1-a3',
        ];

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
                'guest' => $request->session()->get('guest_id')
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
