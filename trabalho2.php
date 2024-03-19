<?php
session_start();



if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

  
    if($username === 'admin' && $password === 'password') {
        $_SESSION['logged_in'] = true;
        exit;
    } else {
        $error = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error)) echo "<p>$error</p>"; ?>
    <form method="post" action="">
        <label for="username">Usuário:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
