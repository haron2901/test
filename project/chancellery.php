<?php
global $link;
require('db.php');
require('addFile.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="catalog.php">Каталог</a></li>
            <li><a href="info.php">Контакты</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class="hero">
        <h1>Добро пожаловать в наш магазин</h1>
        <p>Здесь вы можете найти все, что вам нужно.</p>
        <a href="index.php" class="btn">Посмотреть продукты</a>
    </section>
    <?php
    $sql_photo = "SELECT `path` FROM `photos` WHERE id = 3";
    $result_photo = mysqli_query($link,$sql_photo);
    $row_photo = $result_photo->fetch_assoc();


    ?>
    <section class="products">
        <h2>Новые продукты по тегу "концелярия"</h2>
        <div class="product">
            <img src="img/<?php $sql_photo = "SELECT `path` FROM `photos` WHERE id = 6"; $result_photo = mysqli_query($link,$sql_photo);$row_photo = $result_photo->fetch_assoc(); echo $row_photo['path']; ?>" alt="Product 3">
            <h3><?php $sql = "SELECT * FROM `products` WHERE id = 3";$result = mysqli_query($link,$sql);$row = $result->fetch_assoc();echo $row['name'];?></h3>
            <p><?php echo $row['info']?></p>
            <a href="product.php?id=3" id="<?php if(isset($_GET["id"])){$id = $_GET["id"];} $sql = "SELECT id FROM `products` WHERE id = '$id'"; $result = mysqli_query($link,$sql); $row = $result->fetch_assoc(); $id = $row['id']; echo $id;?>   class="btn">Купить</a>
        </div>
    </section>
</main>
<footer>
    <p>© 2023 Все права защищены.</p>
</footer>
</body>
</html>