<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
    <?php
    $name="";
    $nameErr="";
    $address
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["fname"])){ 
        $nameErr = "Name is required";
    }else{
           $name = $_POST["fname"]; 
    }
    if(empty($_POST["lname"])){ 
        $nameErr = "Name is required";
    }else{
           $name = $_POST["lname"]; 
    }
    if(empty($_POST["address"])){ 
        $nameErr = "Name is required";
    }else{
           $name = $_POST["lname"]; 
    }
    
}
?>
        <label for="fname" >Firstname</label>
        <input type="text" name="fname" id="fname" placeholder="fname">
        <span><?php echo $nameErr;?></span><br>
        <label for="lname">Lastname</label>
        <input type="text" name="lname" id="lname" placeholder="lname"><br>
        <span><?php echo $nameErr;?></span><br>
        <label for="Address">Address</label>
        <input type="text" name="address" id="address" placeholder="address"><br>
        <label for="age">Age</label>
        <input type="number" name="Age" id="Age" placeholder="Age"><br>
        <label for="Religon">Religon</label>
        <select name="Religon"id="Religon">
            
            <option>Christianity</option>
            <option>Muslim</option>
            <option>Hindu</option>
            <option>Buddhist</option>
            </select>
        <button>Submit</button>
            
    </form>

</body>
</html>