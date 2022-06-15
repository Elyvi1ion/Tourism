<?php
session_start();

   require_once 'Connect.php';
    require_once 'settings.php';
  $login = $_SESSION['login'];
  
  $tour_name = $_SESSION['chosen-tour'];
  
  $price = $_SESSION['tourprice'];


   var_dump(mysqli_query($connect,"INSERT INTO booking (login, text) VALUES ('$login', '$text')")); 
 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// ошибки






  header( 'Location: ../index.php');// Делаем реридект обратно







?>