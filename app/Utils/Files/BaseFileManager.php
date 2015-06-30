<?php

/**
 *	Este helper sirve para GUARDAR / ELIMINAR / OBTENER(binary)
 *	los archivos del SERVIDOR
 */

namespace App\Utils\Files;

use App\Utils\RandomStringGenerator;
use Storage;
use File;

class BaseFileManager {

	protected $fileName;
	protected $name;	
	protected $ext;	
	protected $errors   = [];

	protected $storage;
	protected $filePath;


	/**
	 *	Guarda el archivo en el servidor
	 * 	@param el campo file
	 */
	public function save ($fileData)
	{	
		// genero un nombre para el archivo mas su extension
		$this->generateName($fileData);

		// busco coincidencias
		$this->filter($this->fileName);		

		$this->storage->put($this->fileName, File::get($fileData));		
	}

	/**
	 *	Elimina el archivo del servidor
	 */
	public function delete ()
	{
		if ($this->storage->exists($this->fileName)) 
		{
			$this->storage->delete($fileName);
		}
	}

	/**
	 *	Devuelve true si el file existe, false si no
	 */
	public function exists ()
	{
		if ($this->storage->exists($this->fileName)) 
		{
			return true;
		}		

		return false;
	}

	/**
	 *	retorna el archivo en codigo binario del server
	 */
	public function getBinary ()	
	{
		if (!$this->storage->exists($this->fileName)) 
		{	
			return false;
		}
		
		return $this->storage->get($this->fileName);
	}

	/**
	 *	Genera un nombre de 8 caracteres mas la extension
	 * 	@param el campo file
	 */
	private function generateName ($fileData)
	{
		// obtiene la extension del archivo
		$this->ext = pathinfo($fileData->getClientOriginalName(), PATHINFO_EXTENSION);
		
		// generar un nombre de 16 caracteres aleatorios
		$generator  = new RandomStringGenerator;
		$this->name = $generator->generate(16);

		// set the fileName
		$this->fileName = $this->name.".".$this->ext;
	}

	/**
	 *	Busca coincidencias en el servidor
	 *	si ya existe un archivo con el mismo nombre
	 *	agregara (1) 
	 */
	private function filter ()
	{
		$i = 0;

		while ($this->storage->exists($this->fileName))
		{
			$i++;
			$this->fileName = $this->name."(".$i.")".".".$this->ext;
		}
	}


	/**
	 *	Obtiene la ruta del archivo en el servidor
	 */
	public function getFilePath ()
	{
		return $this->storage->getDriver()->getAdapter()->getPathPrefix().$this->fileName;
	}

	/**
	 *	getter $filename
	 */
	public function getFileName ()
	{
		return $this->fileName;
	}

	/**
	 *	setter $filename
	 */
	public function setFileName ($fileName)
	{
		$this->fileName = $fileName;
	}

	/**
	 *	Descarga el archivo
	 */
	public function download ($fileName)
	{		
		return response()->download($this->getFilePath());
	}
}