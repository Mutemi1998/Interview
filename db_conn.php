<?php

$sname= "localhost";
$unmae= "debian-sys-maint";
$password = "y1F1gHHUrB5bykmn";

$db_name = 'Interview';
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

?>