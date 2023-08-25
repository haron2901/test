<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>

<h2>Регистрация</h2>
<form action="regestration.php" method="POST">
    <label for="username">Имя пользователя:</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password"><br>

    <input type="submit" value="Зарегистрироваться">
</form>
<?php
require 'db.php';



$username = $_POST['username'];
$password = $_POST['password'];

// Проверка, существует ли пользователь с таким именем
$query = "SELECT * FROM users WHERE username = '$username'";
$result = $link->query($query);

if ($result->num_rows > 0) {
    echo "Пользователь с таким именем уже существует";
    exit();
}
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if ($link->query($query) === TRUE) {
    echo "Регистрация успешна";
} else {
    echo "Ошибка регистрации: " . $link->error;
}
?>
</body>
</html>