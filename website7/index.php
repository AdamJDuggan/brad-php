<?php
$path='dir1/myfileIsHere.php';
$file = "file1.txt";
//Return a file name 
echo basename($path);
echo("<br/>");
//Return file name without extension
echo basename($path, ".php");
echo("<br/>");

//Return the directory name form the path 
echo dirname($path);
echo("<br/>");

//Does file exisits. Also returns 1 if it is a folder
echo file_exists($file);
echo("<br/>");

//Get absolute file path 
echo realpath($file);
echo("<br/>");

//Is it a file- return
echo is_file($file);
echo("<br/>");

//Is writeable 
echo is_writeable($file);
echo("<br/>");

//Is readable 
echo is_readable($file);
echo("<br/>");


//Get file size 
echo filesize($file);
echo("<br/>");

//Create a directory  
//mkdir("testing");
//Remove a directory as long as no files in it
//rmdir('testing');

//Copy a file 
echo copy("file1.txt", "file2.txt");

//Rename a file
//rename("file2.txt", "myfile.txt");

//Delete a file
unlink("myfile.txt");

//Write from file to string
echo file_get_contents($file);

//Upto 12.12 video 19


?>