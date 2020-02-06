<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\LessonRepository;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    private $lessonRepository;

    public function __construct()
    {
        $this->lessonRepository = app(LessonRepository::class);
    }

    public function getCourseModuleLessons($module_id)
    {
    	$lessons = $this->lessonRepository->getModuleLessons($module_id);

    	if (!$lessons) {
    		return response()->json(['error' => 'lessons not found']);
    	}

    	return $lessons;
    }
}
