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
}
