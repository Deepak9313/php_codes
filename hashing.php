<?php
# Hashing is very important topic if we want to store the password of the users so that attacker can't steal the password from  the database 
# so we need to store the password in the encrypted form
$mypassword = "Deepak123";
// we have many algorithms like md5 and sha to convert the password into hash
$hash = password_hash($mypassword,PASSWORD_BCRYPT);
$input = "Deepak123";
$hashanothermethod = hash("md5",$mypassword);
echo $hashanothermethod."<br>";
echo $hash."<br>";
$res = password_verify($mypassword,$hashanothermethod);
echo $res;
if(password_verify($mypassword,$hashanothermethod)){
    echo "Password is verified";
}else{
    echo "Password is not verified";
}
?>