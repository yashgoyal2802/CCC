<?php

$user = $_COOKIE['username'];

function OpenCon()
{
	$dbhost = "sql6.freesqldatabase.com";
	$dbuser = "sql6400897";
	$dbpass = "gcysFbCvd9";
	$db = "sql6400897";
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 	return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
} 

$conn = OpenCon();
if($conn === false){
  die("ERROR: Could not connect." . $conn->connect_error);
  echo "<br>";
}

$sql = "SELECT * FROM persons WHERE username='$user'";
$result = $conn -> query($sql);

if($result){
  
  $email = $result['email'];
  $ccname = $result['ccname'];
  $cfname = $result['cfname'];
  $ach = $result['achievements'];
  $pwd = $result['password'];
}
?>