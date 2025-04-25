<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('test.index', compact('questions'));
    }


public function submit(Request $request)
{
    $correctAnswers = 0;
    $questions = Question::all(); // Iegūst visus jautājumus

    // Pārbauda katru atbildi
    foreach ($request->input('answers') as $questionId => $answer) {
        $question = Question::find($questionId);
        if ($question && $question->correct_answer == $answer) {
            $correctAnswers++;
        }
    }

    // Nosūtīt uz rezultātu skatu
    return view('test.result', compact('correctAnswers', 'questions'));
}
};