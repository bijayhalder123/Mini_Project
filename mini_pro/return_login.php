<?php
	//ob_start();
	session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Advice for your trip</title>

</head>
<body>
<?php            

if(isset($_SESSION['username']))
	{
		echo "Welcome: ".$_SESSION['username'];
	}

?>	
<h1>Thank you for Registeration</h1>
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="mini_pro"; // Database name
$tbl_name="login"; // Table name

$con = mysqli_connect($host,$username,$password,$db_name);

$query = "SELECT * from login";

$result = mysqli_query($con,$query);


echo "<table border='2px'>";
echo "<tr>";
echo "<th>User Name</th>";
echo "<th>Password</th>";


while($r = mysqli_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>{$r["Username"]}</td>";
	echo "<td>{$r["Password"]}</td>";
	echo "</tr>";
}
echo "</table>";

?>
</body>
</html>
