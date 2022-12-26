<?php
    $username;
    $password;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <input id="username" type="text" name="username" placeholder="Username">
        <input id="password" type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
    <?php
    session_start();
    if(isset($_POST['username']) && isset($_POST['password'])){
        $ufp = fopen('username.txt', 'r');
        $pfp = fopen('password.txt', 'r');
        $username = fread($ufp, filesize('username.txt'));
        $password = fread($pfp, filesize('password.txt'));    
        fclose($ufp);
        fclose($pfp);
        if ($username == $_POST['username'] && $password == $_POST['password']) {
            echo 'all right';
        }
    }

    ?>
</body>
</html>

