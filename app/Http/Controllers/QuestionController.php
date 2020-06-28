<?php

namespace App\Http\Controllers;

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
        // TODO: Validate

        $question = new Question;

        $question->body = $request->body;

        $question->save();

        return redirect()->route('q', ['question' => $question->id]);
    }
}
