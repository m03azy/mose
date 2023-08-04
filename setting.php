<?php
    // require "header.php";
    // require_once "menu.php";
    require "php/connection.php";
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:index.php");
      }

    $sql="update worker set usernme=?"
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


<section class="main">

<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">name</label>
    <input type="text" class="form-control" id="inputEmail4" name="fname">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password">
  </div>
  <div class="col-12">
    <label for="inputEmail4" class="form-label">email</label>
    <input type="email" class="form-control" id="inputAddress" placeholder="@gmail"name="password">
  </div>
  <div class="col-12">
    <label for="inputphone" class="form-label">phone</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="phone"name="phone">
  </div>
  <div class="col-md-6">
   
  <div class="col-12">
    <input type="submit" class="btn btn-primary" value="edit">
  </div>
</form>

<!-- <form action="" method="post"> -->
    <!-- <input type="text" placeholder="username" name="username"> -->
    <!-- <input type="text" placeholder="first name" name="fname">
    <input type="text" placeholder="last name" name="lname">
    <input type="password" placeholder="password" name="password">
    <input type="text" placeholder="phone number" name="phone">
    <input type="email" placeholder="email" name="email">
    <input type="date" placeholder="" name="DOB">
    
    <input type="submit" value="edit" name="edit"> -->
    <?php
        if(isset($_POST["edit"])){
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $DOB=$_POST['DOB'];
            $sql="update workers set password=md5('$password'),phone='$phone',DOB='$DOB',email='$email',lname='$lname',fname='$fname' where username='$_SESSION[username]'";
            $query=mysqli_query($conn,$sql);
            if($query){
                echo "<script>alert('data changed')</script>";
                header("location:dashboard.php");
            }
        }

    ?>
</form>

</section>
<?php
require "footer.php"
?>