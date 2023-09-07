<?php
/*
JSON stands for Javascript object notation and this is for storing and exchanging data
we have two functions in php to handle json
json_encode() : converts an array into a JSON object,array
json_decode() : converts a json object into a PHP object or an array
*/
$fruit = array("apple", "orange", "grapes","watermelon"); // 1d array into json array
$fruit2 = array("Deepika"=>"23","Himanshu"=>"24","Meenakshi"=>"28"); // associative array into json object
echo json_encode($fruit)."<br>";
echo json_encode($fruit2)."<br>";
echo "<br>";
var_dump($fruit);
echo "<br>";
var_dump($fruit2);
echo "<br>";
$json1 = json_encode($fruit);
$json2 = json_encode($fruit2);
print_r(json_decode($json1));
echo "<br>";
print_r(json_decode($json2));
echo "<br>";
// how to access the value of the php object
// two methods :- arrow method only work for class type and json method only work for array type
$obj = json_decode($json2);
$obj1 = json_decode($json1);
print_r($obj);
echo $obj->Deepika; // only arrow method is used to access the value of the php object
echo $obj1[0]; // we can only access the array with this method we can't access the class items 
?>