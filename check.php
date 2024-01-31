<?php
include('connect.php');
session_start();
if($_post)
{
$uname=$_POST['urname'];
$uname=$_POST['pword'];

$sql=mysqli_query ($conn,"SELECT*FROM studtable WHERE username='uname' or password='$pword');
while($row=mysqli_fetch_assoc(sql)
{
$db uname=$row['username'];
$db pword=$row['password'];
}

