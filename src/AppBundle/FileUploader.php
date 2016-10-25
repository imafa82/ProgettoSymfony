<?php
namespace AppBundle;

use Synfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader{
	private $fileDir;
        private $avatarResize;
	/**
	*FileUploader constructor.
	*@param $fileDir
	*/
	public function __construct($fileDir, FileResizer $avatarResize){
		$this->fileDir = $fileDir;
                $this->avatarResize = $avatarResize;
	}
	public function upload ($file){
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->fileDir, $fileName);
            $this->avatarResize->resizeImage($fileName);
            return $fileName;
	}
}