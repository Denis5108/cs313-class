<?php
    // Get values passe from form in login.php file
    $username = $_POST['username'];
    $password = $_POST['password'];

    // to prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($username);
    $password = mysqli_real_escape_string($password);

    // connect to the server and select database
    $conn = new mysqli("localhost", "root", "", "login");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully";
    }
    $sql    = "SELECT * FROM users WHERE username = '$username" AND password = '$password'";
    $result = mysqli_query($conn, $sql);
     
    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password) {
        echo "Login sucess!!! Welcome " . $row['username';]
    } else {
        echo "Failes to login!";
    }

    mysqli_close();
?>