<?php  

$sname = "assistencia20.mysql.dbaas.com.br";
$uname = "assistencia20";
$password = "Sophard175";
$db_name = "assistencia20";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}