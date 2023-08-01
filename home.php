<?
    require "connection.php";
	require "header.php";
    session_start();
    echo "welcome".$_SESSION['username'];
    

?>

<html>

	<body>
		<header>
			<h2>dashboard</h2>
		</header>
		<div class="image">
		<img src="images/evmack.png">
		</div>
        
		<div class="task">
		<h3>task name</h3>
		<?php
			// $sql="select * from tasks";
			// $query=mysqli_query($conn,$sql);

			// echo "$conn";
			// die();

			// while($row=mysqli_fetch_row($query)){
			// 	// echo $row['TaskName'];
			// 	var_dump($row);
			// 	die();
			// }
		?>
		</div>
		<span id="message"></span>
<?php
	require "footer.php";	
?>
	</body>
</html>



