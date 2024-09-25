<?php
$servername = "mysql32j11.db.hostpoint.internal"; // or your database server
$username = "ehowudir_dave";
$password = "threeThirstyTurtles";
$dbname = "ehowudir_davesapartmentDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT user_id, user_name FROM test_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<h2>Users List:</h2><ul>";
  while($row = $result->fetch_assoc()) {
    echo "<li>ID: " . $row["user_id"]. " - Name: " . $row["user_name"]. "</li>";
  }
  echo "</ul>";
} else {
  echo "0 results found";
}
$conn->close();
?>
