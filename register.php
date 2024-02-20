<!DOCTYPE html>
<html>
<?php
session_start();
$title = "Белый Лотос";
?>

<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style14.css">
    <meta charset="utf-8">
</head>

<body>
<div id="registration-container"class="form-container">
<h2>Форма регистрации</h2>
<form method="post" action="signup.php">
    <label>Имя пользователя</label>
    <input type="text" name="username" placeholder="Введите имя пользователя"required><br>

    <label>Дата рождения</label>
    <input type="date" id= "birthday" name="birthday" placeholder="Введите дату рождения" required><br>
    
    <label>Пароль:</label>
    <input type="password" name="password" placeholder="Введите пароль" requiredrequired><br>
    
    <label>Подтверждение пароля</label>
    <input type="password" id= "password" name="password_confirm" placeholder="Подтвердите пароль" required><br>

    <button type="submit">Зарегистрироваться</button>
</form>
    
        <?php
        if ($_SESSION['message']){
            echo '<p class = "msg">' . $_SESSION['message'] . ' </p';
        }
        unset ($_SESSION['message']);
        ?> 
    

    <p> У Вас уже есть аккаунт? <a href="index.php">Войдите в свой аккаунт</a></p>

</div>

</body>

</html>
