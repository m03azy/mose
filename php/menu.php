<?php
  // require "header.php";
  require "connection.php";
  // session_start();
// $sql="SELECT * FROM workers JOIN tasks ON workers.username='$_SESSION[userId]'";
  // $data=mysqli_query($conn,"select * from workers");
  // $sql="SELECT * FROM workers join tasks on workers.username=tasks.username where workers.Wid='$_SESSION[userId]'";
  // $query=mysqli_query($conn,$sql);
  // $row=mysqli_fetch_array($query);
?>
<nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="./pic/logo.jpg">
          <span class="nav-item"><?//$row['fname']."".$row['lname'];?></span>
        </a></li>
        <li><a href="dashboard.php">
          <i class="fas fa-id-card"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Message</span>
        </a></li>
        <li><a href="profile.php">
          <i class="fas fa-user"></i>
          <span class="nav-item">profile</span>
        </a></li>
        <li><a href="tasks.php">
          <i class="fas fa-list-alt"></i>
          <span class="nav-item">tasks</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>