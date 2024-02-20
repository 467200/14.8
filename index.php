<!DOCTYPE html>
<html>

<?php
$title = "Белый Лотос";
session_start();
?>

<head>
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style14.css">
    <meta charset="UTF-8">
</head>


<body>
    <header>
        <h1><?php echo $title; ?></h1>
        <header>
            <a href="#">Главная</a>
            <a href="treatments.php">СПА процедуры</a>
            <a href="contacts.php">Контакты</a>
        </header>
    </header>
    <div class="form-container">
        <h2>Пожалуйста, идентифируйтесь</h2>
        <form method="post" action="login.php">
            <label>Логин</label>
            <input type="text" id = "usrname" name="username" placeholder="Введите имя пользователя" required>
            
            <label>Пароль</label>
            <input type="password" id= "password" name="password" placeholder="Введите пароль" required>

            <button type="submit">Подтвердите</button>
        </form>
        <p>У Вас нет аккаунта? <a href="register.php">Зарегистрируйтесь!</a></p>
    </div>

    
    <main>
        <h1>О нас</h1>
        <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c3BhfGVufDB8fDB8fHww"
            width="400" height="200" style="display: block; margin: 0 auto;">
        <p>Белый Лотос– один из крупнейших в Европе cпа центров, расположенный в самом центре города Эвергрин.<br>

            Обладатель ежегодной престижной премии TripAdvisor, Белый Лотос предлагает роскошные спа-процедуры - одно из
            лучших времяпровождений во время посещения Эвергрин. Насладитесь изысканным отдыхом и нашими глубоко
            питательными спа-процедурами, пополните свою умственную, физическую и эмоциональную энергию.<br>
            <br>
            Мы идем в ногу со временем, поэтому, регистрируясь на нашем сайте, Вы сможете получить приятные скидки и бонусы. 
            Пройдите регистрацию, авторизируйтесь и Вы будете переадрессованы на страницу специальных предложений.</p>
    </main>
    <br>
    <hr>
    <footer>
        <span>&copy;&nbsp;Skillfactory</span>
    </footer>
</body>

</html>