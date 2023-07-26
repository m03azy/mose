<?php
	require "connection.php";
	
	if(isset($_POST['login'])){
		
		session_start();
		
		if (!empty($_POST['username']) && !empty($_POST['password'])) {
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			// $hashed_password = password_hash($password, PASSWORD_DEFAULT);
		
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
		
			$sql = "SELECT * FROM workers WHERE username='$username' and password=md5('$password')";
			$query = mysqli_query($conn, $sql);
		
			if (mysqli_num_rows($query) > 0) {
				header("location:dashboard.php?username=".$_SESSION['username']);
			}
		}
	}
?>

<html>
<head>
<style>
  body{background:aaffdd;
	align-items:center; 
	}
  h1,h2{
	color: #00d;
	font-family:sans-serif;
	align-content:center;
	}
  h2{
	margin-left:350px;
	}
 
  form{
	margin:150px;
	width:400px;
	border-radius:4px;
	border:solid-black;
	heigth:auto;
	margin-left:300px;
	}
  input{
	padding:9px;
	margin-top:5px;
	margin-left:150px;
	border-radius:4px;
	width:300px;
	margin-bottom:5px;
	border:none;
	}
  .input{
	margin-left:100px;
	width:auto;
	border-radius:4px;
	border:solid-black;
	heigth:auto;
	#margin-left,margin-right:20px;
	}
  footer{
	background:#aaaaff;
	max:400px;
	border-radius:4px;
	border:black;
	}
  select{padding:10px;
	margin:5px;
	border-radius:4px;
	width:200px;
	}
</style>
</head>

<body>
<center>
	<h1>HELLO WORLD<h1>
</center>
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
<footer>
	<center>all rigth reserved</center>
</footer>
</body>
</html>