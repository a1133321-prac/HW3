<?php
    session_start();

    if(isset($_COOKIE["saved_user"])){
        $name = $_COOKIE["saved_user"];
        $password = $_COOKIE["password"];
        echo "The cookie of $name is set<br><br>";
    }else {
        $name = "";
    }

//     if(isset($_SESSION["login"])){
//         echo "<h1>Hello! $name , you already logged in!</h1><br>";
//         echo "<h2>Returning to your page in 3 seconds...</h2>";
//         header("Refresh: 3; url=dispatcher.php");
//         exit();
//     }
// ?>

<!DOCTYPE html>
<html>
    <form name="login" method="POST" action="logincheck.php">
        Username:&nbsp;<input type="text" name="username" placeholder="Enter your name" value="<?=$name?>" required><br>
        Password:&nbsp;<input type="password" name="password" placeholder="Enter your password" value="<?=$password?>" required><br>
        <input type="checkbox" name="remember" value="1" checked> Remember my account
        <button type="submit">Login</button>
    </form>
</html>