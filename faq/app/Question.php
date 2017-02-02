<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title','text', 'user_id'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function add(Answer $answer)
    {
        return $this->answers()->save($answer);
    }

    public function path()
    {
        return '/question/'.$this->id;
    }
}
