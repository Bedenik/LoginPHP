<?php
session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){


        include_once('config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $connection->query($sql);
        if(mysqli_num_rows($result)<1){
            unset($_SESSION['email']) ;
            unset($_SESSION['password'] );
            header("location: login.php");
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("location: success.php");
        }

    }else{
        header('Location:login.php');
    }