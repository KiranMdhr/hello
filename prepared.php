<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shangrilla";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed");
  }
  else{
      echo("Connection Successful.");
  }
  $statement = $conn->prepare("INSERT INTO info(name,amount) VALUES (?, ?)");
  $statement->bind_param("si",$name,$amount);
  $name = 'Development';
  $amount = 500000;
  $statement->execute();




?>