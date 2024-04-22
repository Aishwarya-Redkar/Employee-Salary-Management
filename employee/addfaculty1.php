<?php

$id=$_POST["id"];
$name=$_POST["name"];
$gen=$_POST["gender"];




$email=$_POST["email"];

$designation=$_POST["qual"];

$contact=$_POST["user"];
$basic=$_POST["basic"];


$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('Could not connect:'.mysql_error());
}
mysql_select_db("employee",$con);






$query9 = "SELECT * FROM `faculty` WHERE `f-id`='$id'"; 

$result9 = mysql_query($query9,  $con) or die ("Error in query: ".mysql_error());


if (mysql_num_rows($result9) > 0) { 

     echo "Faculty id already exists in database";
	 include("faculty.php");

  exit();
}
else
{ 
  
 







$gross=$basic+($basic*(65/100))+($basic*(57/100));
$deductions=($gross*(7/100));
$salary=$gross-$deductions;

$query="insert into `faculty`(`f-id`,`name`,`gender`,`email`,`designation`,`contact`,`salary`)VALUES('$id','$name','$gen','$email','$designation','$contact','$salary')";

$result=mysql_query($query,$con)
or die("Error in query:".$query." ".mysql_error());



echo "New record inserted with ID in 'Faculty Details table' ";


$query1="SELECT * FROM `faculty`";
$result1=mysql_query($query1,$con) or die("error in query:".$query1."".mysql_error());

if(mysql_num_rows($result1)>0)
{
echo "<center>";
echo "<h1>";
echo "Faculty Detail's";
echo "</h1>";
echo "</center>";
echo"<center>";
echo"<table cellpadding=10 border=1 >";
echo"<tr>";
echo"<th>";
echo "Faculty id";
echo "</th>";
	echo"<th>";
echo "Name";
echo "</th>";
    echo"<th>";
echo "Gender";
echo "</th>";

        
		
		echo"<th>";
echo "Email id";
echo "</th>";
echo"<th>";
echo "Designation";
echo "</th>";
echo"<th>";
echo "Contact no.";
echo "</th>";
echo"<th>";
echo "Salary";
echo "</th>";

while($row=mysql_fetch_array($result1))
{
	echo"<tr>";
	echo"<td>".$row['f-id']."</td>";
	echo"<td>".$row['name']."</td>";
        echo"<td>".$row['gender']."</td>";
		
       
       
		   echo"<td>".$row['email']."</td>";
		      
			  echo"<td>".$row['designation']."</td>";
			   
			   echo"<td>".$row['contact']."</td>";   
			   echo"<td>".$row['salary']."</td>";   
	echo"</tr>";
	}
echo"</table>";
echo"</center>";
}
else{
	echo"no rows found!";
	}
	}
mysql_close($con);

?>
<!DOCTYPE html>
<html>
<head></head>
<body background="bac.jpg" text="white">
<a href="logout.php">Log out</a>

</body></html>
