<?php
session_start();
//to get values from login.php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'project');
$username = $_POST['user'];
$password = $_POST['pass'];
$q="SELECT * FROM sunil WHERE name='$username' && password='$password'";
$res=mysqli_query($con,$q);
$row=mysqli_num_rows($res);
if($row==1){
 echo"login sucess";
 header('location:welcome.php');

}
else{
	echo"incorrect";
	header('location:login.php');
}



?>