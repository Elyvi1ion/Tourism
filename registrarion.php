<?php
    session_start();
	
	  
?>





<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title>Эльбрус</title>

<link rel="stylesheet" type="text/css" href="css/registrarion1.css">

</head>
<body>

  <div id="popup-bg">
  <div id="popup">
   
    
    <div class="prespect">
       <form action="php/SingIN.php" method="post" enctype="multipart/from-data">
      <h2>
        Авторизация
      </h2>
     
       
      <input type="text" name="login" placeholder="Логин">

        <input type="password" name="password" placeholder="Пароль">

        

       <button> <p>Войти<p> </button>
        <ol>
          <li><p1>Нет Аккаунта?</p1> </li> 

          <li><p1>
        <a href="#" onclick="rollPopup()">Регистрация</a>
      </p1></li> 
     
       </ol>

           

    </form>



    <form action="php/SingUp.php" method="post" enctype="multipart/from-data">
      <h2>
        Регистрация
      </h2>
   
         
      <input type="text" name="name" placeholder="ФИО">

       <input type="text" name="login" placeholder="Логин">

        <input type="password" name="password" placeholder="Пароль">

        <input type="email" name="email" placeholder="E-mail">

         <button> <p>Зарегистрироваться</p> </button>




      <p1>
        Есть Аккаунт?<a href="#" onclick="rollPopup()">Войти</a>
      </p1>
	     <?php

                if ($_SESSION['message']) {

            echo ' <p class="msg"> ' . $_SESSION['message'] .'  </p>';
                }


            unset($_SESSION['message']);

            ?>

    </form>
      
    </div>

  </div>
  </div>

        <header>
            <div class="container1">
                <div class="logo">
                    <a href="../index.html">
                       <img src="../images/logo11.png" style="/* width:145px; *//* height:145px; */" alt="logo">
                    </a>
                </div>
<div class="navmenu"style="text-align: center;">
                        <ul id="menu">
                        <li class="active"><a href="about.html">О нас</a></li>
                            <li><a href="search.html">Туры</a></li>

              <li><a href="#YSLUGI">Акции</a></li>
             

                            <li ><a href="contact.html">Контакты</a></li>
                            <li class="last">

  <a href="../registrarion.php" class= "button1" onclick="togglePopup()">   <img src="../images/ic1.png"  ></a>

</li>

                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>

            </div>



        </header>

<section id="slider">


</section>



<footer>
            <div class="container1">
			<div class="card_r">
			
			
			<div class="navmenu" style="text-align: center;">
                        <ul id="menu">
                        <li class="active"><a href="about.html">О нас</a></li>
                            <li><a href="search.html">Туры</a></li>

              <li><a href="#YSLUGI">Акции</a></li>


                            <li><a href="contact.html">Контакты</a></li>
                            <li class="last">

  <a href="../registrarion.html" class="button1" onclick="togglePopup()">   <img src="images/ic1.png"></a>

</li>

                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>
			
			
			
			
			 </div>
			
			
			
			
			
				
				
				
				
				<div class="card_r">
	
               
                    <a href="../index.html">
                       <img src="images/Icons/inst1.png"  width="40px" height="40px" alt="ic">
                    </a>
               
				 
                    <a href="../index.html">
                       <img src="images/Icons/vk1.png" width="40px" height="40px" alt="ic">
                    </a>
                </div>
</div>
         

<div class="container33">

				<ul>
							<li> <a href="#"> </a><p><a href="#">Copyright © RUS Tourism 
 							2022  Все права защищены  </a> </p>  </li>
								
				</ul>

 	</div>

       </footer>












</body>
<script type="text/javascript" src="js/script.js"></script>

</html>