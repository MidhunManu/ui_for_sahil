<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		include "navbar.php";
	?>
	<img id="nike" src="nike.png"></img>
	<div id="container">
	<form id="login_form" action="index.php" method="post">
		<div class="card">
  <div class="form_div">
		<div style="background-color: skyblue">login form</div>
		<br><br>
		<input type="text" placeholder="enter your username"/>
		<br>
		<br>
		<input type="password" placeholder="enter your password"/>
		<br>
		<br>
		<button type="submit">Login</button> | <a href="#">Not Registered Yet</a>
  </div>
</div>
	</form>	
	</div>
</body>
</html>
