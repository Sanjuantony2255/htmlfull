<?php
include('connect.php');
session_start();


if($_POST['submit'])
{
    $uname = $_POST['uname'];
    $psword  = $_POST['pword'];

$sql = mysqli_query($conn,"SELECT * FROM userlogin WHERE username= '$uname' OR password='$pword' ");

while($row = mysqli_fetch_assoc($sql))
{
      $dbuname = $row['username'];				
      $dbpword = $row['password'];

}

if(isset($dbuname)&&isset($dbpword) )
{
if($dbuname==$uname &&dbpword==&pword)
{

   $_SESSION['login_user']=$uname;
   header("location:welcome.php");

}
else if($dbuname==$uname&&$dbpword!=$pword)
{
header("location:main.php?msg=Wrong password");
}
else if($dbuname!=$uname&&$dbpword==$pword)
{
header("location:main.php?msg=Wrong username");
}
}
else
{
header("location:main.php?msg=Wrong username and password");
}
}
?>