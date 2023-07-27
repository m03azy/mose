<?php
    
    require "connection.php";
    // require "php/header.php";
    session_start(); 
    if(isset($_POST['login'])){
           
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            $password_md5=md5($password);
            // echo $password_md5;
            // die();
        
            $sql = "SELECT * FROM workers WHERE username='$username' and password='$password_md5'";
            $query = mysqli_query($conn, $sql);
                
            // echo $sql;
            // die();
        
            if (mysqli_num_rows($query)>0) {
                $row=mysqli_fetch_assoc($query);
                $_SESSION['userId']=$row['Wid'];
               
                if($row['username']==$username && $row['password']==$password_md5){

                    header("location:dashboard.php");
                }
            }
            else{
                echo "<script>incorrect username/password</script>";
            }

        }elseif(empty($_POST['username']) && empty($_POST['password'])){
            echo "<script>alert(please fill both fields)</script>";
        }
           
        
    }

?>