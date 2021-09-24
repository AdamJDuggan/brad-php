<?php
$people = ["Ryu", "Ken", "ChunLi", "Blanka", "E-Honda", "Guile", "Zangief", "Karin"];
//Get query stirng
$q = $_REQUEST['q'];
$suggestion = "";
if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach($people as $person){
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === ""){
                $suggestion = $person;
            }else{
                $suggestion .= ", $person"; 
            }
        }
    }
}

echo $suggestion === "" ? "No suggestions" : $suggestion;
?>