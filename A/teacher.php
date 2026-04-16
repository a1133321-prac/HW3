<?php
    session_start();

    if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true || $_SESSION["username"] !== 'teacher'){
        header("Location: login.php");
        exit;
    }
    $name = $_SESSION["username"];
    $cookie = $_COOKIE["saved_user"];
    echo "<h1>Welcome $name</h1>";
    if(isset($_COOKIE["saved_user"])){
        echo "COOKIE: $cookie<br>";
    }else {
        echo "COOKIE: not set<br>";
    }
?>

<!DOCTYPE html>
<html>
    <img src="./image/teacher.jpg" alt="show error" >
    <form name="logout" method="POST" action="logout.php">
        <button type="submit" >Log Out</button>
    </form>
</html>