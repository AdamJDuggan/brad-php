<?php

//Ternary
$loggedIn = false;
echo($loggedIn) ? "Logged in" : "Not logged in"; //Logged in 

echo "<br/>";

$isRegistered = ($loggedIn == true);
echo($isRegistered) ? true : false; //1 php prints 1 if true

$age = 20;
$score = 15;

echo "Yout score is: ". ($score > 10 ? ($age > 10 ? "Average" : "Exceptional") : ($age > 10 ? "Horrible" : "Average"));

echo "<br/>";

$array = [1,2,3,4,5];

?>


<div>
<?php if($loggedIn){
    ?>
    <h1>Welcome user</h1>
    <?php
}else{
    ?><h1>Welcome Guest</h1><?php
} ?></div>
<div>
<?php foreach($array as $val): ?>
    <?php echo $val; ?>
<?php endforeach; ?>
</div>




