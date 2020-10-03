<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // to prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    // connect to the database
   $conn =  mysqli_connect("localhost", "root", "", "login");


    // query the database for user
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // check data
        while ($row = mysq;i_fetch_assoc($result)) {
            if ($row["username"] == $username && $row["password"] == $password)
            {
                echo "Login success!";
            }
        }
    }
    mysqli_close($conn);
?>