<?php
  require "php/connection.php";
  require "header.php";
  session_start();
?>

    <div class="container">
      <?php
        require "menu.php";
      ?>
          
        <section class="main">
          <div class="main-top">
            <h1>tasks</h1>
            <i class="fas fa-user-cog"></i>
          </div>
          
          <?php
            $sql="SELECT * FROM workers join tasks on workers.username=tasks.username where workers.Wid='$_SESSION[userId]'";
              $query=mysqli_query($conn,$sql);
              while($row=mysqli_fetch_array($query)){?>
              <div class="users">
            <div class="card">
              <img src="./pic/img1.jpg">
              <h4><?= $row['taskName']?></h4>
              <p><?= $row['username']?></p>
              <div class="per">
                <table>
                  <tr>
                    <td colspan="2"><span>from: <?=$row['date'];?></span></td>
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
          <?php }
        ?>
        <!-- <section class="attendance"> -->
          <!-- <div class="attendance-list"> -->
            <!-- <h1>Attendance List</h1> -->
            <!-- <table class="table"> -->
              <!-- <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Depart</th>
                  <th>Date</th>
                  <th>Join Time</th>
                  <th>Logout Time</th>
                  <th>Details</th>
                </tr> -->
              <!-- </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Sam David</td>
                  <td>Design</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>3:00PM</td>
                  <td><button>View</button></td>
                </tr>
                <tr class="active">
                  <td>02</td>
                  <td>Balbina Kherr</td>
                  <td>Coding</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td>4:00PM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>Badan John</td>
                  <td>testing</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>3:00PM</td>
                  <td><button>View</button></td>
                </tr>
                <tr>
                  <td>04</td>
                  <td>Sara David</td>
                  <td>Design</td>
                  <td>03-24-22</td>
                  <td>8:00AM</td>
                  <td>3:00PM</td>
                  <td><button>View</button></td>
                </tr> -->
                <!-- <tr >
                  <td>05</td>
                  <td>Salina</td>
                  <td>Coding</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td>4:00PM</td>
                  <td><button>View</button></td>
                </tr>
                <tr >
                  <td>06</td>
                  <td>Tara Smith</td>
                  <td>Testing</td>
                  <td>03-24-22</td>
                  <td>9:00AM</td>
                  <td>4:00PM</td>
                  <td><button>View</button></td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </section>
      </section>
    </div>
  </body>
</html>
