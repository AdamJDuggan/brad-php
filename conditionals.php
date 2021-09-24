<?php
# Conditionals
$num = 6;
if($num == 6){
    echo '6 passed <br/>';
};

// Nest if statements
if($num > 4){
    if($num < 10){
        echo 'inbetween 4 and 10 <br/> ';
    }
}

// AND operator can be used instead of &&
if($num > 4 AND $num < 10){
    echo 'inbetween 4 and 10 <br/> ';
};

// OR operator can be used instead of || 
if($num > 4 OR $num < 10){
    echo 'inbetween 4 and 10 <br/> ';
};

// Exclusive OR is XOR- it has to be one of the two 
if($num > 4 XOR $num < 5.5){
    echo 'inbetween 4 and 10 <br/> ';
}

// Switches are same as JS






/*

*/

?>