<?php

	function get_new_img_url($imgURL, $text){
		
		return LoadJPEG($imgURL, $text);		

	}

	function LoadJPEG ($url, $text) {


	    $jpg_image = imagecreatefromjpeg($url);

	    //height & width
	    $width = imagesx($jpg_image);
  		$height = imagesy($jpg_image);
  		//to do: use this to center the text over image


  		//allocate font and color
  		if(!empty($width)){
			$white = imagecolorallocate($jpg_image, 255, 255, 255);
			$font_path = 'OpenSans-Bold.TTF';
			
			imagettftext($jpg_image, 25, 0, 75, 150, $white, $font_path, $text);
			imagejpeg($jpg_image,"temp/image.jpg");
			imagedestroy($jpg_image);

			return true;
		}else{
			return false;
		}

	}


	function write_to_sftp(){
		//to do::
		// write a batch job
		//loop over local files and post them over sftp
		//move files to archieve directory with new time stamp sub-directory 
	}



?>