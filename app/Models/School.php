<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name',
        'course',
        'education',
        'address',
    ];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
