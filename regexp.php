<?php

$string = "Hello I hope everyone is having a good day.";
$exp = preg_match("/hope|I/",$string,$array);
if($exp){
    print("Found");}
else
{
    print("Not found");
}
echo"<pre>";
print_r($array);
echo"<pre>";
?>