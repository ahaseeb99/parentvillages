<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    public function questions(){
        return $this->hasMany(ScholarshipQuestion::class,'scholarship_id','id');
    }
}
