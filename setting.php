<?php
    require_once "menu.php";
    require "php/connection.php";
    require "header.php";

    $sql="update worker set usernme=?"
?>
<form action="" method="post">
    <i>edit</i>
    <input type="text" placeholder="username" name="username">
    <input type="text" placeholder="username" name="username">
    <input type="text" placeholder="username" name="username">
    <input type="text" placeholder="username" name="username">
    <input type="submit" value="edit" name="edit">
</form>