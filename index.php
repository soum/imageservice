<?php 
	
	header("Content-Type:application/json");
	include("ServiceKeyValidation.php");
	include("imageprocessor.php");

	$img_url = $_GET['url'];
	$text = $_GET['text'];
	$order = $_GET['order'];
	$service_key = $_GET['serviceKey'];

	if(validateServiceKey($service_key)){

		if(!empty($img_url) && !empty($text) && !empty($order)){

			$new_img = get_new_img_url($img_url, $text, $order);

			if (empty($new_img)){
				response(200, "fail", NULL);
			}else{
				response(200, "success", $new_img);
			}
			

		}else{

			response(400,"invalid request", NULL);

		}

	}else{
		response(400,"invalid service key", NULL);
	}


	function response($status, $message, $data) {

		header("HTTP/1.1 $status $status_message");
		$response['status'] = $status;
		$response['message'] = $message;
		$response['data'] = $data;
		
		$json_response = json_encode($response);
		echo $json_response;

	}

?>