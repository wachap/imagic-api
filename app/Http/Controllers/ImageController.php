<?php namespace App\Http\Controllers;

// Utils
use App\Utils\Files\ImageFileManager;

// Laravel
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller {

	protected $imageManager;

	public function __construct (ImageFileManager $imageFileManager)
	{
		$this->imageManager = $imageFileManager;
	}	

	/**
	 *	Retorna una imagen y cambia el tamaño si es necesario
	 *	GET /images/{$photoName}
	 *	@param string $photoName
	 * 	@return Response image cache
	 */
	public function show (Request $request, $photoName)
	{	
		// Obtener query params widt y height		
		$width  = $request->get('width');
		$height = $request->get('height');
		if (!$request->get('width'))
		{
			$width = 9999;
		}
		if (!$request->get('height'))
		{
			$height = 9999;
		}

		// Si no existe la imagen retorno 404
		$this->imageManager->setFileName($photoName);
		if (!$this->imageManager->exists())
		{
			if (Request::ajax()) {
				return response()->json([], 404);
			}
			throw new NotFoundHttpException;
		}

		if ($request->get('download') == true)
		{
			return response()->download($this->imageManager->getFilePath());
		}
		
		// Retorno la imagen pedida y cambio de tamaño segun el query param
		$imageCache = $this->imageManager->resize($width, $height);
		return response()->make($imageCache, 200, [ 'Content-type' => 'image/jpeg' ]);
	}

	/**
	 *	Retorna la descarga de la imagen original
	 *	@param string $photoName
	 * 	@return Response image download
	 */
    public function download ()
    {
    	// return response()->download($this->imageManager->getFilePath());
    }

}
