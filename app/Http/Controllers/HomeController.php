<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  public function index()
  {
    $questions = Question::get();

    return view('layout.mainlayout', ['questions' => $questions]);
  }
}
