<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answer()
    {
        return $this->hasMany(Answer::class, 'question_id', 'id');
    }

    public function correct_answer()
    {
        return $this->hasOne(Answer::class, 'question_id', 'id');
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'tag_question', 'question_id', 'tag_id');
    }
}
