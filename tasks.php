<?php
    require "php/connection.php";
    require "header.php";
    require "menu.php";
    session_start();

    $sql="SELECT * FROM workers join tasks on workers.username=tasks.username where workers.Wid='$_SESSION[userId]'";
    $query=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($query)){?>
        <div class="users">
            <div class="card">
              <!-- <img src="./pic/img1.jpg"> -->
              <h4><?= $row['taskName']?></h4>
              <p><?= $row['username']?></p>
            </div>
        </div>
        <?php
        
    }
    require "footer.php";
?>

