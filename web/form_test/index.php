<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="frm">
        <form action="login.php" method="POST">
                <h2>Login</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <label>Username:</label>
                <input type="text" id="user" name="user" placeholder="Username"/>
                <label>Password:</label>
                <input type="text" id="password" name="pass" placeholder="Password"/>
                <input type="submit" id="btn" value="Login" />
        </form>
    </div>
    </body>
</html>