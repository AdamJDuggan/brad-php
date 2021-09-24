<?php
    #$_SERVER_SUPERGLOBALS

    //Create Server array 
    $server = [
         "Host server name" => $_SERVER["SERVER_NAME"],
         "Host header" => $_SERVER["HTTP_HOST"],
         "Server software" => $_SERVER["SERVER_SOFTWARE"],
         "Document route" => $_SERVER["DOCUMENT_ROOT"],
         "Current page" => $_SERVER["PHP_SELF"],
         "Server script name" => $_SERVER["SCRIPT_NAME"],
         "Absolute path" => $_SERVER["SCRIPT_FILENAME"]
        ];


    //echo "<br/>";

    //Create clinet array
    $client = [
        "Client system info" => $_SERVER["HTTP_USER_AGENT"],
        "Client ip address" => $_SERVER["REMOTE_ADDR"],
        "Remote port" => $_SERVER["REMOTE_PORT"]


    ];

    //print_r($client); 

    //Create clinet array


?>