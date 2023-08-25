 <!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>вход</title>
</head>
<body>
<form method="post" action="login.php">
    <input type="text" name="login" placeholder="Логин" ><br>
    <input type="password" name="password" placeholder="Пароль" ><br>
    <input type="submit" value="Войти">
</form>
<?php
global $link;
require 'db.php';

$login = $_POST['login'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$login' AND password='$password'";

$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) == 1) {
    echo "Вы успешно вошли на сайт!";
} else {
    echo "Неправильный логин или пароль.";
}

?>


</body>
</html>