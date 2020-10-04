
<?php
session_start();
$_SESSION['test'] = 'test';
?>
<!DOCTYPE html>
<html>
  <body>
      <?php 
        if (isset($_POST['submit']) && !empty($_POST['submit'])) {
            header("Location: index.php");
        }
      ?>
</body>
    </html>