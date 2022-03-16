<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "image";

    $con = mysqli_connect($server, $user, $pass, $db);

    if(!$con){
        die("Connection Lost...!".mysqli_connect_error());
    }

?>