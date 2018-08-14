<?php
$servername = "localhost";
$username = "id6487726_libraria";
$password = "libraria";
$database = "id6487726_libraria";
$conn = new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
	die("connection failed:" .$conn->connect_error);
}
?>