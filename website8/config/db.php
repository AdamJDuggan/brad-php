
<?php
    //require("./config.php");
    //Create connection
    $conn = mysqli_connect("localhost", "root", "123456", "phpblog");
    //$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if( mysqli_connect_errno()){
        echo "Failed to connect to mysql". mysqli_connect_errno();
    }
