<?php
declare(strict_types=1);//strict requirement
function message($msg){
    echo "Hello $msg <br>";
}
message("afternoon");
$end = message("evening");
function addnum(int $a = 0,int $b = 0){
    return $a + $b; // with type conversion it will automatically convert string into int 
}
# we use strict mode if the data type mismatches
// $result = addnum(3,"4");// now this give a error because of strict mode
$result = addnum(3,4);
echo ($result); 
echo ("<br>".addnum());
//pass by reference
$x = 30;
function add(&$value){
    $value += 5;
}
add($x);
echo("<br>".$x);
?>