<?php

namespace App\Repositories;

use App\Models\Lesson as Model;

class LessonRepository extends CoreRepository
{
	protected function getModelClass()
	{
		return Model::class;
	}

	public function first()
	{
		return $this->start()->first();
	}

	public function getModuleLessons($module_id)
	{
		$lessonsCollumns = ['id', 'title', 'course_module_id'];
		$lessons = $this->start()
						->where('course_module_id', $module_id)
						->select($lessonsCollumns)
						->get();
		return $lessons;
	}
}