<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  public function index()
  {
    $questions = DB::table('questions')->get();

    foreach ($questions as $question)
      $question->answers = DB::table('answers')->where('question_id', $question->id)->get();

    return view('layout.mainlayout', ['questions' => $questions]);
  }
}
