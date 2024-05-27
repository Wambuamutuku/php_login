<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "php_prac";
 
    
if(!$con = mysqli_connect($dbhost, $dbuser,$dbpassword,$dbname))
{
    die("failed to conect to database");
}


