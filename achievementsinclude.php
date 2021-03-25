<?php
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
$sql1 = "SELECT * FROM persons";  
$result = $conn->query($sql1);
echo '<h2 style="text-align: center; color: white;">Achievements</h1>';
echo '<style>
.score {
  cursor: pointer;
}
</style>';
echo '<table id="leader"; style="margin-left: auto; margin-right: auto; margin-top: 50px; position: relative; width: calc(90vw - 2rem); max-width: 800px; border-spacing: 0 1rem; border: 1px solid rgba(255,255,255,0.3); color: white; border-collapse: collapse;">';

echo '<tr style="background-color: rgba(255, 255, 255, 0.3);">';
echo '<th style="padding-left: 2rem;">Name</th>';
echo '<th>Achievements</th>';
echo '</tr>';
echo '<div style="border: 1px solid rgba(255,255,255,0.3);">';
if ($result) {
  while($row = $result->fetch_assoc()) {
    echo '<tr style= "border: 1px solid rgba(255,255,255,0.3); height: 2rem;">';
    echo '<td style = "font-weight: 500; width: 10px; padding-left:2px;">';
    echo $row["username"]."</td>";
    echo '<td style = "padding-left: 8rem; font-size: 1.1rem; letter-spacing: 0.05rem; text-align:left">';
    echo $row["achievements"]."</td>";
  }
}
else
echo"No Data Available";
echo '</div>';
echo '</table>';
echo "<br><br><br>";
CloseCon($conn);
?>
