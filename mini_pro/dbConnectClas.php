<?php
$mysqli = new mysqli('localhost', 'root','','mini_pro');

if($mysqli->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
		$password = $_POST['password'];
$query = "INSERT INTO login (username,password) VALUES ('$username','$password')";
$insert_row = $mysqli->query($query);


header("location:health.html");
}
  ?>
  