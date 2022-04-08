<?php
  $age = 30;
switch($age){
    case 1:
        if($age<18)
        {
            echo"You cannot Vote.";
        }
    case 2:
        if($age>20)
        {
            echo"You can cast Vote.";
        }
    case 3:
        echo"You cannot Vote. You are too old.";
    default:
        echo"You  can vote.";

}

?>