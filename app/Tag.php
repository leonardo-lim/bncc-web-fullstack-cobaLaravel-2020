<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function question()
    {
        return $this->belongsToMany(Question::class, 'tag_question', 'question_id', 'tag_id');
    }
}
