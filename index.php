<?php 
	
	header("Content-Type:application/json");
	include("imageprocessor.php");

	$img_url = $_GET['url'];
	$text = $_GET['text'];

	if(!empty($img_url) && !empty($text)){

		$new_img = get_new_img_url($img_url, $text);

		if (empty($new_img)){
			response(200, "fail", NULL);
		}else{
			response(200, "success", $new_img);
		}
		

	}else{

		response(400,"invalid request", NULL);

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