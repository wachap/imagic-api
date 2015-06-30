<?php

namespace App\Models\Repositories;

use App\Models\Entities\Photo;

class PhotoRepo extends BaseRepo {

	public function getModel ()
	{
		return new Photo;
	}

	public function onlyTrashed ()
	{
		return $this->model->onlyTrashed()->get();
	}

	public function findWithTrashed ($id)
	{
		return $this->model->withTrashed()->find($id);
	}
}
