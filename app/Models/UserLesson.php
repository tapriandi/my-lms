<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLesson extends Model
{
    use HasFactory;

    protected $filable = ['user_id', 'lesson_id', 'progress'];

    public function lesson() {
        return $this->hasMany(User::class);
    }

    public function user() {
        return $this->hasMany(Lesson::class);
    }
}
