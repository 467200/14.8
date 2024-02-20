<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Спа-салон</title>
        <link rel="stylesheet" href="style14.css">
        <meta charset="utf-8">
    </head>
   <body>
    <header>
        <h1>Белый Лотос</h1>
        <header>
            <a href="treatments.php">СПА процедуры</a>
            <!-- <a href="#">Специальные предложения</a> -->
            <a href="contacts.php">Контакты</a>
            <a href="index.php">Главная</a>

        </header>
    </header>
    <div class="form-container">
    <form>
        <h3 style="text-align: center; color: #1c3247;">Личный кабинет</h3>
        <h2 style="margin: 3px; text-align: center; color:#1c3247; font-size:large; font-weight: bold;"> &#128100;<?= $_SESSION['user']['username'] ?></h2>
        <a href="index.php" class="logout"style="text-align: center; color:#1c3247;">Выйти</a>
    </form>
    </div>
    

       <main>
        <h1>У нас есть для Вас кое-что особенное!</h1>
        <img src="https://images.unsplash.com/photo-1610289982320-3891f7c9fd6d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fHNwYXxlbnwwfHwwfHx8MA%3D%3D" width="400" height="300" style="display: block; margin: 0 auto;">
        <ul>
            <li><strong>Посещение Термального комплекса со скидкой 25% для зарегистрированного пользователя и его гостей.</strong></li><br>
            <li><strong>Day Spa предложение "ВСЕЛЕННАЯ"</strong>
                Продолжительность процедур 2 ч. 15 минут. В предложение включен масляно солевой скраб для тела, релаксирующий массаж всего тела, процедура для лица с использованием кристаллa Gua Sha, Pink Hair & Scalp маска для волос, восстанавливающая процедура для рук. - 120 Евро</li><br>
            <li><strong>Day Spa предложение " ДЛЯ МУЖЧИН".</strong>
                Продолжительность процедур 1ч. 30 минут. В предложение включен тонизирующий массаж спины, релаксирующий массаж стоп и ног, процедура для лица и массаж головы.- 100 Евро</li><br>
            <li><strong>Особая цена в Ваш день рождения.</strong>
                Скидка 5% на любые процедуры из нашего меню</li>   
        </ul> 
        <img src="https://media.istockphoto.com/id/913095166/ru/%D1%84%D0%BE%D1%82%D0%BE/%D0%BC%D0%BE%D0%BB%D0%BE%D0%B4%D1%8B%D0%B5-%D0%B6%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D1%8B-%D0%B2-%D0%B1%D0%B5%D0%BB%D1%8B%D1%85-%D1%85%D0%B0%D0%BB%D0%B0%D1%82%D0%B0%D1%85-%D0%BE%D1%82%D0%B4%D1%8B%D1%85%D0%B0%D1%8E%D1%82-%D0%B2-%D1%81%D0%BF%D0%B0-%D1%86%D0%B5%D0%BD%D1%82%D1%80%D0%B5-%D0%BA%D1%80%D0%B0%D1%81%D0%BE%D1%82%D1%8B.webp?b=1&s=170667a&w=0&k=20&c=xwG1E4h93Pml4Nux87fbrEebmkRTXhzO2tuxyknZUn4=" width="550" height="300" style="display: block; margin: 0 auto;">
    </main>
    <br>
    <hr>
    <footer>
            <span>&copy;&nbsp;Skillfactory</span>
    </footer>
   </body>
   
</html>