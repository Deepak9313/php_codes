<?php
$x = 0;
while($x <= 10){
    echo $x."<br>";
    $x++;
}
$arr = array("abc",23,"xyz");
foreach($arr as $key => $value){
    echo("<br>".$key." = ".$value);
}
?>