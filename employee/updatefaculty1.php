<?php

$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('Could not connect:'.mysql_error());
}
mysql_select_db("employee",$con);




$name=$_POST['nm'];


$query1="select * from faculty where `name`='$name'";



$result1=mysql_query($query1,$con) or die("error in query:".$query1."".mysql_error());
if(mysql_num_rows($result1)>0)
{
while($record=mysql_fetch_array($result1))
{
$id=$record['f-id'];
$nm=$record['name'];
$gen=$record['gender'];
$email=$record['email'];
$qua=$record['designation'];
$user=$record['contact'];

$pass=$record['salary'];


}
}

?>
<html>
<head>
<script>
function validate1()
{
	
F_id=document.updatefac.id.value;
na=document.updatefac.name.value;
gen=document.updatefac.gender.checked;
Email_Faclt=document.updatefac.email.value;
qu=document.updatefac.qual.value;
user1=document.updatefac.user.value;

$gen=document.updatefac.gender.value;

	if (F_id=="")
	{
	alert("Enter id");
	document.updatefac.id.focus();
	return false;
	}
	else if (isNaN(F_id)) {
                alert("Invalid id");
					document.updatefac.id.focus();
					return false;
          }
	
	
	if (na=="")
		{
		alert("Enter name");
		document.updatefac.name.focus();
		return false;
		}
		else
	//if (addstudentrecordsform.name.value.match(/^[a-zA-Z]+$/) && addstudentrecordsform.name.value !="")
		if (!isNaN(na)) 
		{
		alert("Invalid name");
		document.updatefac.name.focus();
		return false;
		}
		
		if($gen=="")
		{
		alert("select gender");
		document.updatefac.gender.focus();
		return false;
		}
		
				var mail=Email_Faclt;
			
		    var at=mail.indexOf("@");
		    var dot=mail.lastIndexOf(".");
				
		if(Email_Faclt=="")
		{
			alert("Enter Email");
				document.updatefac.email.focus();
				return false;
		}
		else 
		
			if(at<1 || dot<at+2 || dot+2>=mail.length)
			  {
			 alert("Not a valid Email Address");
			document.updatefac.email.focus();
						return false;
			 }
		
		
		
		if(qu=="")
		{
		alert("Enter Designation");
        document.updatefac.qual.focus();
        return false;
		}
		else
		if (!isNaN(qu)) 
		{
		alert("Invalid designation");
		document.updatefac.qual.focus();
		return false;
		}
		
		 
		var ichars=user1;

		var at=ichars.indexOf("_");
		var dot=ichars.lastIndexOf(".");
		if (user1=="")
	
			{
				alert("Enter Contact no.");
				document.updatefac.user.focus();
				return false;
					 }    
		
		
		
			
		
		
		
}




</script>
</head>
<center><h1>Update Faculty Details</h1></center>
<br><a href="logout.php">Log out</a><br><br><br><br><center><table border=1 bordercolor=white cellpadding=10 cellspacing=10><tr><td>
<form method="post" action="updatefaculty3.php" name="updatefac" onSubmit="return validate1()">

Faculty id:-&nbsp;&nbsp;&nbsp; <input type="text" name="id" value="<?php echo $id; ?>"readonly><br><br>
Name:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="name" value="<?php echo $nm; ?>"><br><br>
Gender:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="gender" value="<?php echo $gen; ?>"><br><br>

Email id:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" value="<?php echo $email; ?>"><br><br>

Designation:-&nbsp;<input type="text" name="qual" value="<?php echo $qua; ?>"><br><br>


Contact no:-&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user" value="<?php echo $user; ?>"><br><br>
Enter Basic:-&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pass" value="<?php echo $pass; ?>"><br><br>
<b><u>Basic for</u></b><br>
H.O.D-> 40000<br>
Asst. Prof-> 23610<br>
Prof-> 20000<br>
Lecturer->15000<br><br>






<br />
<center><input type="submit" name="submit" value="update"/></center>
</form></td></tr></table></center>



<body background="bac.jpg" text="white">

</body></html>

