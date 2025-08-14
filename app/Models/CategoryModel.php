<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class CategoryModel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function lessons()
    {
        return $this->belongsToMany(LessonModel::class, 'category_lesson', 'category_id', 'lesson_id');
    }
    
}
