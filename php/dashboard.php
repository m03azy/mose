<?
    require "connection.php";
	require "header.php";
    // session_start();
    // echo "welcome".$_SESSION['username'];
    

?>

<html>

	<body>
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
			$sql="select * from tasks";
			$query=mysqli_query($conn,$sql);

			while($row=mysqli_fetch_assoc($query)){
				echo $row['TaskName'];
			}
		?>
		</div>
		<span id="message"></span>
<?php
	require "footer.php";	
?>
	</body>
</html>



