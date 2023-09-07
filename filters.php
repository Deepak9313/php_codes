<?php
/*
Validating data = Determine if the data is in proper form.
Sanitizing data = Remove any illegal character from the data.
we can get the data from variours terms
 user input from a form
  cookies
  web services data
  server variable
*/
# filter_var() both validate and sanitize the data
$str = "<h2>Text in Heading2 tag</h2>";
$newstr = filter_var($str,FILTER_SANITIZE_STRING);
echo $newstr;
# to validate a integer
$num = 23;
$check = filter_var($num,FILTER_VALIDATE_INT);
# FILTER_VALIDATE_IP is used to check ip
# FILTER_VALIDATE_PORT is used to check port
# FILTER_VALIDATE_EMAIL is used to check email
# FILTER_VALIDATE_URL is used to check url
/*
filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL) is used to check all data from input is correct or not
INPUT_GET
INPUT_POST
INPUT_COOKIE
INPUT_SERVER
INPUT_ENV
*/
// after some upgrade in filter_var we have filter_var_array is used to validate and sanitize the values

?>