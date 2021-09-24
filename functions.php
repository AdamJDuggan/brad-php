<?php 

# Functions

// We can set default variables
function sayHello($name = "Bison"){
    echo "Hello $name <br/>";
};

sayHello('Karin');

// Return value
function addNumbers($num1, $num2){
    return $num1 + $num2;
};

echo addNumbers(2, 3);

echo "<br/>";  

// Pass value by reference
$myNum = 10;

function addFive($num){
    $num += 5; 
}
// This one by reference
function addTen(&$num){
    $num += 10; 
}

addFive($myNum);
echo "Value: $myNum <br/>";
addTen($myNum);
echo "Value: $myNum <br/>";

// Upto start of video 7


?>