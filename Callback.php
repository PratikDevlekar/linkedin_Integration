<?php  
	require_once __DIR__ . '/Common/Config.php';
	$code = $_GET['code'];

	if($code == ""){
		header('Location: http://localhost:8888/shared_inbox/');
		exit;
	}

	$clientId = Config::CLIENT_ID;
    $clientSecret = Config::CLIENT_SECRET;
    $callbackURL = Config::CALLBACK_URL;
    $URL = "https://www.linkedin.com/oauth/v2/accessToken";

    $postParams = http_build_query( array(
    	'grant_type' => "authorization_code",
    	'code' => $code,
    	'redirect_uri' => $callbackURL,
    	'client_id' => $clientId,
    	'client_secret' => $clientSecret
    ));

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $URL);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$postParams);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept: application/json'));
	$response = curl_exec($ch);

	var_dump($response);
	curl_close ($ch);
	$data =json_decode($response);
	
	if ($data->access_token !="") {
		session_start();
		$_SESSION['my_access_token_accessToken'] = $data->access_token; 
		$_SESSION['my_access_token_expires_in'] = $data->expires_in;
		header('Location: http://localhost:8888/shared_inbox/');
		exit();
	}
?>