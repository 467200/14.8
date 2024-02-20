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
            <a href="#">СПА процедуры</a>
            <a href="contacts.php">Контакты</a>

        </header>
    </header>
    
       <main>
        <h3>Расслабьте свое тело и приобретите хорошее настроение!</h3>
        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8c3BhfGVufDB8fDB8fHww" width="400" height="200" style="display: block; margin: 0 auto;">
        <p>Процедуры СПА Белый Лотос объединяют ароматерапию, талассотерапию и фитотерапию с лучшими древними и современными методами лечения и релаксации со всего мира. 
            Знания и принципы, заложенные в концепции процедур Белый Лотос и методы, применяемые специалистами нашего СПА обеспечивают исключительное качество обслуживания 
            гостей - внимательный и индивидуальный подход к каждому!</p>
        <h2>Мы предлагаем следующие процедуры:</h2>
            <ul>
                <li><strong>Ароматерапевтический массаж.</strong>
                    Общий и глубоко расслабляющий массаж тела с использованием эфирных масел, которые подобраны специально для Вас - 70 Евро</li>
                <li><strong>Восстанавливающий массаж.</strong>
                    Этот массаж специально создан для снятия мышечного напряжения и расслабления мышц - 80 Евро</li>
                <li><strong>Шведский массаж.</strong>
                    Классический массаж тела, который стимулирует кровообращение - 70 Евро</li>
                <li><strong>Массаж для лица с эффектом лифтинга.</strong>
                    Эффективная процедура для лица с эффектом лифтинга, основанная на последних технологиях - 100 Евро</li>   
                <li><strong>Омолаживающая процедура для лица.</strong>
                    Холистическая процедура по уходу за лицом для восстановления сияния и питания кожи. - 130 Евро</li>
                <li><strong>Массаж ступней.</strong>
                   Глубокий массаж ступней и проработка специальных точек - 40 Евро</li>
                <li><strong>Массаж головы.</strong>
                   Расслабляющий массаж, снимающий стресс и напряжение - 50 Евро</li>
                <li><strong>Термальный комплекс.</strong>
                   Посещение комплекса с тремя видами бань, бассейном и джакузи (цена в час) - 20 Евро</li>
                    </ul>

    </main>
    <br>
    <hr>
    <footer>
            <span>&copy;&nbsp;Skillfactory</span>
    </footer>
   </body>
   
</html>