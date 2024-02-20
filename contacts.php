<!DOCTYPE html>
<html>
<?php
session_start();
$loggeduser;

if (isset($_SESSION["user"])) {
    $loggeduser = $_SESSION["user"];

?>
    <div class="form-container">
    <form>
        <h3 style="text-align: center; color: #1c3247;">Личный кабинет</h3>
        <h2 style="margin: 3px; text-align: center; color:#1c3247; font-size:large; font-weight: bold;"> &#128100;<?= $_SESSION['user']['username'] ?></h2>
        <a href="index.php" class="logout"style="text-align: center; color:#1c3247;">Выйти</a>
    </form>
    </div>
<?php
}
?>
    <head>
        <title>Спа-салон</title>
        <link rel="stylesheet" href="style14.css">
        <meta charset="utf-8">
    </head>
   <body>
    <header>
        <h1>Белый Лотос</h1>
        <header>
            <a href="index.php">Главная</a>
            <a href="treatments.php">СПА процедуры</a>
            <a href="#">Контакты</a>

        </header>
    </header>
    <main>
        <h3>Контакты</h3>
        <img src="https://images.unsplash.com/photo-1560932992-a93e9ca8a0c9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHNwYXxlbnwwfHwwfHx8MA%3D%3D" width="300" height="400" style="display: block; margin: 0 auto;">
        <address>
            190000, г.Эвергрин,<br>
            Ул. Центральная, д.25<br>
            тел. +72 5475 5632<br>
            
        </address>        
    </main>
    <br>
    <hr>
    <footer>
            <span>&copy;&nbsp;Skillfactory</span>
    </footer>
   </body>
   
</html>