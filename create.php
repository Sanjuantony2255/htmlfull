<?php
	$servername= "localhost";
	$username="root";
	$password="";
	
	$conn=mysqli_connect($servername,$username,$password);
	if($conn->connect_error)
	{
		die("connection failed:".mysqli_eror($conn));
	}
else
{
echo"connected successfully";
}
$sql="CREATE DATABASE mcadb";
$retval=mysqli_query($conn,$sql);
if(!$retval)
{
die("could not createn database:" .mysqli_error($conn));
}	
else
{
echo "database mcadb created successfully \n";
}
mysqli_select_ab($conn.'mcadb');

$sql 2="CREATE TABLE studtable(id int primary key NOT NULL AUTO-INCREMENT,username varchar(30) NOT NULL,name varchar(30) NOT NULL, password varchar(30) NOT NULL, 
email varchar(30) NOT NULL, course varchar(30) NOT NULL, mark varchar(30) NOT NULL); 

$retval 2=mysqli_query($conn,$sql 2);
if(!$ retval 2) {
die("could not create table:".mysqli_error($conn));
}
else
{
echo"table studtable created successfully";

?>