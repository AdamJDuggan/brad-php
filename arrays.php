<?php

# 3 types of arrays 
/*
    - Indexed
    - Associative
    - Multi-dimensional

*/

# INDEXED- most common 
$people = array("Karin", "Blanka", "ChunLi");
$ids = array(23,65,71);

// Can just use this JS way
$games = ['Crash', 'MetalGear', 'TombRaider'];

// Add to array when we know length
$games[3] = "Wipeout";

// Add to end of array when we do not know length
$games[] = 'Rayman';

// Method to see how many in array 
echo count($games);

// Create line break
echo"<br> <br>";

// Display whole array to screen 
print_r($games);

echo"<br> <br>";

// Print whole array to screen and show datatype. var_dump can be use din inspect any datatype
var_dump($games);

echo"<br> <br>";

// Access with dot notation. 0 based so Blanka is 1 
echo $games[1];

echo"<br> <br>";

# Associative arrays- assign key value pairs
$people2 = array('Ryu' => 35, 'Sagat' => 48, "Bison" => 50);

// Find by key and print value (age) to screen
echo $people2['Ryu'];

echo"<br> <br>";

// Add to associative array 
$people2["Kolin"] = 78;

echo"<br> <br>";

echo $people2['Kolin'];

echo"<br> <br>";

// Can also be done like this
$ids = [12 => "Ken", 34 => "Balrog"];
// Will print Ken to screen
echo $ids[12];

echo"<br> <br>";


# Multi dimensional 
$consoles = array(
    array('Super Nintendo', 1994, 200 ),
    array('Playstation1', 1998, 300)
);

echo $consoles[1][2]; //300




?>