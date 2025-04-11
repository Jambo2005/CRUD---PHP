<?php

    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "JAMBO_2B");

    $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);


    if (!$connection){
        die("Connection failed");
    }

    else{
        echo "yesss";
    }
    