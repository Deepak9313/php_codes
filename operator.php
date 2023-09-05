<?php
// Arithmetic operators :- +,-,*,/,%,** for exponent
// Assignment operators :- +=,-=,*=,/=,%=
// Comparison operators :- ==,===,!=,<> not equal to , !== not identical,>,<,>=,<=,<=> returns an integar less than,equal to ,or greater than zero only return -1,0,1
// Increment/Decrement operators :- ++$x,--$x,$x++,$x==
// Logical operators :- and,or,xor ----- && ,||,!
// String operators :- . , .= stands for concatinating assignment
// Array operators :- + for union,== for equality, ===,!=,<>,!==
// Conditional assignment operators :- ?: ternary, ?? null coalescing
# i am using use here the last one because above is clear for now
$res = $_GET["user"]??"not get the user name";
echo $res;
$_GET["user"] = "deepak";
$name = $_GET["user"] ?  $_GET["user"] : "not display";
echo $name;
?>