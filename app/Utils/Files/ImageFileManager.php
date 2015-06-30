<?php

namespace App\Utils\Files;

use Intervention\Image\Facades\Image;
use Storage;

class ImageFileManager extends BaseFileManager {

	public function __construct()
	{
		$this->storage  = Storage::disk('photos');
	}

	public function resize ($width, $height)
	{
		$imageCache = Image::cache(function ($image) use ($width, $height)
		{
			$image
				->make($this->getFilePath())
				->resize($width, $height, function ($constraint)
				{
					$constraint->aspectRatio();
					$constraint->upsize();
				});
		});

		return $imageCache;
	}

	public function getPhotoUrl ()
	{
		return url( '/images/'.$this->getFileName() );
	}

}
