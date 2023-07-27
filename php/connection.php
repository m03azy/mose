<?php
    $conn=mysqli_connect("localhost","root","","workers");

    if(!$conn){
        echo "<script>alert('not connected ')</script>";
    }
?>