<?php

#Loops  

    //For loop - when you know how many times. Takes - init, condition, inc
    for($i = 0; $i <= 10; $i++ ){
    echo $i;
    }

    echo '<br/>';

    // While takes just a condition
    $i = 0;
    while($i < 10){
        echo $i;
        $i++;
    }
    
    echo '<br/>';

    // Do while always runs at least once takes a condition 
    $i = 0;
    do{
        echo $i;
        $i++;
    }
    while($i < 10);

    echo '<br/>';

    // For each for arrays
    $people = ['Karin', 'Blanka', 'ChunLi'];
    forEach($people as $person){
        echo $person. ', ';
    }

    echo '<br/>';

    $consoles = array('N64' => 4.8, 'SNES' => 5, 'GameCube', 3 );
    forEach($consoles as $console => $score){
        echo $console. ': '. $score. ' ';
    }



?>