<?php namespace App\Http\Controllers;

// Utils
// use App\Utils\Files\ImageFileManager;

// Laravel
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller {

	/**
	 *	Retorna una imagen y cambia el tamaño si es necesario
	 *	GET /images/{$photoName}
	 *	@param string $photoName
	 * 	@return Response image cache
	 */
	public function read (Request $request, $photoName)
	{

	}

	/**
	 *	Retorna la descarga de la imagen original
	 *	@param string $photoName
	 * 	@return Response image download
	 */
    public function download ($photoName)
    {

    }

}
