<?php
session_start();
require_once 'connect.php';

$username = $_POST['username'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if($password === $password_confirm) {
 $password = md5($password);
 mysqli_query($connect,"INSERT INTO `users` (`id`, `username`, `birthday`, `password`) VALUES (NULL, '$username', '$birthday', '$password')");
 $_SESSION['message'] = 'Регистрация прошла успешно';
 header("Location: index.php");
} else {
    $_SESSION['message'] = 'Пароли не совпадают!';
    header("Location: register.php");
}
?>

