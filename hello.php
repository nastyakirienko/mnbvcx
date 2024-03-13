<?php
// Заранее заданные логин и пароль (в реальном проекте используйте безопасные методы хранения)
$заданныйЛогин = "user123";
$заданныйПароль = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $введенныйЛогин = isset($_POST["login"]) ? $_POST["login"] : "";
    $введенныйПароль = isset($_POST["password"]) ? $_POST["password"] : "";

    if ($введенныйЛогин === $заданныйЛогин && $введенныйПароль === $заданныйПароль) {
        echo "Добро пожаловать!";
    } else {
        echo "Ошибка входа. Пожалуйста, проверьте логин и пароль.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Система входа</title>
</head>
<body>

<form action="" method="post">
    <label for="login">Логин:</label>
    <input type="text" id="login" name="login" required>

    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Войти">
</form>

</body>
</html>



