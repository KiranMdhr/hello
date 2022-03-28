<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Connection Failed<br>");

}
echo"Connection Successful<br> ";



$sql = "CREATE DATABASE Nepal";
if (mysqli_query($conn,$sql)){
    echo("Database created Successfully ");
}
else{
    echo"ERROR";
}
mysqli_close($conn);
?>