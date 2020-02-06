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
		return $this->start()->find($id);
	}
}