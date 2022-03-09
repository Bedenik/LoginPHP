<?php
    if(isset($_POST['submit'])){
        include_once('config.php');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = mysqli_query($connection,"INSERT INTO users(name,email,password)  VALUES ('$name','$email','$password')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"></link>
    <title>SignUP form</title>
</head>
<body>
        <form action="form.php" method="POST" class="login">
         <fieldset>
            <legend><b>Sign Up</b></legend>
            <div class="inputBox">
                <input placeholder ="name" type="text" name="name" id="name" class="InputInfo" required>
            </div>
            <br>
            <div class="inputBox">
                <input placeholder ="email" type="email" name="email" id="email" class="InputInfo" required>
            </div>
            <br>
            <div class="inputBox">
                <input placeholder ="password" type="password" name="password" id="password" class="InputInfo" required>
            </div>
            <br>
            <hr>
            <br>
         <button type="submit" name="submit" class="btn">Sign Up</button>
         </fieldset>
            
        </form>
</body>
</html>