<?php  
    //echo date('d'); // day
    //echo date('m'); // month
    //echo date('d'); // year
    //echo date('Y'); // year
    //echo date('1'); // day of the week
    //echo date('h'); // hour of the day 
    //echo date('i'); // minutes 
    //echo date('s'); // seconds
    //echo date('a'); // am or pm

    // Set timezone
    date_default_timezone_set('America/New_York');

    echo date("d/m/Y");
    echo '<br/>';
    echo date("h:i:sa");

    // Create a timestamp
    $timestamp = mktime(12,28,54,12,28,1983);
    echo '<br/>My timestamp:';
    echo date('d/m/Y h:i:sa', $timestamp);

    // String to time
    // This creates a unix code timestamp 
    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Days');
    echo date('m/d/Y h:i:sa', $timestamp4);






?>