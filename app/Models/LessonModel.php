<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonModel extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(CategoryModel::class, 'category_lesson', 'lesson_id', 'category_id');
    }

    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_id');
    }

}
