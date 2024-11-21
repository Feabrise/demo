<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style_reg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
    <?php
    include('database.php'); // подключение к бд

    $log = $_POST['log']; // поулчаю логин
    $pass = md5($_POST['pass']); // получаю пароль с шифром

    $result = $db->query("SELECT * FROM users WHERE login='$log' AND pass='$pass'"); // запрос на проверку

    $data = $result->fetch_assoc(); // извлекаем данные из запроса
    
    // сравниваем столбец с ролью
    if ($data['role'] == 'admin') { 
        $db->close();
        header("location: admin.php");
    } else if($data['role'] == 'user') {
        $db->close();
        header("location: mainmenu.php");
    }
    else
    {
        echo '<form class="form_reg" action="auth.php" method="post">
        <h1 class="title">Неверные логин или пароль</h1>
        <button class="btn_reg" name="btn_reg" type="submit" method="post">продолжить</button>
        </form>';
    }
    ?>
</body>
</html>