<?php
# We can open the files in the php also
# PHP has several functions for creating, reading, uploading, and editing files.
/* Be Careful :- You can do a lot of damage if you do something wrong. Common errors 
                    are: editing the wrong file, filling a hard-drive with garbage data, and 
                    deleting the content of a file by accident.
*/
// The readfile() function is useful if all you want to do is open up a file and read its contents.
# ===> readfile() function returns the number of bytes read on success):
echo readfile("example.txt");
# Like C++ we have some function for file handling
$myfile = fopen("example.txt", "r");
echo fread($myfile,filesize("example.txt"));
fclose($myfile);
/*
Some Methods we have in file handling which we use files
r = open a file and read its contents
w = open a file and write its contents
a = open a file and append its contents from the last line
x = create a new file for write only
r+ = open a file for read/write
w+ = open a file for read/write
a+ = open a file for read/write
x+ = create a new file for read/write => returns falsse and an error if file already exists
*/
echo "<br>";
$myfile2 = fopen("example.txt", "r+");
echo "fgets is used to get character ".fgetc($myfile2);
echo "<br>fgets is used to get string ".fgets($myfile2);
echo "<br>";
while(!feof($myfile2)){
    echo fgets($myfile2);
}
// we use fwrite option to write the file content
$text = "\ngalvin is too intelligent\n";
fwrite($myfile2,$text);
$path = "/vendor/autoload.php";
echo basename($path)."<br>";
chgrp("example.txt","admin");
# copy("filename","filename2") => used to copy the file
# to delete a file we use unlink("filename")
# dirname("url") => to give the directory path
# disk_free_space() => give the disk space
# fgetcsv()=> return a line from the csv file
print_r(file("example.txt")); # to get the data in array format
#fileatime = > return the last access time of a file
#filectime => return the last change time of a file
echo fileowner("example.txt"); # give the owner of the file but it give value-->Tip: Use posix_getpwuid() to convert the user ID to a user name.
?>