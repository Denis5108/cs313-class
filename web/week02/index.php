<html>

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="styler.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Home Page</title>
</head>

<body>
	<div class="header">
		<h1>Denis Garley</h1>
		<p>Profile Page</p>
	</div>
	<div class="navbar">
		<a href="index.html">Home</a>
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
			<?php
				$firstName, $lastName = " ";

				if ($_SERVER["REQUEST_METHOD"] == "POST")
				{
					$firstName = test_input($_POST["fname"]);
					$lastName  = test_input($_POST["lname"]);
				}

				function test_input($data) {
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}
			?>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="form1" method="get">
				<label for="fname">First name:</label><br>
				<input type="text" name="fname"><br>
				<label for="lname">Last name:</label><br>
				<input type="text" name="lname"><br><br>
				<input type="submit" value="Submit">
			</form>

			<?php
				echo "<h1>Welcome</h1>" . $firstName . " " . $lastName . "<br>";
			?>
		   </div>
		 </div>

	    <div class="main">
		<h1 style="text-align:center">Biography</h1>
				<p>
				Hello I am Denis Garley I am attending Rexburg for Computer Science,
					it is something that I have a passion for and so I decided to program.
					I like to code and make fun programs. Checkout some of my fun ideas on scratch.
					I have been coding since I was in elementary ever since it has been a passion.
					The idea of being able to write code that is interpreted by the computer is a
					cool concept to understand my passion is learning. My goal in 
					this class is to learn how to make websites that can run on a server.</p>
				<p> 
					I am not the best at making websites I do try to make sure my website
					looks neat for anyone that wants to view it. Many times I think about
					random things to add to this site. Other times I can't think of anything.
					So I made my website look like this.
				</p>
				<div>
					<p>Guess my age?</p>
					<input id = "num"><br>
					<button type="button" onclick="myFunction()">Submit</button>
					<p id="demo"></p>
				</div>
	     </div>
	</div>

	<footer>
		<div>Denis Garley</div>
	</footer>
	<script src="main.js"></script>
</body>

</html>