<?
	// require "php/connection.php";
	require "header.php";
	
?>

		<img src="images/evmack.png" alt="no image">
		
		<form method="post" action="login.php">
			<h2>login</h2>
			<?php
    // Check if an error occurred and display the message
    if (isset($_GET['error']) && $_GET['error'] === '1') {
        echo '<p style="color: red;">Incorrect username or password.</p>';
    }elseif (isset($_GET['error']) && $_GET['error'] === '2') {
        echo '<p style="color: red;">please fill both fields.</p>';
    }
    ?>
			<div class="input">
				<input type="text" placeholder="username" name="username"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="submit" value="login" name="login">
			</div>
		</form>
		<span id="message"></span>
	<!-- 	
		<form method="post" action="php/login.php">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">username</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
				<div id="emailHelp" class="form-text"></div>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" name="password">
			</div>
			<button type="submit" class="btn btn-primary" name="login">Submit</button>
		</form>-->

		<?php
			require "footer.php";
		?>
		
	</body>
</html>
<!-- ,4u96d.rP)q$LQf -->