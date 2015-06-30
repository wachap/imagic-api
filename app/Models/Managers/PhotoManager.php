<?php

namespace App\Models\Managers;

use App\Models\Entities\Photo;

class PhotoManager {

	public function createFilterData ()
	{
		return [
            'name',
            'image',
        ];
	}

    public function updateFilterData ()
	{
		return [
            'name',
        ];
	}

    public function modifyFilterData ()
	{
		return [
            'trashed',
        ];
	}

	public function prepareData ($data)
	{
		return $data;
	}

    public function getResponse ()
    {

    }
}
