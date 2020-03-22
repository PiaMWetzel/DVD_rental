<?php
    $server = "localhost";
    $uname = "349-project1";
    $pass = "pass";
    $db = "project1";

    $conid = mysqli_connect($server, $uname, $pass, $db, '3308');

    if($conid) {
//        echo "Connected. " . mysqli_get_host_info($conid);
    }

    else {
//        echo "Cannot Connect. " . mysqli_connect_errno() . " " . mysqli_connect_error();
    }
?>