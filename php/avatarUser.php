<?php
session_start();

   require_once 'Connect.php';
   
  $login = $_SESSION['login'];
  $avatar = $_FILES['avatar']['name'];
 
 
 
 
$path = "../images/image1.jpg";
move_uploaded_file($_FILES["name"]["tmp_name"], $path);

   var_dump(mysqli_query($connect,"INSERT INTO users1 (login, avatar) VALUES ('$login', '$avatar')")); 
 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// ошибки






  header( 'Location: ../Profile.php');// Делаем реридект обратно







?>

/* 
 move_uploaded_file($_FILES["ava"]["tmp_name"],
                "uploads/" . $_FILES["ava"]["name"]);
				echo "Stored in: " . "uploads/" . $_FILES["ava"]["name"]; */
/* 

   require_once 'Connect.php';
   
  $login = $_SESSION['login'];
  $ava = $_FILES['ava']['name'];
 


   var_dump(mysqli_query($connect,"INSERT INTO avatar_user (login, ava) VALUES ('$login', '$ava')")); 
 

	$path = 'uploads/' . $_FILES['ava']['name'];
    move_uploaded_file($_FILES['ava']['name'], destination: '../' . $path); */
	