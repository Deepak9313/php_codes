<?php
$length = "String length function";
echo strlen($length);
$word_count = str_word_count($length);
echo "<br>The words in sentence is ".$word_count."<br>";
$revstr = strrev($length);
echo "<br>".$revstr."<br>";
$strpos = strpos($length,"length");
echo $strpos;
$strreplace = str_replace("function","functions",$length);
echo "<br>".$strreplace;
// chop is used to remove whitespaces
//crypt for string hashing
$strhash = crypt($length,"rt");
echo $strhash;
//md5,sha1 are string hashing functions
// strchar for first occurrence of a string
//strcmp for comparison between strings
// strtolowet for lowe strtoupper for upper case
//substr for cutting the string
// ucfirst convert the first letter into uppercase
// ucwords convert the first leeter into uppercase in all words

?>