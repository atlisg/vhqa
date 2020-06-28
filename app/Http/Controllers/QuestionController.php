<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index($question)
    {
        $question = Question::findOrFail($question);

        return view('layout.question', [
            'question' => $question
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'body' => ['required', 'min:5', 'ends_with:?'],
        ]);

        $question = new Question;

        $question->body = $request->body;

        $question->save();

        return redirect()->route('questions', ['question' => $question->id]);
    }

    public function answer(Request $request, $question_id)
    {
        $request->validate([
            'body' => ['required', 'min:5'],
        ]);

        $answer = new Answer;

        $answer->body = $request->body;
        $answer->question_id = $question_id;

        $answer->save();

        return redirect()->route('questions', ['question' => $question_id]);
    }
}
