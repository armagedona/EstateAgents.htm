<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title> Other Worldly Estate Agents </title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript">
function validateName()
{
var x=document.forms["contacts"]["name"].value
if (x==null || x=="")
  {
  alert("Name must be filled out");
  return false;
  }
}
function validateComment()
{
var y=document.forms["contacts"]["comments"].value
if (y==null || y=="")
  {
  alert("Comment must be filled out");
  return false;
  }
}
function validateEmail()
{
var e=document.forms["contacts"]["email"].value
var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>
</head>
<body>
<div class="container">
<div class="innerContainer">
<?php include("header.php"); ?>
<div class="content3">
<center/>
<fieldset><legend>About Us:</legend>
<form name="contacts" action ="contacts.php" onsubmit="return validateName(), validateEmail(), validateComment();" method="POST">
<p>Name: <input name="name" id="name" type="text" size="30" /></p>
<p>Email: <input name="email" id="email" type="text" size="30" /></p>
<p>Comment: <br/><textarea name="comments" id ="comments" rows="4" cols="30"></textarea></p>
<br/>
<input name="submit" type="submit" value="Submit your feedback"/>
<input type="reset" value="Clear the form" />
</fieldset>
</div>
<?php include("footer.php"); ?>
</div>
</div>
</div>
</body>
</html>
<?php
$submit = $_POST['submit'];
$me='armagedona@abv.bg';
$title='E-mail from user.';
$message=$_POST['comments'];
$name = $_POST['name'];
$email = $_POST['email'];
if($submit){
mail($me,$title,'senders name: '.$name.'  senders email: '.$email.' message: '.$message);
echo "Message has been sent seuccessfully!";
} 
?>