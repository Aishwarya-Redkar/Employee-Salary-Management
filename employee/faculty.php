<?php

$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('Could not connect:'.mysql_error());
}
mysql_select_db("employee",$con);

?>
<html>
<head>
<script>
function validate1()
{
	
F_id=document.addfacultyrecordsform.id.value;
na=document.addfacultyrecordsform.name.value;
gen=document.addfacultyrecordsform.gender.checked;
Email_stud=document.addfacultyrecordsform.email.value;
qu=document.addfacultyrecordsform.qual.value;
user=document.addfacultyrecordsform.user.value;




	
	if (F_id=="")
	{
	alert("Enter id");
	document.addfacultyrecordsform.id.focus();
	return false;
	}
	else if (isNaN(F_id)) {
                alert("Invalid id");
					document.addfacultyrecordsform.id.focus();
					return false;
          }
	
	
	if (na=="")
		{
		alert("Enter name");
		document.addfacultyrecordsform.name.focus();
		return false;
		}
		else
	//if (addstudentrecordsform.name.value.match(/^[a-zA-Z]+$/) && addstudentrecordsform.name.value !="")
		if (!isNaN(na)) 
		{
		alert("Invalid name");
		document.addfacultyrecordsform.name.focus();
		return false;
		}
		
		if(gen==false)
		{
		alert("select gender");
	    return false;
		}
		
		var mail=Email_stud;
			
		    var at=mail.indexOf("@");
		    var dot=mail.lastIndexOf(".");
				
		if(Email_stud=="")
		{
			alert("Enter Email");
				document.addfacultyrecordsform.email.focus();
				return false;
		}
		else 
		
			if(at<1 || dot<at+2 || dot+2>=mail.length)
			  {
			 alert("Not a valid Email Address");
			document.addfacultyrecordsform.email.focus();
						return false;
			 }
		
		
		
		if(qu=="")
		{
		alert("Enter Designation");
        document.addfacultyrecordsform.qual.focus();
        return false;
		}
		else
		if (!isNaN(qu)) 
		{
		alert("Invalid Designation");
		document.addfacultyrecordsform.qual.focus();
		return false;
		}
		
		 
		var ichars=user;

		var at=ichars.indexOf("_");
		var dot=ichars.lastIndexOf(".");
		if (user=="")
	
			{
				alert("Enter contact no.");
				document.addfacultyrecordsform.user.focus();
				return false;
					 }    
		
		
		
		

}

</script>
</head>
<body background="bac.jpg" text="white">
<center><font face="algerian" size=20>Add Faculty Details</font></center><br>
<br>
<a href="logout.php">Log out</a><br><br><br><br>
<center><table border=1 bordercolor=white cellspacing=10 cellpadding=10><tr><td>
<form action="addfaculty1.php" method="POST" name="addfacultyrecordsform" onSubmit="return  validate1()">

<br>
Faculty id:-&nbsp;&nbsp;&nbsp; <input type="text" name="id" value=""><br><br>
Name:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="name" value=""><br><br>
Gender:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="Male">Male &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="Female">Female<br><br>


Email id:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" value=""><br><br>

Designation:-<input type="text" name="qual" value=""><br><br>


Contact no:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="user" value=""><br><br>
Enter Basic:-&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="basic" value=""><br><br>
<b><u>Basic for</u></b><br>
H.O.D-> 40000<br>
Asst. Prof-> 23610<br>
Prof-> 20000<br>
Lecturer->15000


<br>



<br>
 <center><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="reset" name="reset" value="Reset"></center><br><br>
</form></td></tr></table></center>
</html>