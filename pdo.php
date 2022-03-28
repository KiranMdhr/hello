<?php
$servername="localhost";
$username="root";
$password="";
try{
    $conn = new PDO("mysql:host=$servername;dbname=myDB",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  
}
$sql = "CREATE DATABASE myDBPDO";
// use exec() because no results are returned
$conn->exec($sql);
echo "Database created successfully<br>";
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}
$conn = null;



?>