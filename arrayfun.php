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
// print_r($cars);
// echo"<br>";
// print_r(array_slice($cars,2));
// ARRAY CHUNK
 print_r($cars);
 echo"<br>";
//  $chunked = array_chunk($cars,2);
//  print_r($chunked);
// ARRAY POP
// $poped = array_pop($cars);
// print_r($poped);


// ARRAY PUSH
// array_push($cars,"Bently");
// print_r($cars);


// ARRAY KEYS
print_r(array_keys($cars));
 ?>