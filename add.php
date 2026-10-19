<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $conn->real_escape_string($_POST['products_name']);
    $price = $conn->real_escape_string($_POST['products_price']);

    if (!empty($title) && !empty($price)) {
        $sql = "INSERT INTO products (title, price) VALUES ('$title', '$price')";
        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: green;'>продукт добавлен!</p>";
        } else {
            echo "Ошибка: " . $conn->error;
        }
    } else {
        echo "<p style='color: red;'>Заполните все поля!</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Добавить продукт</title>
</head>
<body>
    <a href="index.php">Назад к списку</a>
    <hr>
    <h1>Форма добавления нового продукта</h1>
    <form action="add.php" method="POST">
        <label>Имя продукта:</label><br>
        <input type="text" name="products_name"><br><br>
        <label>price:</label><br>
        <input type="price" name="products_price"><br><br>
        <input type="submit" value="Сохранить в БД">
    </form>
</body>
</html>