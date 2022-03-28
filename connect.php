<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shangrilla";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";



// $sql = "CREATE DATABASE Par";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

$sql = "INSERT INTO info (name, amount)
VALUES ('Kiran', 5000000);";
$sql .= "INSERT INTO info (name, amount)
VALUES ('Ram', 4000000);";

if (mysqli_multi_query($conn, $sql)) {
  echo " record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
