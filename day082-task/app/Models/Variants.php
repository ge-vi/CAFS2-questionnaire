<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Variants extends Model
{
    protected $fillable = [
        'label',
        'value',
        'is_correct'
    ];

    protected $casts = [
        'is_correct' => 'boolean',
    ];
}
