<?php
session_start();

   require_once 'Connect.php';
 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $text = $_POST['text'];

   var_dump(mysqli_query($connect,"INSERT INTO feedbackform (name, email, text) VALUES ('$name', '$email', '$text')")); 
 
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// ошибки






  header( 'Location: ../contact.php');// Делаем реридект обратно







?>