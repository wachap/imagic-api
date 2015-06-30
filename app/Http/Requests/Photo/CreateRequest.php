<?php

namespace App\Http\Requests\Photo;

use App\Http\Requests\Request;

class CreateRequest extends Request {

	public function authorize ()
	{
		return true;
	}

	public function rules ()
	{
		return [
			// 'name'  => 'required',
			// 'image' => 'required|image|mimes:jpeg,jpg,png|max:1000'
		];
	}
}
