<?php
$nameer = $ageer = $generr = $websiteer = "";
$name = $age = $gender = $website = "";
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if(empty($_GET["name"])){
        $nameer = "Name is required";
    }else{
        $name = test($_GET["name"]);
    }
    if(empty($_GET["age"])){
        $ageer = "Age is required";
    }else{
        $age = test($_GET["age"]);
    }
    if(empty($_GET["gender"])){
        $generr = "Gender is required";
    }else{
        $gender = test($_GET["gender"]);
    }
    if(empty($_GET["desc"])){
        $websiteer = "Website is required";
    }else{
        $website = test($_GET["desc"]);
    }
}
function test($data){
    $data = trim($data); //used for trim the whitespace of data
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//isset function is very important to check the variable is set or not
if(isset($gender)){
    echo "Gender is set";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form handling</title>
</head>
<body>
    <h1>FORM VALIDATION</h1>
   <form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
    Name :<input type="text" name="name"><span style="color:red">*<?php echo($nameer)?></span><br>
    Age :<input type="text" name="age"><span style="color:red">*<?php echo($ageer)?></span><br>
    Gender :<input type="radio" value="male" name="gender">Male<input type="radio" value="female" name="gender">Female<span style="color:red">*<?php echo($generr)?></span><br>
    Website :<textarea name="desc" rows="5" cols="40"></textarea><span style="color:red">*<?php echo($websiteer)?></span><br>
    <input type="submit" value="Submit The Form">
    </form> 
    <?php
    echo "<h1>Input</h1>";
    echo $name;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $website;
    echo "<br>";
    ?>
</body>
</html>