
<?php
    session_start();


$connect = mysqli_connect('localhost', 'root', '', 'Bruh_Tourism');

    if (!$connect) {
        die('ERROR connect to DataBase');
    }



?>

<html lang="ru">
<head>
  <title>Админ-панель</title>
  <link rel="stylesheet" href="../css/admin_com.css">
</head>
    <header>
            <div class="container">
           
            <div class="navmenu"style="text-align: center;">
                        <ul id="menu">
                        <li class="active"><a href="adminpanel.php">USERS</a></li>
                            <li><a href="admin_com.php">COMMENTS</a></li>
              <li><a href="#OTZIVI">AVATAR</a></li>
			  <li><a href="#OTZIVI">ZONES</a></li>
              <li><a href="#YSLUGI">MAILING</a></li>
			   <li><a href="#YSLUGI">CHECK</a></li>
              <li><a href="#YSLUGI">TOUR</a></li>
 <li><a href="#YSLUGI">MY_TOUR</a></li>
                            <li ><a href="#kontacti">BRONIROVANIE</a></li>
                            <li class="last">

  <a href="../Profile.php">REGION</a>

</li>

                        </ul>
                    </div>
                
            </div>



        </header> 
<body>
 <div class="container1">
   <div class="container2">
        <a href="logoutAdmin.php" class="logout">Выход</a>
    </div>
<table border='1'>
  <tr>
    
	
    <td>Login</td>
    <td>Text</td>
   
	<td>Удаление</td>
	<td>Изменение</td>
  </tr>
  <?php
 $sql = mysqli_query($connect, 'SELECT `login`,`text` FROM `comments`');  
 while ($result = mysqli_fetch_array($sql)) {
      echo "

      <tr>
	  
	    <td>{$result['login']}</td>
	
      	<td>{$result['text']}</td>


      

	
		
		<td><a href='?del_id={$result['ID']}'>Удалить</a></td> 
		
        <td><a href='?red_id={$result['ID']}'>Изменить</a></td> 

      </tr>"; 

  }
  ?>
</table>
<div class="new_com">
<p><a href="?add=new">Добавить новый комментарий</a></p>
</div>
</div>

</body>
</html>



