<?php
	
	session_start();
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	echo "user=".$user . " ".$pass;
	
	$dbname= "filip";
	$dbpassword ="filip";
	
	if($user != $dbname || $pass != $dbpassword)
		{
			echo "Pogrešno korisničko ime ili lozinka";
	}else
	{
		$_SESSION['loggedin'] = 'YES';
		$_SESSION['name']="filip";
		$url = "location:user.php";
		header($url);
		exit;
	}
	
	
	

?>