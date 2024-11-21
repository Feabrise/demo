<?php
include('database.php');

try {
    $query = "SELECT * FROM products";
    $result = $db->query($query);
} catch (Exception $e) {
    die("Ошибка базы данных: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_main.css">
    <title>Главное меню</title>
</head>
<body>
    <header class="head">
        <p class="log">FeaTECH</p>
    </header>
    <div class="image_1">
    <button class="adv">Купить</button>
    </div>
    <!-- <img class="image_1" src="samsung.png"> -->


    <div class="pay">
        <div class="title">
            <h1>Товары</h1>
        </div>
        <div class="sort">
            <button class="btn" name="smartfon">Смартфоны</button>
            <button class="btn" id="planshet">Планшеты</button>
            <button class="btn" id="nout">Ноутбуки</button>
            <button class="btn" id="chasy">Смарт-часы</button>
            <button class="btn" id="naush">Наушники</button>
        </div>
        <div class="products">
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="buy">
                <div class="product-image"> 
                        <img src="image/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" class="img_p">
                    </div>
                        <div class="prod">
                    <h1 class="type"><?php echo htmlspecialchars($row['type']) . ' ' . htmlspecialchars($row['name']); ?></h1>
                    <p class="desc"><?php echo htmlspecialchars($row['desc']);?></p>
                    <p class="price"><?php echo htmlspecialchars($row['price']);?></p>
                        </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>
