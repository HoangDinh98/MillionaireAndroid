<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'content', 'correct_answer', 'answer1', 'answer2', 'answer3'
    ];
}
