<?php
    require "php/connection.php";
    require "header.php";
    // require "menu.php";
    // require "css/style.css";

    $stmt="select * from workers";
    $sql=mysqli_query($conn,$stmt);
    
    echo "
    <div class='container'> ";
    echo "<table border='1'>
    <tr>
        <th>wid</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>DOB</th>
        <th>phone</th>
        <th>email</th>
        <th>role</th>
        <th>password</th>
        <th>username</th>
    </tr>";
    while($data=mysqli_fetch_assoc($sql)){?>
        <tr>
        <td><?=$data['Wid'];?></td>
        <td><?=$data['fname'];?></td>
        <td><?=$data['lname'];?></td>
        <td><?=$data['DOB'];?></td>
        <td><?=$data['phone'];?></td>
        <td><?=$data['email'];?></td>
        <td><?=$data['role'];?></td>
        <td><?=$data['password'];?></td>
        <td><?=$data['username'];?></td>
        </tr>
    <?php }

?>

</table>
<br>
<a href="viewtask.php">tasks</a>
<a href="register.php">add member</a>
<a href="logout.php">logout</a>

</div>