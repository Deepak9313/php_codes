<?php
// A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.
function callback($item){
    return strlen($item);
}
$strings = ["apple","banana"];
$len = array_map("callback",$strings);
print_r($len);
// let create a another callback function
function trimlen($data){
    $t = trim($data);
    return encrypt($t);
}
function encrypt($item){
    $t = strlen($item);
    return $t;
}
$length = trimlen("    hello World!  ");
echo $length;


?>