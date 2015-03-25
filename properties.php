<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title> Other Worldly Estate Agents </title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="container">
<div class="innerContainer">
<?php include("header.php"); ?>
<div class="properties"><?php
error_reporting(0);
$con = mysql_connect("trogon.csd.abdn.ac.uk","wtstudent","DyNEDurA");
mysql_select_db("webtech", $con);
$result = mysql_query("SELECT * FROM properties");
?>
<p>
<?php
echo "<table border='2'>
<tr> 
<th>Picture</th>
<th>Location</th>
<th>Description</th>
<th>Asking Price</th>
</tr>";
while($row = mysql_fetch_array($result)){
echo "<tr>
<td><img src=\"".$row['ImageURL']."\" width='150' height='120' /></td><td>".$row['Location']."</td><td>".$row['Description']."</td><td>".$row['AskingPrice']."</td>
</tr>";
}
echo "</table>";
?>
</p>
<?php mysql_close($con); ?>
</div>
<?php include("footer.php"); ?>
</div>
</div>
</body>
</html>