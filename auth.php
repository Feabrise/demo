<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_auth.css">
    <title>Авторизация</title>
</head>
<body>

        <h3 class="log">FeaTECH</h3>

<form action="auth_result.php" class="form_auth" method="post">
        <h1 class="title">Вход</h1>
        <h2 class="lp">Логин</h2>
        <input type="text" class="inp" name="log" required>
        <h2 class="lp">Пароль</h2>
        <input type="password" class="inp" name="pass" required>
        <button class="btn_reg" type="submit">войти</button>
        <a href="index.php" class="a_s">зарегистрироваться</a>
    </form>
</body>
</html>