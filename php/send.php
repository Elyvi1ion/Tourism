<?php
session_start();

   require_once 'Connect.php';
   
  $login = $_SESSION['login'];

  $text = $_POST["text"];



   var_dump(mysqli_query($connect,"INSERT INTO comments (login, text) VALUES ('$login', '$text')")); 
 
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// ошибки






  header( 'Location: ../Select_tour.php');// Делаем реридект обратно







?>