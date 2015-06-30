<?php

namespace App\Http\Requests\Photo;

use App\Http\Requests\Request;

class UpdateRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'name' => 'required'
		];
	}
}
