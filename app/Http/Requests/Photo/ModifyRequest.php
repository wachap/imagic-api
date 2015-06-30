<?php

namespace App\Http\Requests\Photo;

use App\Http\Requests\Request;

class ModifyRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'trashed' => 'required|boolean'
		];
	}
}
