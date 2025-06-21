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

echo "Host: " . getenv("DB_HOST") . "<br>";
echo "User: " . getenv("DB_USER") . "<br>";
echo "DB: " . getenv("DB_NAME") . "<br>";

echo "Host: " . getenv("MYSQLHOST") . "<br>";
echo "User: " . getenv("MYSQLUSER") . "<br>";
echo "DB: " . getenv("MYSQLDATABASE") . "<br>";

?>
