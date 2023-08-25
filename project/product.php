<?php
require 'db.php';
require 'index.php';
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($link, $sql);


if(mysqli_num_rows($result) > 0){
$row = mysqli_fetch_assoc($result);


echo "<h1>Страница товара</h1>";
echo "<h2>{$row['name']}</h2>";
echo "<p>Цена: {$row['price']}</p>";
echo "<p>Описание: {$row['info']}</p>";


echo "<form action='купить.php' method='post'>";
    echo "<input type='hidden' name='id' value='{$row['id']}' />";
    echo "<input type='submit' value='Купить' />";
    echo "</form>";
} else {
echo "Товар не найден.";
}

