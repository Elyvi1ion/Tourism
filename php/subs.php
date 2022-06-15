<?php
session_start();

   require_once 'Connect.php';
 
  $name = $_POST['name'];
  
  $email = $_POST['email'];
  


   var_dump(mysqli_query($connect,"INSERT INTO subs (name, email) VALUES ('$name', '$email')")); 
 
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// ошибки






  header( 'Location: ../profile.php');// Делаем реридект обратно







?>