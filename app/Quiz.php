<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['question', 'first_ans', 'second_ans', 'third_ans', 'fourth_ans'];
}
