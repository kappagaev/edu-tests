<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title', 'preview', 'description',
    ];

    public function course_modules()
    {
    	return $this->hasMany(CourseModule::class, 'course_id');
    }
}
