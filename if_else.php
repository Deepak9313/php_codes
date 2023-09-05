<?php
$name = $_GET["user"] ?? "user";
if(isset($name)){
    echo "The name is set<br>";
}elseif($_GET["user"] == "deepak"){
    echo "The name is deepak";
}else{
    echo "the name is not set";
}
$favcolor = "red";
switch ($favcolor){
    case "red":
        echo "The color is red";
        break;
    case "green":
        echo "The color is green";
        break;
    case "dark":
        echo "The color is dark";
        break;
}
?>