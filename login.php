<?php

if(isset($_POST["login"]))
{
    $username = $_POST["username1"];
    $password = $_POST["password1"];
    // $ccname = $_POST["ccname"];
    // $cfname = $_POST["cfname"];
    // $email = $_POST["email"];
}
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
    die("ERROR: Could not connect.<br>" . $conn->connect_error);
}

$sql= "SELECT * FROM persons WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if($result->num_rows>0){
	$cookie_name = "username"; 
	$cookie_value = $username;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	CloseCon($conn);
	header('Location: home.php');
}else{
    $error = "Your Login Name or Password is invalid";
    echo "$error";
}

?>
