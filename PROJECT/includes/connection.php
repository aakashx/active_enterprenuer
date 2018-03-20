<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $db = 'student';

    //create the connection
    $conn = new mysqli($servername,$username,$password,$db);

    //check the connection
    if($conn->connect_error){
        die("connection is Failed".$conn->connect_error);
    }
    
?>