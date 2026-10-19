<?php
require_once 'db.php';
$user = null;

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Профиль студента</title>
</head>
<body>
    <a href="index.php">Назад к списку</a>
    <hr>
    <?php if ($user): ?>
        <h1>Карточка продукта</h1>
        <p><b>ID:</b> <?php echo $user['id']; ?></p>
        <p><b>наименование:</b> <?php echo $user['title']; ?></p>
        <p><b>цена:</b> <?php echo $user['price']; ?></p>
    <?php else: ?>
        <p>продукт не найден!</p>
    <?php endif; ?>
</body>
</html>