<?php
	$Hostname = getenv("DB_HOST");
	$Username = getenv("DB_USER");
	$Password = getenv("DB_PASS");
	$DBname = getenv("DB_NAME");
	$Port = getenv("DB_PORT");

	$con = mysqli_connect($Hostname, $Username, $Password, $DBname, $Port);

if (!$con){
    echo "Connection failed!";
    exit();
}

?>
