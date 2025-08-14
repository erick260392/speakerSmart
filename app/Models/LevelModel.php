<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class LevelModel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function lessons()
    {
        return $this->hasMany(LessonModel::class, 'level_id');
    }

    
}
