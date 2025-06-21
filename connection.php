<?php

echo $Hostname = "sql12.freesqldatabase.com";
$Username = "sql12785979";            
$Password = "NgdPaYkpqH";             
$DBname = "sql12785979";      
$Port = 3306;                     

$con = mysqli_connect($Hostname, $Username, $Password, $DBname, $Port);    

	if (!$con){
		echo "Connection failed!";
		exit();
	}
?>