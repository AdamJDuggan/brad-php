<?php

#COMMENTS
// Single line comment

# Single line comment

/*
Multiline comment
*/


#VARIABLES
/*
 - Prefix with $ 
 - Start with letter or underscore
 - Case sensitive 

*/    

#DATA TYPES 
/*
    -Strings
    -Intergers
    -Floats
    -Booleans
    -Arrays 
    -Null
    -Resource - return or function
*/
$float1 = 4.4;
$bool1 = true;
$output = 'HEllo World';
$num1 = 2;
$num2 = 4;
$sum = $num1 + $num2; //Can be done
$string1 = "Hello";
$string2 = "World";

// We use a dot instead of a + to concat two strings together
$greeting = $string1 .' '. $string2;

// Works with double quotes- parse variables 
$greeting2 = "$string1 $string2"; 

// How to escape and use special characters 
$string3 = 'THey/\'re here';

// Dont need to escape with double quotes
$string4 = "They're here";

// Consts for things that wont change 
define('CONSTANT', 'Hello everyone');
// Echo is print to string
echo CONSTANT;


?>