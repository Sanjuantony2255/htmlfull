<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";
$conn =new mysqli($servername, $username, $password);

if($conn->connect_error)
{
die("connection failed:"$conn->connect_error);
}
?>