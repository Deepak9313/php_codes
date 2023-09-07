<?php
# we have the date() is used to foramt a date and time
# syntax = [ date(format,timestamp)]
/*
d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the week
*/
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
// Get a time using date() function
/*
H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)
*/
echo "Time is ".date("h:i:sa");
// a situation will come when we got incorrect time because may be my server in differnet country we need to set the correct timezone
// date_default_timezone_set("America/Los_Angeles");
echo "Time is ".date("h:i:sa");
//mktime() is the maketime function is used to set the time
//syntax [ mktime(hour, minute, second, month, day, year) ]
$d = mktime(9,45,23,8,18,2000);
echo "<br>Created date at ".date("Y-m-d h:i:sa",$d)."<br>";
/*
getdate() is used to get the data and time in array format
date_diff() returns the difference between two dates
time() function returns the current time in seconds
*/
$t = time();
echo ($t."<br>");
?>