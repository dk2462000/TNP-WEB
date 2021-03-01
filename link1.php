<?php
$servername = "sql12.freesqldatabase.com";
$username = "sql12396021";
$password = "hann63ZDVc";
$dbname = "sql12396021";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM results";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["link1"]. " - Name: " . $row["link2"]. " " . $row["link3"]. "<br>";
    $link1=$row["link1"];
    header('Location: '.$row["link1"]);
  }
} else {
  echo "0 results";
}



    
    $conn->close();


?>
