<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Question;

class QuestionController extends Controller
{
    public function index()
    {
        return Question::all(['content', 'correct_answer', 'answer1', 'answer2', 'answer3']);
        // return Question::get(['content', 'correct_answer', 'answer1', 'answer2', 'answer3']);
    }
}
