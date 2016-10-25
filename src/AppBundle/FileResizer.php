<?php 

namespace AppBundle;

use Symfony\Component\Filesystem\Filesystem;

class FileResizer
{
	private $fileDir;
	private $sizes;
        private $fs;
	/**
	* FileResizer construct.
	* @param $fileDir
	* @param $sizes
	*/
	function __construct($fileDir, $sizes, Filesystem $fs)
	{
		$this->fileDir = $fileDir;
		$this->sizes = $sizes;
                $this->fs = $fs;
	}

	public function resizeImage($fileName){
		$name = strstr($fileName, '.', true);
		$extension = strstr($fileName, '.');
		$fullPath = $this->fileDir.'/'.$fileName;

		foreach ($this->sizes as $size) {
			// Prende entrambe le dimensioni
			list($imgWidth, $imgHeight) = @getimagesize($fullPath);
			$newFilePath = $this->fileDir.'/'.$name.'_'.$size['name'].$extension;
			// Fa la divisione per entrambi e prende quello più piccolo
			// questo per avere la giusta proporzione
			$scale = max ($size['max_height'] / $imgWidth,
						$size['max_width'] / $imgHeight
						);
			if($scale >= 1) {
				if($fullPath !== $newFilePath){
					//return copy($fullPath, $newFilePath);
                                        $this->fs->copy($fullPath, $newFilePath);
				}
				return;
			}


			//Scala le immagini mantenendo le proporzioni
			$newWidth = $imgWidth * $scale;
			$newHeight = $imgHeight * $scale;

			$newImg = @imagecreatetruecolor($newWidth, $newHeight);
			switch (strtolower(substr(strrchr($extension, '.'), 1))) {
				case 'jpg':
				case 'jpeg':
					$srcImg = @imagecreatefromjpeg($fullPath);
					$writeImage = 'imagejpeg';
					$imageQuality = 75;
					break;
				case 'gif':
					@imagecolortransparent($newImg, @imagecolorallocate($newImg, 0, 0, 0));
					$srcImg = @imagecreatefromgif($fullPath);
					$writeImage = 'imagegif';
					$imageQuality = null;
					break;
				case 'png':
					@imagecolortransparent($newImg, @imagecolorallocate($newImg, 0, 0, 0));
					@imagealphablending($newImg, false);
					@imagesavealpha($newImg, true);
					$srcImg = @imagecreatefrompng($fullPath);
					$writeImage = 'imagepng';
					$imageQuality = 9;
					break;
				default:
					$srcImg = null;
			}

			imagecopyresampled($newImg, $srcImg, 0, 0, 0, 0, $newWidth, $newHeight, $imgWidth, $imgHeight);

			// La funzione finale per salvare
			$writeImage($newImg, $newFilePath, $imageQuality);

			//Libero la memoria
			@imagedestroy($srcImg);
			@imagedestroy($newImg);
		}
	}
}