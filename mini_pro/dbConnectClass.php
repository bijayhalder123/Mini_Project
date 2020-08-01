<?php
$mysqli = new mysqli('localhost', 'root','','mini_pro');

if($mysqli->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}
if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
		
		$password = md5($_POST['password']);

$query = "INSERT INTO mini_pro (username,password) VALUES ('$username','$password')";
$insert_row = $mysqli->query($query);
if($insert_row){
    print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br />';
}else{
    die('Error : ('. $mysqli->errno .') '. $mysqli->error);
}

header("location:health.html");
}
  ?>      