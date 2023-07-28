<?php
	   require "connection.php";
	
	session_start();

   $username = mysqli_real_escape_string($conn, $_SESSION['username']);
   $sql="SELECT * FROM workers where username='$username'";
   $query=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($query);
   
?>

<html>

<body>
	<?php
		require "header.php";
		require "menu.php";
	?>
	<center>
		<h1>profile<h1>
	</center>

	<span id="message"></span>

	<section class="main">
        <div class="main-top">
          <!-- <h1></h1> -->
          <i class="fas fa-user-cog"></i>
        </div>
        <div class="users">
          <div class="card">
            <!-- <img src="./pic/img1.jpg"> -->


			
			<img src="#">
			<div class="profile"><?=$row['username']?></div>
			<ul>
				<li>name: <?=strtoupper($row['fname'])." ".strtoupper($row['lname']);?></li>
				<li>email: <?=$row['email'];?></li>
				<li>phone: <?=$row['phone'];?></li>
				<li>birthdate: <?=$row['DOB'];?></li>
				<li>role: <?=$row['role'];?></li>
			</ul>
        <?php
        //   $sql="SELECT * FROM workers join tasks on workers.username=tasks.username where workers.Wid='$_SESSION[userId]'";
        //     $query=mysqli_query($conn,$sql);
        //     while($row=mysqli_fetch_array($query)){?>
            <h4><?// $row['taskName']?></h4>
            <p><?// $row['username']?></p>
            <div class="per">
              <table>
                <tr>
                  <!-- <td colspan="2"><span>from: <?//=$row['date'];?></span></td> -->
                  <!-- <td><span>87%</span></td> -->
                </tr>
                <!-- <tr>
                  <td>Month</td>
                  <td>Year</td>
                </tr> -->
              </table>
            </div>
            <!-- <button>Profile</button> -->
          </div>
        <?php //}
       ?>
      </section>
    </section>

	<footer>
		<?php
			require "footer.php";
		?>
	</footer>
</body>
</html>