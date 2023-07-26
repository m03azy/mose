<?php
   	require "connection.php";
	require "header.php";
   
   $sql="SELECT * FROM workers";
   $query=mysqli_query($conn,$sql);
   
?>

<html>

<body>
	<center>
<h1>HELLO WORLD<h1>
</center>
<div class="profile">profile</div>
<img src="#">
<ul>
	<li>name:#######</li>
	<li>email:#######</li>
	<li>phone:#######</li>
	<li>birthdate:#######</li>
	<li>role:#######</li>
</ul>
<span id="message"></span>

<footer>
	<center>all rigths reserved</center>
</footer>
</body>
</html>