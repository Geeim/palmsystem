<?php
	$Hostname = getenv("MYSQLHOST");
$Username = getenv("MYSQLUSER");
$Password = getenv("MYSQLPASSWORD");
$DBname   = getenv("MYSQLDATABASE");
$Port     = getenv("MYSQLPORT");


	$con = mysqli_connect($Hostname, $Username, $Password, $DBname, $Port);

if (!$con){
    echo "Connection failed!";
    exit();
}

?>
