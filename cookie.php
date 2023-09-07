<?php
#A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too.
# syntax for setcookie(name, value, expire, path, domain, secure, httponly)
setcookie("name","deepika",time()+86400,"/php_codes/cookie.php","",true);
# we use 86400 = 1day explanation is = 60s * 60min * 24 hours = 86400
# to get the value we use $_COOKIE global variable
if(!isset($_COOKIE["name"])){
    echo "Cookie is not set";
}else{
    echo "Cookie is set and the value is : ".$_COOKIE["name"];
}
# we can set the same cookie again using setcookie()
setcookie("name","Deepika",time()+86400,"/php_codes/cookie.php","",true);
# to delete the cookie just expire the time
setcookie("name","",time()-86400);
?>