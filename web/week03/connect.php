<?php

    $servername = "localhost";
    $username   = "username";
    $password   = "password";
    $database   = "testdb";
     
    
    // connection
    $conn = new mysqli($servername, $username, $password);


    // checking connection
    if (!$conn) {
        die("connection failed: " . mysqli_connect_error());
    }
    echo "connected successfully";

    // create table
    $sql = "CREATE TABLE Customers (
        id INT(6) unsigned auto_increment primary key,
        firstName varchar(30),
        lastname  varchar(30),
        email     varchar(30),
        address   varchar(30)
    )";

    if (mysql_query($conn, $sql)) {
        echo "Table Customers created";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>