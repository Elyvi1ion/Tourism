<?php
session_start();
require_once 'connect.php';


$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];

 
$password = md5($password);
mysqli_query($connect,"INSERT INTO `users1` (`id`, `name`, `login`, `password`, `email`) VALUES (NULL, '$name', '$login','$password', '$email')");



$_SESSION['message'] = 'Регистрация прошла успешно' ;
    header( 'Location: ../Registrarion.php');


?>


