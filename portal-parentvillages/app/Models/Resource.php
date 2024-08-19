<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'name',
        'slug',
        'path'
    ];

    public function reviews()
    {
        return $this->hasMany(UserResource::class, 'resource_id', 'id');
    }
}
