<?php
if(isset($_POST["submit"]))
{
    $fn = $_POST["fname"];
    $ln = $_POST["lname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $score = $_POST["score"];
    

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


$sql = "CREATE TABLE IF NOT EXISTS persons(
    username VARCHAR(30) NOT NULL,
    ccname VARCHAR(30) NOT NULL,
    cfname VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)";

if($conn->query($sql) === true){
	//echo "Table created successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql.<br>" . $conn->error;
}


$sql3="SELECT * FROM persons WHERE email='$email'";
$result = $conn->query($sql3);

if ($result->num_rows> 0) {
	echo "Registration already exists for the given Email address.<br>";
} else{

	$sql2="INSERT INTO persons SET username = '$username', ccname='$ccname', ccname='$cfname', email='$email'";


	if($conn->query($sql2) === true){
        header('Location: home.html');
        exit;
	}
    }
}


CloseCon($conn);
}
?>
