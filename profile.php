<?php
  require "php/connection.php";
  // require "header.php";
  session_start();
  if(!isset($_SESSION['username'])){
    header("location:index.php");
  }

  $sql="SELECT * FROM workers WHERE username='$_SESSION[username]'";
  $query=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($query);
?>

    <div class="container">
      <?php
        // require "menu.php";
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Attendance Dashboard | By Code Info</title>
  <link rel="stylesheet" href="css/sample.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="container">
  <nav>
      <ul>
        <li><a href="images/evmack.png" class="logo">
          <img src="./pic/logo.jpg">
          <span class="nav-item"></span>
        </a></li>
        <li><a href="dashboard.php">
          <i class="fas fa-id-card"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="message.php">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Message</span>
        </a></li>
        <li><a href="tasks.php">
          <i class="fas fa-list"></i>
          <span class="nav-item">tasks</span>
        </a></li>
        <li><a href="profile.php">
          <i class="fas fa-user"></i>
          <span class="nav-item">profile</span>
        </a></li>
        <li><a href="setting.php">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
          
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
			
			<div class="profile"><?=$row['username']?></div>
      <ul class="list-group list-group-flush">
				<li class="list-group-item">name: <?=strtoupper($row['fname'])." ".strtoupper($row['lname']);?></li>
				<li class="list-group-item">email: <?=$row['email'];?></li>
				<li class="list-group-item">phone: <?=$row['phone'];?></li>
				<li class="list-group-item">birthdate: <?=$row['DOB'];?></li>
				<li class="list-group-item">role: <?=$row['role'];?></li>
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
    </div>
    <?php
      require "footer.php";
    ?>
  </body>
</html>
