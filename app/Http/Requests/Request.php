<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{

	/**
	 *	Custom Response
	 */
	public function response(array $errors)
	{
		return response()->json(array(
			"message" => "Validacion fallida",
			"errors"  => $errors ),
			422
		);
		// if ($this->ajax())
		// {}
		// return redirect()->back()
		// 	->withInput($this->except($this->dontFlash))
		// 	->withErrors($errors);
	}
}
