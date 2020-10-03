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
    mysqli_connect("localhost", "root", "");
    mysqli_select_db("login");

    // Query the database for user
    $result = mysqli_query("selecy * from where username = '$username' and password = '$password'")
    or die("Failed to query database" . mysqli_connect_error());

    // $row = mysqli_fetch_array($result);
    // if ($row['username'] == $username && $row['password'] == $password) {
    //     echo "Logign sucess!!! Welcome " . $row['username';]
    // } else {
    //     echo "Failes to login!";
    // }
?>