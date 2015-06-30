<?php namespace App\Models\Managers;

// Utils
use App\Utils\Files\ImageFileManager;

class PhotoManager {

	protected $imageManager;

	public function __construct (ImageFileManager $imageFileManager)
	{
		$this->imageManager = $imageFileManager;
	}

	public function getCreateFields ()
	{
		return [
			'name',
			'image',
		];
	}

	public function getUpdateFields ()
	{
		return [
			'name',
		];
	}

	public function getModifyFields ()
	{
		return [
			'trashed',
		];
	}

	public function prepareData ($data)
	{		
		$url      = $this->imageManager->getPhotoUrl();
		$fileName = $this->imageManager->getFileName();
		
		$data     = array_add($data, 'url', $url);		
		$data     = array_add($data, 'fileName', $fileName);	
		return $data;
	}

	public function getMessageAndModify ($trashed, $resource) 
	{
		if ($trashed) 
		{
			$resource->delete();
			return "Se ha movido el elemento a la papelera";
		}
		$resource->restore();
		return "Se ha restaurado el elemento en la biblioteca";
	}

	public function create ($data)
	{
		$this->imageManager->save( $data['image'] );

		$data     = $this->prepareData($data);
		$resource = Photo::create($data);
		$response = ["message" => "1 foto nueva", "photo" => $resource];
		return $response;
	}

	public function update ($data, $resource)
	{
		$resource->update($data);
		$response = ["message" => "Se edito la foto correctamente", "photo" => $resource];
		return $response;
	}

	public function modify ($data, $resource)
	{
		$resource->update($data);
		$response = ["message" => $this->getMessageAndModify($data['trashed'], $resource), "photo" => $resource];		
		return $response;
	}

	public function delete ($resource)
	{
		$resource->forceDelete();
		$response = ["message" => "Se ha eliminado definitivamente el elemento"];
		return $response;
	}
}
