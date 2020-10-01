<!DOCTYPE html>
<html>
    <head>
        <?php
        // add a list to put into a list of Orders in a shopping cart.
        // I want the user to be able to add items in a shopping list and view the items
        ?>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            Item: <input type="text" name="item">
            <input type="submit">
        </form>

        <?php
            echo "<h1> You put a " . $_POST["item"] . " in your shopping list</h1>";
        ?>
</head>
    </html>