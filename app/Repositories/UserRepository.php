<?php

namespace App\Repositories;

use App\User as Model;

class UserRepository extends CoreRepository
{
	protected function getModelClass()
	{
		return Model::class;
	}

	public function first()
	{
		return $this->start()->first();
	}
}