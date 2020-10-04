
<?php
session_start();
$_SESSION['test'] = 'test';
?>

<?php 
if (isset($_POST['submit']) && !empty($_POST['submit'])) {
    header('Location: shoppingCart.php');
}
?>
