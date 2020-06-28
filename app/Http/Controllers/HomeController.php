<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  public function index()
  {
    $questions = Question::orderBy('created_at', 'desc')->get();
    $placeholders = [
      'To be, or not to be, vegan, that is the question.',
      'What is the most effective way to promote veganism?',
      'Where are we? What the hell is going on?',
      'When will all animal products be banned?',
      'Which one is your favorite?'
    ];
    $random = Arr::random($placeholders);

    return view('layout.mainlayout', [
      'questions' => $questions,
      'placeholder' => $random,
    ]);
  }
}
