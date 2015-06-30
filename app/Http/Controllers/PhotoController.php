<?php namespace App\Http\Controllers;

// Models
use App\Models\Repositories\PhotoRepo;
// use App\Models\Managers\PhotoManager;
use App\Models\Entitie\Photo;

// Request
use App\Http\Requests\Photo\CreateRequest as CreatePhotoRequest;
use App\Http\Requests\Photo\UpdateRequest as UpdatePhotoRequest;
use App\Http\Requests\Photo\ModifyRequest as ModifyPhotoRequest;

// Utils
// use App\Utils\Files\ImageFileManager;

// Laravel
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;

class PhotoController extends Controller {

	public function __construct (PhotoRepo $photoRepo)
	{
        $this->repository = $photoRepo;

		$this->beforeFilter('@find', ['only' => ['show', 'update', 'modify', 'delete']] );
	}

	/**
	 * 	Muestra una lista de todos los resources.
     *  @return response json $resources
	 */
	public function read ()
	{

	}

    /**
     *  Cambia el estado(trashed) de varios resources.
     *  @return response json message
     */
    public function modifyMany ()
	{

	}

    /**
     *  Elimina definitivamente varios resources
     *  @return response json message
     */
    public function deleteMany ()
    {

    }

	/**
	 *	Retorna el resource en formato JSON.
     *  @param int $id
     *  @return response json $resource
	 */
	public function show ()
	{

	}

	/**
	 *	Crea un nuevo resource en la BD.
     *  @return response json $resource
	 */
	public function create (CreatePhotoRequest $request)
	{

	}

	/**
	 * 	Actualiza el resource.
     *  @return response json $resource
	 */
	public function update (UpdatePhotoRequest $request)
	{

	}

	/**
	 * 	Cambia el estado(trashed) del resource.
     *  @return response json message
	 */
	public function modify (ModifyPhotoRequest $request)
	{

	}

	/**
	 *	Elimina el resource de la bd.
     *  @return response json message
	 */
	public function delete ()
	{

	}

	/**
	 *	Muestra todos los resources eliminados.
         *  @return response json $resourcesTrashed
	 */
	public function readTrashes ()
	{

	}
}
