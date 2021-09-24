<?php

# Substring- returns a portion of a string
$output = substr("Hello", 1); //ello 
$output2 = substr("Hello", 1, 3); //ell 
$output3 = substr("Hello", -2); //lo from end

# String length
$output4 = strlen("Hello World"); //11

#Strpos 
// Finds the first occurence of the first substring
$output5 = strpos('Hello world', 'o'); // 4- position of first o

// Finds the LAST occurence of a substirng
$output6 = strrpos("Hello world", "o"); // 7

// Trim whitespace
$text = " Hello world  "; // 13 characters
$trimmed = trim($text); //now 11 characters

// To uppercase
$output7 = strtoupper('Hello World'); // HELLO WORLD
$output8 = strtolower('HELLO WORLD'); // Hello World
//Capitialise the first letter of every word
$output9 = ucwords("hello world"); //Hello World

// Replace all occurences of a search string with a replacement
$output10 = "Hello World";
$output11 = str_replace("World", "Universe", $output10); //Hello universe

// Test to see if something is a string
$val = "Hello";
$output12 = is_string($val); // 1 is returned but true 
$values = array(true, false, "abc", 33, "33", 22.4, "22.4"," ", 0) ;
foreach($values as $value){
    if(is_string($value)){
        echo "{$value} is a string <br/>";
    }
}

// Compress a string for performance
$longString = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$compressed = gzcompress($longString);

//Uncompressed
$unCompressed = gzuncompress($compressed); // get the text back

// Upto start of video 13





?>