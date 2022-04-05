<?php

$cars =array(
    "BMW","Lambo","Rolls Royce","Audi");
    $x = 5;
//  IS ARRAY
//  checks whether the given type is array or not
// if(is_array($cars))
// {
//     echo"This is an array .";
// }
// else{
//     echo"This isnot an array.";
// }
// echo"<br>";
// if(is_array($x))
// {
//     echo"This is an array .";
// }
// else{
//     echo"This isnot an array.";
// }


// ARRAY SEARCH
//  returns the index of the array 
// echo array_search('Audi',$cars);
// echo array_search('BMW',$cars);
// echo array_search('Lambo',$cars);
// echo array_search('Rolls Royce',$cars);


// ARRAY SLICE
// temporary array ko remove gardinxa
print_r($cars);
echo"<br>";
print_r(array_slice($cars,2));
 ?>