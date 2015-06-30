<?php namespace App\Http\Controllers;

// Models
use App\Models\Repositories\PhotoRepo;
use App\Models\Managers\PhotoManager;
use App\Models\Entitie\Photo;

// Request
use App\Http\Requests\Photo\CreateRequest as CreatePhotoRequest;
use App\Http\Requests\Photo\UpdateRequest as UpdatePhotoRequest;
use App\Http\Requests\Photo\ModifyRequest as ModifyPhotoRequest;

// Laravel
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;

class PhotoController extends Controller {

	public function __construct (PhotoRepo $photoRepo, PhotoManager $photoManager)
	{
		$this->repository   = $photoRepo;
		$this->manager 		= $photoManager;

		$this->beforeFilter('@find', ['only' => ['show', 'update']] );
		$this->beforeFilter('@findWithTrashed', ['only' => ['delete', 'modify']] );
	}

	/**
	 * 	Muestra una lista de todos los resources.
	 *  @return response json $resources
	 */
	public function read ()
	{
		$resources = $this->repository->all();
		return response()->json($resources, 200);
	}

	/**
	 *  Cambia el estado(trashed) de varios resources.
	 *  @return response json message
	 */
	public function modifyMany ()
	{
		return response()->json(["message" => "modifyMany"], 200);
	}

	/**
	 *  Elimina definitivamente varios resources
	 *  @return response json message
	 */
	public function deleteMany ()
	{
		return response()->json(["message" => "deleteMany"], 200);
	}

	/**
	 *	Retorna el resource en formato JSON.
	 *  @param int $id
	 *  @return response json $resource
	 */
	public function show ()
	{
		return response()->json($this->resource, 200);
	}

	/**
	 *	Crea un nuevo resource en la BD.
	 *  @return response json $resource
	 */
	public function create (CreatePhotoRequest $request)
	{
		$data     = $request->only($this->manager->getCreateFields());
		$response = $this->manager->create($data);
		return response()->json($response, 201);
	}

	/**
	 * 	Actualiza el resource.
	 *  @return response json $resource
	 */
	public function update (UpdatePhotoRequest $request)
	{
		$data     = $request->only($this->manager->getUpdateFields());
		$response = $this->manager->update($data, $this->resource);
		return response()->json($response, 200);
	}

	/**
	 * 	Cambia el estado(trashed) del resource.
	 *  @return response json message
	 */
	public function modify (ModifyPhotoRequest $request)
	{
		$data     = $request->only($this->manager->getModifyFields());
		$response = $this->manager->modify($data, $this->resource);
		return response()->json($response, 200);
	}

	/**
	 *	Elimina el resource de la bd.
	 *  @return response json message
	 */
	public function delete ()
	{
		$response = $this->manager->delete($this->resource);
		return response()->json($response, 200);
	}

	/**
	 *	Muestra todos los resources eliminados.
	 *  @return response json $resourcesTrashed
	 */
	public function readTrashes ()
	{
		$resources = $this->repository->onlyTrashed();
		return response()->json($resources, 200);
	}
}
