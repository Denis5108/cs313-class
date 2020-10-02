<!DOCTYPE html>
<html>
    <head>
         <div>
            <div style="background-color:yellow">Donuts</div>
            <div style="background-color:green">Pizza</div>
            <div style="background-color:lightblue">Chicken</div>
            <div style="background-color:orange">Orange Juice</div>
        </div>
        <?php
        $servername = "localhost";
        $username   = "username";
        $password   = "password";

        // create connection
        $conn = mysqli_connect($servername, $username, $password);

        // check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        ?>
            
        <!--<form method="post" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Item: <input type="text" name="item">
            <input type="submit">
        </form>-->

        <?php //echo "<h1> You put a " . $_POST["item"] . " in your shopping list</h1>";?> -->
</head>
    </html>