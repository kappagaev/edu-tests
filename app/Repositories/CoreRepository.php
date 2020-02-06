<?php

namespace App\Repositories;

abstract class CoreRepository
{
	private $model;

	abstract public function getModelClass();

	public function __construct()
	{
		$this->model = app($this->getModelClass());
	}

	protected function start()
	{
		return clone $this->model;
	} 
}