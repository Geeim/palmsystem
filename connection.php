<?php

echo $Hostname = "sql103.infinityfree.com"; // HOST
$Username = "if0_39284576";            // USERNAME
$Password = "t1Nj4FsjrU";              // PASSWORD
$DBname   = "if0_39284576_palm";       // DB NAME
$Port     = 3306;                      // PORT

$con = mysqli_connect($Hostname, $Username, $Password, $DBname, $Port);    

	if (!$con){
		echo "Connection failed!";
		exit();
	}
?>