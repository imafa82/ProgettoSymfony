<?php
namespace AppBundle;

use Synfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader{
	private $fileDir;
	/**
	*FileUploader constructor.
	*@param $fileDir
	*/
	public function __construct($fileDir){
		$this->fileDir = $fileDir;
	}
	public function upload ($file){
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->fileDir, $fileName);
            return $fileName;
	}
}