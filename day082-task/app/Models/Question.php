<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Question extends Model
{
    protected $fillable = [
        'question_text',
    ];

    public function variants()
    {
        return $this->hasMany(Variants::class);
    }
}
