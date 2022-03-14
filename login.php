<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"></link>
    
    <title>Login</title>
</head>
<body>
    <div class="login">
        <form action="testLogin.php" method="POST">
        <input type="email" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="password"placeholder="Password">
        <br><br>
        <button type="submit" name="submit" class="b_input">Login</button>
        </form>
        <hr>
        <br>
       <a href="/loginstudy/form.php"><button>Create new account</button></a>
    </div>
</body>
</html>