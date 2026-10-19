<?php 
require_once 'db.php'; 
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Главная страница</title>
</head>
<body>
    <h1>Список продуктов</h1>
    <a href="add.php"><b>Добавить новый продукт</b></a>
    <hr>
    <ul>
        <?php
        while($row = $result->fetch_assoc()) {
            echo "<li>";
            echo "<a href='user.php?id=" . $row['id'] . "'>" . $row['title'] . "</a>";
            echo "</li>";
        }
        ?>
    </ul>
</body>
</html>