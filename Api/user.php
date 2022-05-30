<?php

	function error($msg) {
		$response = [];
		$response['success']=false;
		$response['success']=$msg;
		return json_encode($response);
	}

	session_start();
	$accessToken = $_SESSION['my_access_token_accessToken'];

	if($accessToken ==""){
		die(error('Error : Invalid acceses token'));
	}

	$headers = [
		"User-Agent: Example",
		"Authorization: Bearer $accessToken"
	];
	
// 	curl -X GET 'https://api.linkedin.com/v2/shares/{share ID}' \
// -H 'Authorization: Bearer {INSERT_TOKEN}'


	// Testbooth 
	$URL ="https://api.linkedin.com/v2/me";

	$ch = curl_init($URL);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	$data =json_decode($response);

	echo 'ID : ' .$data->id;
	echo '<br> Name:'.$data->localizedFirstName ." ".$data->localizedLastName;
	// var_dump($data);
	curl_close($ch);
?>
