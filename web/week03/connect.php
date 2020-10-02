<?php

    $username = 'root';
    $password =  '';
    $database =  'testdb';

    $databe = new mysqli('localhost', $username, $password, $database) or die("Unable to connect");
    echo "Sucess!";  
?>