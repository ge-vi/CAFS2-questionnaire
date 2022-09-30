<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['question_name', 'question_answer'];

    public function guest()
    {
        $this->belongsTo(Guest::class);
    }
}
