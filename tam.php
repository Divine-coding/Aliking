<?php
$fn  = $_POST['fn'];
$fe  = $_POST['fe'];
$fs  = $_POST['fs'];
$fm  = $_POST['fm'];

$servername = "sql202.infinityfree.com";
$username = "if0_37797823";
$password = "s5I8Ab1vj7fpWgo";
$dbname = "if0_37797823_fali";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `port`(`fn`, `fe`, `fs`, `fm`) VALUES ('$fn', '$fe', '$fs','$fm')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>