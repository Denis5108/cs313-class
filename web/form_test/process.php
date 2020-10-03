<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // to prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($username);
    $password = mysqli_real_escape_string($password);

    // connect to the database
    mysqli_connect("localhost", "root", "");
    mysqli_select_db("login");

    // query the database for user
    $result = mysqli_query("SELECT * FROM users WHERE username = '$username" AND password = '$password'") or die("Failed to query database " . mysqli_error());

    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username) && row['password'] == $password) {
        echo "Login Success!! ";
    } else {
        echo "Login error " . mysqli_error();
    }
?>