<?php
# we can make a navbar in one file and use that navbar in many pafes using include and require
/*
require : require will produce a fatal error (E_COMPILE_ERROR) and stop the script
include : include will only produce a warning (E_WARNING) and the script will continue
*/
include("data.php");
require("form.php")

?>