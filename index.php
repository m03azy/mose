<?php
	require "php/connection.php";
	require "php/header.php";
	
	if(isset($_POST['login'])){
		
		// session_start();
		
		if (!empty($_POST['username']) && !empty($_POST['password'])) {
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			// $hashed_password = password_hash($password, PASSWORD_DEFAULT);
		
			// $_SESSION['username'] = $username;
			// $_SESSION['password'] = $password;
		
			$sql = "SELECT * FROM workers WHERE username='$username' and password=md5('$password') limit 1;";
			$query = mysqli_query($conn, $sql);
			
			
			// var_dump($sql);
			// die();
		
			if ($query=="true") {
				header("location:dashboard.php");
			}

		}

		
	}
?>

<html>
<body>
	
	<form method="post">
		<h2>login</h2>
		<div class="input">
			<input type="text" placeholder="username" name="username"><br>
			<input type="password" placeholder="password" name="password"><br>
			<input type="submit" value="login" name="login">
		</div>
	</form>
	<span id="message"></span>
	<script>
		
	</script>
	<?php
		require "php/footer.php";
	?>
</body>
</html>