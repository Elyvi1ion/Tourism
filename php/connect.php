<?php 

$connect = mysqli_connect('localhost', 'root', '', 'touristpro');

    if (!$connect) {
        die('ERROR connect to DataBase');
    }

?>