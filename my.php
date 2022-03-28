<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect(
    $servername,$username,$password
);
if(!$conn){
    echo"ERROR";
}
else{
    echo"Successfully Connected";
}
$sql = "CREATE DATABASE Sadbl";
if(mysqli_query($conn,$sql)){
    echo"Database Created Successfully";
}
else{
    "Error";
}

?>