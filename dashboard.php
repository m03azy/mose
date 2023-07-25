<?
    require "connection.php";
    session_start();
        
    $sql="select * from tasks";
    $query=mysqli_query($conn,$sql);
    

?>

<html>
<head>
<style>
  body{background:#aaffdd;
	align-content:center; 
	font-family:sans-serif;
	margin-left:50px;
	}
  h1,h2{
	color:bedede;
	align-content:center;
	}
  .task{	
	background-color:#ffffff;
	border-radius:4px;
	height:10pc;
	width:10pc;
	margin:4px;
	}

  footer{background:#aaaaff;
	max:400px;
	border-radius:4px;
	font-family:callibri;
	}
  
  .img{
	background:#ffffff;
	border-radius:50%;
	float:right;
	}
  header{
	background-color:#aaaaff;
	width:100%;
	}
  .menu{
	border-radius:4px;
	background-color:aabbcc;
	height:300px;
	width:120px;
	}
   li{display:flex;
	}
   li:hover{background-color:#aabbcc;
	    color:blue;
	    width:auto;
	}
   a{
	text-decoration:none;
	}
</style>
</head>

<body>
<center>
<h1>HELLO WORLD</h1>
</center>
<header>
<h2>dashboard</h2>
</header>
<div class="image">
<img src="#">
</div>
<div class="menu">
	<ul>
	<li><a href="#">home</a></li>
	<li><a href="#">task</a></li>
	<li><a href="#">mesages</a></li>
	<li><a href="#">requests</a></li>
	<li><a href="profile.html">profile</a></li>
	</ul>	
</div>
<div class="task">
<h3>task name</h3>
<?php


    while($row=mysqli_fetch_assoc($query)){
        echo $row['TaskName'];
    }
?>
</div>
<span id="message"></span>

<footer>
	<center>all rigths reserved</center>
</footer>
</body>
</html>



