<?php
$host="localhost";
$user="root";
$pass="";
$db="form";
$con = new mysqli($host,$user,$pass,$db);
if(!$con){
	echo "connect_error";
}
 $username=$_POST['username'];
 $password=$_POST['password'];

$qry= "INSERT INTO `table`(`username`, `password`) VALUES ('$username','$password')";
$insert = mysqli_query($con,$qry);
if (!$insert) {
	echo "there is some problem";
}
else
{
	echo "DAta inserted";
}

?>
<?php

header("location:EMI.html");

exit;
?>