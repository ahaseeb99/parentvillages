<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResource extends Model
{
    use HasFactory;

    protected $fillable = [
        'resource_id',
        'user_id',
        'description'
    ];

    protected $with = ['user', 'resource'];

    public function resource()
    {
        return $this->belongsTo(Resource::class, 'resource_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
