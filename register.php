<?php
if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $ccname = $_POST["ccname"];
    $cfname = $_POST["cfname"];
    $email = $_POST["email"];
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

$sql = "CREATE TABLE IF NOT EXISTS persons(
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    ccname VARCHAR(30) NOT NULL,
    cfname VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE,
    achievements VARCHAR(100)
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
    $sql2="INSERT INTO persons SET username = '$username', password = '$password', ccname='$ccname', cfname='$cfname', email='$email'";
    
    if($conn->query($sql2) === true){
        header('Location: register.html');
        exit;
    }
}

CloseCon($conn);
?>
