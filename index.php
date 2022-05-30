<?php
	session_start();
	$accessToken = $_SESSION['my_access_token_accessToken'];
	$expires_in = $_SESSION['my_access_token_expires_in'];
	require_once __DIR__ . '/Common/Config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tring Oauth</title>
</head>
<body>
<?php
	$connect = mysqli_connect(
    	'localhost',
    	'root',
    	'root',
    	'token'
	);

	if ($mysqli->connect_error) {
    	echo 'Errno: '.$mysqli->connect_errno;
    	echo '<br>';
    	echo 'Error: '.$mysqli->connect_error;
    	exit();
  	}

	echo '<p>access token :</p>';
	echo '<p><code>' . $accessToken . '<code><p>';
	echo '<p> expire_in:</p>';
	echo '<p><code>' . $expires_in . '<code><p>';

	$sql = "INSERT INTO `users`( `Access_token`, `Expires_in`) VALUES ('$accessToken','$expires_in')";

 	if ($connect->query($sql) === TRUE) {
 	echo "record inserted successfully";
	} else {
 	echo "Error: " . $sql . "<br>" . $conn->error;
	}

    $clientId = Config::CLIENT_ID;
    $clientSecret = Config::CLIENT_SECRET;
    $callbackURL = Config::CALLBACK_URL;
    $scope = Config::SCOPE;

	// if($accessToken!= ""){
	// 	echo '<p>Logged in!!</p>';
	// }else{
		$authUrl = "https://www.linkedin.com/oauth/v2/authorization";
        $redirectUrl = $authUrl . "?response_type=code&client_id=" . $clientId . "&redirect_uri=" . $callbackURL . "&scope=" . $scope;
  
  		echo '<p><a href="https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=771vpv4qw08gkj&redirect_uri=http%3A%2F%2Flocalhost%3A8888%2Fshared_inbox%2FCallback.php&state=foobar&scope=r_liteprofile%20r_emailaddress%20w_member_social">Sign in with Github</a></p>';

	// }
?>

</body>
</html>