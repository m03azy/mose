<?php
    require "php/connection.php";
    require "header.php";
    require "menu.php";
    // require "css/style.css";

    $stmt="select * from tasks";
    $sql=mysqli_query($conn,$stmt);
    
    echo "<table>
    <tr>
        <th>username</th>
        <th>taskName</th>
        <th>deadline</th>
        <th>taskID</th>
    </tr>";
    while($data=mysqli_fetch_assoc($sql)){?>
        <tr>
        <td><?=$data['username'];?></td>
        <td><?=$data['taskName'];?></td>
        <td><?=$data['date'];?></td>
        <td><?=$data['taskId'];?></td>
        </tr>
    <?php }

?>
</table>