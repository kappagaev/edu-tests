<?php

namespace App\Repositories;

use App\Models\Course as Model;

class CourseRepository extends CoreRepository
{
	protected function getModelClass()
	{
		return Model::class;
	}

	public function first()
	{
		return $this->start()->first();
	}

	public function single($id)
	{
		$courseCollumns = ['id','title', 'preview', 'description', 'created_at'];

		$course = $this->start()
			->select($courseCollumns)
			->with(['course_modules' => function ($query) {
				$query->select(['id', 'course_id', 'title']);
			}])
			->find($id);

		return $course;
	}
}