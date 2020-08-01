<?php
	//ob_start();
	session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/fxhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Advice for your trip</title>

</head>
<body>

<?php

$host="localhost"; // Host name
$PRODUCT_NAME="root"; // Mysql product_name
$STOCK=""; // Mysql stock
$db_name="mini_pro"; // Database name
$tbl_name="item"; // Table name

$con = mysqli_connect($host,$PRODUCT_NAME,$STOCK,$db_name);

$query = "SELECT * from item";

$result = mysqli_query($con,$query);


echo "<table border='5px'>";
echo "<tr>";
echo "<th>PRODUCT_NAME</th>";
echo "<th>STOCK</th>";


while($r = mysqli_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>{$r["PRODUCT_NAME"]}</td>";
	echo "<td>{$r["STOCK"]}</td>";
	echo "</tr>";
}
echo "</table>";

?>
</body>
</html>
