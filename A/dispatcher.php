<?php
    session_start();

    if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
        header("Location: login.php");
        exit();
    }

    switch($_SESSION["username"]){
        case "admin":
            header("Location: admin.php");
            exit;
        case "teacher":
            header("Location: teacher.php");
            exit;
        case "student":
            header("Location: student.php");
            exit;
        default:
            session_destroy();
            header("Location: login.php");
            exit;
    }
?>