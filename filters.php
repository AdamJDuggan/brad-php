<?php
//Check for posted data
if(filter_has_var(INPUT_POST, 'data')){
    echo "Data found";
}
else{
    echo "No data";
}
if(filter_has_var(INPUT_POST, 'data')){
    if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
        echo "<br/> Email validates";
    }else{
        echo "<br/> Email is not valid";
    }
}

?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="data">
<button type="submit">Submit</button>

</form>