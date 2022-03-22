<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Data </title>
    <style>
        form{
            text-align: center;
            
        }
        label{
            font-size: 18px;
           margin-right:620px;
           color:black;
            
        }
        input{
            width:50%;
            height:35px;
            /* margin-left: 50%; */
        }
    </style>
</head>
<body>
    <form action="submitted.php" method="get">
        <label for ="Name">Name</label><br>
        <input type="text" name="Name" id="Name"><br><br>
        <label for ="Address">Address</label><br>
        <input type="text" name="Add" id="Address"><br><br>
        <label for ="Age">Age</label><br>
        <input type="number" name="Age" id="Age"><br><br>
        <label for ="Contact No">Contact No</label><br>
        <input type="text" name="Contact No" id="Contact No"><br><br>
        <button>Submit</button>
        
    </form>
</body>
</html>