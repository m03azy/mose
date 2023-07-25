<?php
   require "connection.php";
   
   $sql="SELECT * FROM workers";
   $query=mysqli_query($conn,$sql);
   
?>

<html>
<head>
<style>
  body{background:#aaffdd;
	align-content:center; 
	}
  h1,h2{
	color:bedede;
	font-family:sans-serif;
	align-content:center;
	}
  .profile{
	align-content:center;
	font-family:sans-serif;
	font-size:20px;
	}
 
  li{
	font-family:sans-serif;
	font-weigth:2px;
	height:50px;
	display:flex;
	padding-top:2px;
	}
  ul{	
	background-color:#ffffff;
	border-radius:4px;
	height:20pc;
	width:10pc;
	}
  input{
	padding:9px;
	margin-top:5px;
	margin-left:200px;
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
  img{
	heigth:100px;
	width:100px;
	background:#ffffff;
	border-radius:50%;
	margin:5px;
	}
</style>
</head>

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