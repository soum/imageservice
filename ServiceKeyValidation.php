<?php 
	

	function validateServiceKey ($service_key){

		$valid_service_key = false;
		$domain_name = "http://www.movado.com/";

		$input = base64_decode($service_key);
		$input_encoding = 'iso-2022-jp';
		$decoded_service_key = iconv($input_encoding, 'UTF-8', $input);

		if($decoded_service_key === $domain_name ){
			$valid_service_key = true;
		}

		return $valid_service_key;
	}


?>