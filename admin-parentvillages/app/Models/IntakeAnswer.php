<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntakeAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'intake_id',
        'question_id',
        'answer'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }
}
