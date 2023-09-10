<?php
# We have many functions to deal with data in the database so we need to connect to the database first.
# also we need some table for practice purposes
# first thing is connect to the database using connect() function
$servername = "localhost";
$username = "root";;
$password = "";
$dbname = "test";
$con = mysqli_connect($servername, $username, $password,$dbname);
$mysqli = new mysqli($servername,$username,$password,$dbname);
if($con){
    echo 'connection established';
    echo "<br>";
}else{
    echo mysqli_connect_error();
}
//connect is used to connect to the databasea and connect_error() is used to get error information
# affected_rows() => check to see the see the afected rows for query
# query() => to perform a query in database
$select = "SELECT * FROM testing";
$res = $mysqli->query($select);
echo $mysqli->affected_rows;
# change_user() => to start a different user use can use mysqli_change_user($con(previous one),"user","password","dbname"
#sometimes a query not work so finding error we use error() with query
$prac = "Select name from testing";
if(!mysqli_query($con,$prac)){
    // echo "Error description : ".mysqli_error($con);
    echo "<br>";
}
echo "<br>";
// oops approach is $mysqli->error
// -----------Now This is important for fetching data--------------------
# we need a select query for that
// we have some functions fo that 
// fetch_all() => 	Fetches all result rows as an associative array, a numeric array, or both
// fetch_array() => Fetches a result row as an associative, a numeric array, or both
// fetch_assoc() => Fetches a result row as an associative array
$res = mysqli_query($con,$select);
// $num = mysqli_fetch_all($res);
// echo "<br><pre>";
// print_r($num);
// echo "</pre><br>";
#  we can two things in second parameter MYSQLI_NUM and MYSQLI_ASSOC for assosiative array
// $num1 = mysqli_fetch_array($res,MYSQLI_ASSOC);
#fetch_assoc function give us the associative array and only give one array
// $num2 = mysqli_fetch_assoc($res);
echo "this is working";
echo "<pre>";
// print_r($num2);
echo "</pre>";
#fetch_row fetch the data into the indexed array only give one result from the first row
#if we want all data we use while loop
// while($row = mysqli_fetch_row($res)){
//     echo $row[1]." ".$row[2]."<br>";
// }
#fetch_field() this function returns the information about column
$num2 = mysqli_fetch_field($res);
echo "<pre>";
print_r($num2);
// $num3 = mysqli_fetch_object($res); // it give result as an object;
// $num3 = mysqli_fetch_row($res); //fetch only one row in numbered array
// while($num = mysqli_fetch_row($res)){
//     print_r($num3);
// }
$gethost = mysqli_get_host_info($con);
echo $gethost;
// mysqli_num_rows($res)=> give the no of rows returned
$res1 = mysqli_free_result($res);
echo $res1;
#-------------We have two commands commit and rollback--------
#just like commit in git it is and rollback is undo a query
//------------------Thanks for studing----------------------

//i comment the lines because this give error if all fetch commands run once
?>