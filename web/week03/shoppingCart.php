<!DOCTYPE html>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="styler.css?v=<?php echo time(); ?>">
        </head>
    <body>
        <nav>Our Decour Has Never Been Better</nav>
        <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "testdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
    </body>
    </html>