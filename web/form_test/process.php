<?php
    // Get values passe from form in login.php file
    $username = $POST['username'];
    $password = $POST['password'];

    // to prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    // connect to the server and select database
    mysql_connect("localhost", "root", "");
    mysql_select_db("login");

    // Query the database for user
    $result = mysql_query("selecy * from where username = '$username' and password = '$password'")
    or die("Failed to query database" . mysql_error());

    $row = mysqli_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password) {
        echo "Logign sucess!!! Welcome " . $row['username';]
    } else {
        echo "Failes to login!";
    }
?>