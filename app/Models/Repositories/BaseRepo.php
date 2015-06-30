<?php

namespace App\Models\Repositories;

abstract class BaseRepo {

	protected $model;

	public function __construct()
	{
		$this->model = $this->getModel();
	}

	/**
	 *	Funcion obligatoria donde retornamos el modelo.
	 */
	abstract public function getModel();

	/**
	 *	Si no encuentra el modelo retornara false, si lo encuentra retorna el modelo.
	 */
	public function find ($id)
	{
		$resource = $this->model->find($id);
		if (is_null ($resource))
		{
			return false;
		}
		return $resource;
	}

	public function all ()
	{
		$resources = $this->model->all();
		return $resources;
	}
	
}
