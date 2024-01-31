<?php
include('connect.php');
 if($_POST){
		$username=$_POST['urname'];
		$name=$_POST['rname'];
		$email=$_POST['rmail'];
		$course=$_POST['rcourse'];

		$sql="INSERT INTO studtable VALUES('$bookno','$booktitle','$bookedition','$bookpub')");
		
		$retval =mysqli_query($conn,$sql);
if(!$retval)
{
die("couldnot register try again:".mysqli_error($conn));
} else {
echo "reg successfully"
}
		
		}
?>