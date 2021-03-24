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

function getRating($platform, $user){
	$url = 'https://competitive-coding-api.herokuapp.com/api/'.$platform.'/'.$user;
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HTTPGET, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response_json = curl_exec($ch);
	curl_close($ch);
	$response=json_decode($response_json, true);
	return $response['rating'];
}



$sql1 = "SELECT * FROM persons";  
$result = $conn->query($sql1);



echo '<h2 style="text-align: center; color: white;">Leaderboard</h1>';
echo '<style>
.score {
  cursor: pointer;
}
</style>';

echo '<table id="leader"; style="margin-left: auto; margin-right: auto; margin-top: 50px; position: relative; width: calc(90vw - 2rem); max-width: 800px; border-spacing: 0 1rem; border: 1px solid rgba(255,255,255,0.3); color: white; border-collapse: collapse;">';

echo '<tr style="background-color: rgba(255, 255, 255, 0.3);">';
echo '<th data-type="string">Name</th>';
echo '<th class="score" data-type="number">Codechef</th>';
echo '<th class="score" data-type="number">Codeforces</th>';
echo '</tr>';
echo '<div style="border: 1px solid rgba(255,255,255,0.3);">';


$ctr = 1;
if ($result) {
  while($row = $result->fetch_assoc()) {
    echo '<tr style= "border: 1px solid rgba(255,255,255,0.3); height: 2rem;">';
    echo '<td style = "padding-left: 12rem; font-size: 1.1rem; letter-spacing: 0.05rem; text-align:left">';
    echo $row["username"]."</td>";
    echo '<td style = "font-size: 0.8rem;">';
    echo getRating('codechef', $row['ccname'])."</td>";
    echo '<td style = "font-size: 0.8rem;">';
    echo getRating('codeforces', $row['cfname'])."</td></tr>";
    $ctr = $ctr + 1;
  }
}
else
  echo"No Data Available";




echo '</div>';
echo '</table>';

echo '<table id="rank"; style="margin-left: auto; margin-right: auto; margin-top: 50px; position: absolute; max-width: 800px; border-spacing: 0 1rem; border: 1px solid rgba(255,255,255,0.3); color: white; border-collapse: collapse;">';
echo '<th id="rank" style="padding-left: 2rem;">';
echo 'Rank</th>';
echo '<div style="border: 1px solid rgba(255,255,255,0.3);">';
$ctr1=1;
while($ctr1!=$ctr){
    echo '<tr><td class="rank" style = "font-weight: 500; width: 10px; padding-left:2px;">';
    echo "$ctr1</td></tr>";
    $ctr1+=1;
}
echo '</div>';
echo '</table>';
echo "<br><br><br>";

echo '<script>
    leader.onclick = function(e) {
      if (e.target.tagName != 'TH') return;

      let th = e.target;
      // if TH, then sort
      // cellIndex is the number of th:
      //   0 for the first column
      //   1 for the second column, etc
      sortGrid(th.cellIndex, th.dataset.type);
    };

    function sortGrid(colNum, type) {
      let tbody = grid.querySelector('tbody');

      let rowsArray = Array.from(tbody.rows);

      // compare(a, b) compares two rows, need for sorting
      let compare;

      switch (type) {
        case 'number':
          compare = function(rowA, rowB) {
            return rowA.cells[colNum].innerHTML - rowB.cells[colNum].innerHTML;
          };
          break;
        case 'string':
          compare = function(rowA, rowB) {
            return rowA.cells[colNum].innerHTML > rowB.cells[colNum].innerHTML ? 1 : -1;
          };
          break;
      }

      // sort
      rowsArray.sort(compare);

      tbody.append(...rowsArray);
    }
  </script>';

CloseCon($conn);
?>
