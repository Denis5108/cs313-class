<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // to prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    // connect to the database
    mysqli_connect("localhost", "root", "", "login");

    // query the database for user
   $result = mysqli_query("SELECT * FROM users WHERE username = '$username" AND password = '$password'") or die("Failed to query database " . mysqli_error());
?>