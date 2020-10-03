<?php
  if (isset($_POST['username']) && isset($_POST['password'])) {

        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        if (empty($username)) {
            header("Location: index.php?error=Username is required");
            exit();
        } else if (empty($password))
        {
            header("Location: index.php?error=Password is requied");
            exit();
        } else {
            echo "valid input";
        }
  }else {
      header("Location: index.php");
      exit();
  }
?>