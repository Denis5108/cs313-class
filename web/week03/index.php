<!DOCTYPE html>
<html>
    <head>
        <div>
            <div style="background-color:">Donuts</div>
            <div style="background-color:">Pizza</div>
            <div style="background-color:">Chicken</div>
            <div style="background-color:">Orange Juice</div>
        </div>
        <?php
        // add a list to put into a list of Orders in a shopping cart.
        // I want the user to be able to add items in a shopping list and view the items
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Item: <input type="text" name="item">
            <input type="submit">
        </form>

        <?php
            echo "<h1> You put a " . $_POST["item"] . " in your shopping list</h1>";
        ?>
</head>
    </html>