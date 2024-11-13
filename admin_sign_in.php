<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/admin_sign_in.css">
	</head>
	<body>
		
		<marquee>propertylk</marquee><br><br>

		<h2>Admin Sign In</h2>

		<form action="admin_sign_in_validation.php" method="post">

		  <div class="container">
			<strong>Email</strong>
			<input class="email" type="text" placeholder="Enter Email" name="email" required>

			<strong>Password</strong>
			<input class="psw" type="password" placeholder="Enter Password" name="psw" required>
				
			<button type="submit">Login</button>
		  </div>

		  <div class="lcontainer" style="background-color:#f1f1f1">
			<button type="button" class="cancelbtn" onclick="document.location='index.php'">Cancel</button>
		  </div>
		</form>
		
		<hr>
		<footer>
			<p>&copy; 2024 property.lk. All rights reserved.</p>
		</footer>
	</body>
</html>
