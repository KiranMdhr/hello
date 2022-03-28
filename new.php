<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])){ 
        $nameErr = "Name is required";}
        echo("Name is required");
    }
    else{
           $name = $POST["name"] ; 
           echo($name);
    }
?>