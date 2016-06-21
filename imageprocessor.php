<?php

	function get_new_img_url($imgURL, $text, $order){
		
		return LoadJPEG($imgURL, $text, $order);		

	}

	function LoadJPEG ($url, $text, $order) {

	    $jpg_image = imagecreatefromjpeg($url);

	    //height & width
	    $width = imagesx($jpg_image);
  		$height = imagesy($jpg_image);

  		if(!empty($width) && !empty($height)){

			$white = imagecolorallocate($jpg_image, 255, 255, 255);
			$font_path = 'OpenSans-Bold.TTF';
			
			imagettftext($jpg_image, 25, 0, 75, 150, $white, $font_path, $text);
			imagejpeg($jpg_image,"temp/".$order.".jpg");
			imagedestroy($jpg_image);

			return true;
		}else{
			return false;
		}

	}


?>