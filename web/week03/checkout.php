<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <?php 
        echo $_SESSION["name"] . "<br>";
        echo $_SESSION["price"] . "<br>";
    ?>
</head>
    </html>