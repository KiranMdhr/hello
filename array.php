<?php

$cars =array(
   "BMW","Lambo","Rolls Royce","Audi");
$len = count($cars);
// print($len);
for($i = 0;$i < $len; $i++)
{   echo $cars[$i];
   echo "<br>";
}

?>