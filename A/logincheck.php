<?php 
    session_start();
    $userdata = include("userdata.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $remember = $_POST["remember"];

        if(isset($userdata[$username]) && $userdata[$username]["password"] === $password){
            $_SESSION["login"] = true;
            $_SESSION["username"] = $username;

            if($remember == 1){
                $time = strtotime("+1 hour", time());
                setcookie("saved_user", $username, $time);
                setcookie("password", $password, $time);
            }else{
                setcookie("saved_user", "", time()-3600);
            }
            header("Location: dispatcher.php");
            exit();

        }else{
            echo "Incorrect account or password\n";
            echo "Returning to login page......";
            header("Refresh: 3; url=login.php");
            exit();
        }
    }
?>