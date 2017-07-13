
<html>
<head>
	<title>Acessing RestFUL APP via PHP</title>
</head>
<body>
<form method="post" action="">
	Administrator id: <input type="text" name="adminusername">
	<br><br>
	Password: <input type="password" name="admin_password">
	<br><br>
	Username: <input type="text" name="username">
	<input type="submit" name="submit" value="Submit">
</form>
 
<?php
 
if (isset($_POST['submit'])) {
	$adminname = $_POST['adminusername'];
	$adminpass = $_POST['admin_password'];
	
	$username = $_POST['username'];
	
	if($adminname=="Admin" && $adminpass=="animal")
	{
	$url = "http://127.0.0.1:80/WebServicetest/resttest.php?username=$username";
	$client = curl_init($url);
	curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($client);
	//echo($response);
	$result = json_decode($response);
	if( empty($result) ) {
		echo '<b>User does not exist</b></br>';
	} else {
		var_dump($response);
	}
	}
	else{
	echo '<b>Credentials are incorrect.</b></br>';
	}
	
}
 
?>
 
</body>
</html>