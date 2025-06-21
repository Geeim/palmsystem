<?php

$Hostname = "52.76.27.242";      
$Username = getenv("DB_USER");      
$Password = getenv("DB_PASS");      
$DBname   = getenv("DB_NAME");      
$Port     = getenv("DB_PORT");     

$con = mysqli_connect($Hostname, $Username, $Password, $DBname, $Port);

	$con = mysqli_connect($Hostname,$Username,$Password,$DBname);

	if (!$con){
		echo "Connection failed!";
		exit();
	}
?>