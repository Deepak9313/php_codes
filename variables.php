<?php
$name = "Hello";
$age = 23;
echo $name .$age."<br>";
//there types of variable scope
/*
local
global
static
*/
//local scope
$x = 5;
function res(){
    $x = 43;
    echo $x;
}
res();
// global scope
function res1(){
    global $x;
    echo "<br>".$x."<br>";
}
res1();
// another method of global scope
function res3(){
    echo $GLOBALS['x'];
}
res3();
// static is used for when we do not want to delete the 
// local variable after completing the function
function res4(){
    static $y = 0;
    echo "<br>".$y."<br>";
    $y++;
}
res4();
res4();
res4();
//print command 
print($x);
echo ("<h1>This is the value of ".$x."</h1>");
$arr = array("name"=>"Deepak","age"=>23,"obj"=>null);
print_r($arr);// print and echo function cannot print the object and array so we need to use the print_r function
?>