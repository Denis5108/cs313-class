<!DOCTYPE html>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="styler.css">
        </head>
    <body>
    <div class="product">
     <form method="post" action="checkout.php">
            <div class="products">
                <img src="Denis Garley.jpg" />
                <h4 class="price">Price</h4>
                <h4 class="name">Name</h4>
                $<input type="text" name="quantity" class="form"  />
                <input type="hidden" name="name" value="name"/>
                <input type="hidden" name="price" value="price" /><br>
                <input type="submit" name="addtocart" class="btn btn-info" value="Add to cart" />
            </div>
        </form>
        <?php

$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "testdb";
 

// connection
$conn = new mysqli($servername, $username, $password, $database);


// checking connection
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

$sql = "SELECT customerID, firstName, lastname FROM customers WHERE firstName='Alex'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "customer id: " . $row["customerID"] . " firstname: " . $row["firstName"] . " lastname: " . $row["lastname"];
    }
}
mysqli_close($conn);
?>
    </div>
    </body>
    </html>