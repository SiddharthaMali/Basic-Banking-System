<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "q";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "Connection Successful";
}
else
{
	//die("Connection Failed ".mysqli_connect_error());
}


?>