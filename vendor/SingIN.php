<?php

 
session_start();
require_once 'connectIN.php';
$login = $_POST['login'];
$password = $_POST['password'];

$error_fields = [];

if ($login === '') {
    $error_fields[] = 'login';
}

if ($password === '') {
    $error_fields[] = 'password';
}

if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}

$password = md5($password);

$check_user = mysqli_query($connect, "SELECT * FROM `users1` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    /*$_SESSION['users1'] = [
        "id" => $user['id'],
        "name" => $user['name'],
        "login" => $user['login'],
        "email" => $user['email'],

    ];*/
    $_SESSION['login']=$user['login'];
    $_SESSION['name']=$user['name'];
    $_SESSION['email']=$user['email'];
   /* $_SESSION['ava']=$user['ava'];*/



header( "location: ../Profile.php");

} else { 
$_SESSION['message'] = 'Не верный логин или пароль' ;
header("location: ../Registration.php");
}





?>





