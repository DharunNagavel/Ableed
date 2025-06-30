<?php
    session_start();
    $host="localhost";
    $username="root";
    $pass="";
    $db="one";
    $con=mysqli_connect($host,$username,$pass,$db);
    if(!$con)
    {
        die("connection failed".mysqli_connect_error());
    }
    else
    {
        //echo "connected successfully";
    }
?>
