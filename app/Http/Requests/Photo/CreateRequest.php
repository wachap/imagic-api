<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePhotoRequest extends Request {

	public function authorize ()
	{
		return true;
	}

	public function rules ()
	{
		return [
			'name'  => 'required',
			'image' => 'required|image|mimes:jpeg,jpg,png|max:1000'
		];
	}
}
