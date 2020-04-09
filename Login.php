<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Добро пожаловать, что бы зайти на сайт введите, пожалуйста, ваш логин и пароль</h1>

<!-- Форма авторизации -->

<form class="form" action = "main.php" method="post">
<label>Login: </label>
    <input type="text" name="login" placeholder = "Your login"><br/>
<label>Password: </label>
    <input type="text" name="password" placeholder =  "Your password"<br/>
    <!--<input type="submit" name="send" value="LOGIN" class="button">-->
    <button>LOGIN</button>
</form>
</body>
</html>