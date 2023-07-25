<?php
	$conn=mysqli_connect("localhost","root","","workers");
	if(!$conn){
		echo "<script>alert('not connected')</script>";
	}

	if(isset($_POST['register'])){
		$fname=$_POST['firstName'];
		$lname=$_POST['lastName'];
		$DOB=$_POST['DOB'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$role=$_POST['role'];
		$password=$_POST['password'];
		$username=$_POST['username'];

		// echo $DOB;
		// die();
		// if(!empty($fname) && !empty($lname) && !empty($DOB) && !empty($phone) && !empty($email) && !empty($role) && !empty($password) && !empty($username)){
		// 	$query="INSERT INTO workers (fname,lname,DOB,phone,email,role,password)values('$fname','$lname','$DOB','$phone','$email','$role','$password')";
		// 	$sql=mysqli_query($conn,$query);
		// 	if(!$sql){
		// 		echo "<script>alert('data not inserted')</script>";
		// 	}
		// }
		// else{
		// 	echo "<script>alert('please fill both fields')</script>";
		// 	echo "<h1>please fill both fields</h1>";
		// 	// die();
		// }

		if(empty($fname) || empty($lname) || empty($DOB) || empty($phone) || empty($email) || empty($role) || empty($password) || empty($username)){
				echo "<h1>please fill both fields</h1>";
			// die();
		}

		$query="INSERT INTO workers (fname,lname,DOB,phone,email,role,password,username)values('$fname','$lname','$DOB','$phone','$email','$role',md5('$password'),'$username')";
		$sql=mysqli_query($conn,$query);
		
		if(!$sql){
			echo "<script>alert('data not inserted')</script>";
		}

	}
?>
<html>
<head>
<style>
  body{background:#aaffdd;
	align-items:center; 
	}
  h1,h2{
	color:bedede;
	font-family:sans-serif;
	align-content:center;
	}
 
  form{margin:150px;
	background:#ffffff;
	min:300px;
	border-radius:4px;
	border:black;
	}
  input{
	padding:10px;
	margin:5px;
	border-radius:4px;
	width:200px;
	}
  footer{background:#aaaaff;
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
<h2>REGISTER NEW MEMBER</h2>
<input type="text" placeholder="first name" name="firstName" id="fname">
<input type="text" placeholder="last name" name="lastName" id="lname">
<input type="date" placeholder="Birth date" name="DOB"  id="DOB">
<input type="text" placeholder="phone number" name="phone"  id="phone">
<input type="email" placeholder="email" name="email" id="email">
<select name="role">
	<option value="">select</option>
	<option value="staff">staff</option>
	<option value="member">member</option>
</select>
<input type="text" name="username" id="username" placeholder="username">
<input type="password" name="password" id="password" placeholder="password">
<br>
<input type="submit" value="register" name="register">
</form>
<span id="message"></span>

<footer>
	<center>all rigth reserved</center>
</footer>

</script>
</body>
</html>