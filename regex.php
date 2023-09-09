<?php
# Regx is called regular expression is a sequence of characters that forms a search pattern.
// it give many delimiter characters to search the pattern
#syntax = $exp = "/deepak/i"
# here / is the delimiter ,deepak is pattern and i is modifier that make the search case-insensitive
# we have three functions to search
//preg_match()	    => Returns 1 if the pattern was found in the string and 0 if not
//preg_match_all()	=> Returns the number of times the pattern was found in the string, which may also be 0
//preg_replace()	=> Returns a new string where matched patterns have been replaced with another string
$str = 'I am a developer and the work is too good because it gives a good performance. IS this okay? ';
$pattern = "/is/i";
echo preg_match($pattern,$str); // return 1 if pattern matches
echo preg_match_all($pattern,$str); // returns the no of match
echo preg_replace($pattern ,"are",$str);
/*
There are some delimiter which we used in searching pattern
i = performs a case insensitive search
m = performs a multiline search (patterns that search for the beginning or end of a string will match the beginning or end of each line)
u = match the UTF-8 encoded patterns
*/
/*
Regular Expression patterns
[abc] => find one character from options
[^abc] => find any character not between brackets
[0-9] => find one character from range 0 to 9
*/
$str1 = "This is A cat";
$pattern1 = "/[a]/i";
echo "<br> Return 1 if the pattern matches :- ";
echo preg_match($pattern1, $str1);
echo "<br>";
$str1 = "This is A cat";
$pattern1 = "/[^a]/i";
echo "<br> Return no if the pattern matches :- ";
echo preg_match_all($pattern1, $str1);
echo "<br>";
/*
---------Metacharacter------------
| => find a match for any one of the pattern example = cat|dog|fish
. => dot is used to find just one instance of any character
^ => finds a match as the beginning of a string as in : ^Hello
$ => finds a match as the end of a string as in : Hello$
\d => find a digit
\s => find a whitespace charced
\b => find a match at the beginning of a word like this : \bWORD or in end :- WORD\b
*/
$str1 = "This is A cat and dog";
$pattern1 = "/cat|dog|fish/";
echo "<br> Return 1 if the pattern matches :- ";
echo preg_match_all($pattern1, $str1);
echo "<br>";
$str1 = "This Hello, world";
$pattern1 = "/^Hell/i";
$pattern2 = "/world$/";
echo "<br> Return no if the pattern matches :- ";
echo preg_match($pattern1, $str1);
echo "<br>";
echo "<br> Return no if the pattern matches :- ";
echo preg_match_all($pattern2, $str1);
echo "<br>";
/*
----------Quantifier------------
n+	    =>   Matches any string that contains at least one n
n*	    =>   Matches any string that contains zero or more occurrences of n
n?	    =>   Matches any string that contains zero or one occurrences of n
n{x}    =>   Matches any string that contains a sequence of X n's
n{x,y}  =>   Matches any string that contains a sequence of X to Y n's
n{x,}   =>   Matches any string that contains a sequence of at least X n's
*/
$str1 = "papaya";
$pattern1 = "/(pa){2}/";
echo preg_match_all($pattern1,$str1);
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); // Outputs 1
?>