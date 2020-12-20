<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "view transactions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM transactions";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>". $row["To"] ."</td><td>". $row["From"]."</td><td>". $row["Amount"] ."</td></tr>";
  }
  echo "</table>";
} 
else {
  echo "0 results";
}

$conn->close();
?>