<?php
include('connect.php');
session_start();


if($_POST['submit'])
{
    $usrname = $_POST['uname'];
    $psword  = $_POST['pword'];

$sql = mysqli_query($conn,"SELECT * FROM studtable WHERE username= '$usrname' OR password='$psword' ");

while($row = mysqli_fetch_assoc($sql))
{
      $dbuname = $row['username'];				
      $dbpword = $row['password'];

}

if(isset($dbuname)&&isset($dbpword) )
{
   $_SESSION['loginuser']=$usrname;
   header("location"

}