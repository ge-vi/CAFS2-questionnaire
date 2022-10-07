<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Answer extends Model
{
    protected $fillable = [
        'question_name',
        'question_answer',
        'guest_id'
    ];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
}
