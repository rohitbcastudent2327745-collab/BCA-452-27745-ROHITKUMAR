<?php
session_start();

if(isset($_POST['login'])){
    if($_POST['username']=="admin" && $_POST['password']=="admin"){
        $_SESSION['user']="admin";
        header("Location:index.php");
    } else {
        echo "Invalid Login";
    }
}
?>

<form method="post">
<input name="username" placeholder="Username"><br>
<input type="password" name="password" placeholder="Password"><br>
<button name="login">Login</button>
</form>