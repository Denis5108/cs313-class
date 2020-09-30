<html>
<body>
<?php
    $firstName = htmlspecialchars($_POST['fname']);
    $lastName  = htmlspecialchars($_POST['lname']);
    echo "Welcome" . " " . $firstName . " " . $lastName . "<br>"
?>
</body>
</html>