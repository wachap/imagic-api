<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdatePhotoRequest extends Request {

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
