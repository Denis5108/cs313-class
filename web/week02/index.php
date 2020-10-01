<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="styler.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Home Page</title>
</head>

<body>
	<div class="header">
		<h1>Denis Garley</h1>
		<p>Profile Page</p>
	</div>
	<div class="navbar">
		<a href="index.php">Home</a>
		<a href="project.html">Projects</a>
	</div>
	<div class="row">
	     <div class="side">
		   <div class="icon-bar">
		   	<img src="Denis Garley.jpg">
		<h4 style="text-align:center">Decription</h4>
                <div class="image1">Hello, my name is Denis Garley
				    I do computer science my hobbies are.				    
				    <ul style="margin:0 auto; padding: 0; list-style-type: none;">
					<li>Art/Animation</li>
				    	<li>Piano</li>
					<li>Coding</li>
					<li>Physics</li>
				    </ul>
			</div>
			
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="form1" method="post">
				<label for="fname">First name:</label><br>
				<input type="text" name="fname"><br>
				<label for="lname">Last name:</label><br>
				<input type="text" name="lname"><br><br>
				<input type="submit" value="Submit">
			</form>
		   </div>
		 </div>
	<footer>
		<div>Denis Garley</div>
	</footer>
	<script src="main.js"></script>
</body>

</html>