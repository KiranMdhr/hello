<!-- <?php
$a = array(1,7,10,2,7,3,45,89,31);
asort($a);
foreach($a as $ary)
{
echo ($ary);
echo"<br>";
}

?> -->




Sorting for associative array
<?php
$a =array("Ram"=>"21","Hari"=>"22","Gopal"=>"24","Raju"=>"26");
arsort($a);

    foreach($a as $asso => $asso_value)
    {
    echo "Key=" . $asso . ", Value=" . $asso_value;
  echo "<br>";
    }
?>
