<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_reg.css">
    <title>Регистрация</title>
</head>
<body>

        <h3 class="log">FeaTECH</h3>
        
    <form action="reg_result.php" class="form_reg" method="post">
        <h1 class="title">Регистрация</h1>
        <h2 class="lp">Логин</h2>
        <input type="text" class="inp" name="log" required>
        <h2 class="lp">Пароль</h2>
        <input type="password" class="inp" name="pass" required>
        <button class="btn_reg" type="submit">зарегистрироваться</button>
        <a href="auth.php" class="a_s">войти</a>
    </form>
</body>
</html>