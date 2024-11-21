<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_reg.css">
    <title>Регистрация</title>
</head>
<body>
<?php
include('database.php');

$log = $_POST['log'];
$pass = md5($_POST['pass']);

$sql = "INSERT INTO users (login, pass) VALUES ('$log', '$pass')";

if ($db->query($sql) === TRUE) {
    $db->close();
    echo '<form class="form_reg" action="auth.php" method="post">
    <h1>Регистрация успешна!</h1>
    <button class="btn_reg" name="btn_reg" type="submit" method="post">продолжить</button>
    </form>';
    if (isset($_POST['btn_reg']))
    { 
        $db->close();
        header("Location: /auth.php");
    }
} else {
    echo "Ошибка: " . $db->error; 
}
?>
</body>
</html>
