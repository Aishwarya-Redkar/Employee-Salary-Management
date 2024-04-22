<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('Could not connect:'.mysql_error());
}
mysql_select_db("employee",$con);
session_start();
$username=$_POST["username"];
$pass=$_POST["password"];



if (!isset($_SESSION['username'])){

$query = "SELECT * FROM `members` WHERE `username`='$username'  AND `password`='$pass'";


$result = mysql_query($query,  $con) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result) > 0) { 

     // add username to session variable
		
		$_SESSION['username']='$username';
		
		
}
else
{  //redirect user to login page
  echo "Invalid login";
  include ("emp.html");
  exit();
}
}
include("addUpdate.html");
exit();
mysql_close($con);
?>