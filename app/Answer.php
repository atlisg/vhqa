<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    function question()
    {
        return $this->belongsTo('App\Question');
    }
}
