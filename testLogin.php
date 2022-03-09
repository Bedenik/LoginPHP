<?php
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){


        include_once('config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $connection->query($sql);

        if(mysqli_num_rows($result)<1){
            header("location: logiin.php");
        }else{
            header("location: success.php");
        }

    }else{
        header('Location:login.php');
    }