<?php

require "php/connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Эльбрус</title>

	<link rel="stylesheet" href="css/contact.css">



</head>
<body>


        <header>
           <div class="container1">
                <div class="logo">
                    <a href="../index.html">
                       <img src="images/logo11.png" style="/* width:145px; *//* height:145px; */" alt="logo">
                    </a>
                </div>
<div class="navmenu"style="text-align: center;">
                        <ul id="menu">
                        <li class="active"><a href="about.html">О нас</a></li>
                            <li><a href="search.php">Туры</a></li>

              <li><a href="#YSLUGI">Акции</a></li>
            

                            <li ><a href="contact.html">Контакты</a></li>
                            <li class="last">

  <a href="../registrarion.php">   <img src="images/ic1.png" width="20px" height="20px"   ></a>

</li>

                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>

            </div>




        </header>


<section id="contact">

<div class="container">
<div class="cont_text">
<h1>Свяжитесь с нами</h1>
<p>Здесь вы можете получить больше информации или получить ответы на интересующие вас вопросы.</p>


</div>	
<div class="cont_card">


<div class="tel_card">
<p>+7 (933) 134-60-82</p>
<p>+7 (965) 926-30-57</p>
</div>	


<div class="email_card">
<p>rus-tourism@mail.ru</p>
<p>info-tourism@gmail.ru</p>

</div>	

<div class="adress_card">
<p>Россия, г. Грозный, Тихая ул., д. 3</p>
<p>Россия, г. Железногорск, Ленинская ул., д. 5</p>

</div>	
</div>	



<div class="cont_card">




<form class="message__form" action="php/feedbackform.php" method="post">




                    <input type="name" name="name" placeholder="Введите своё имя">
                    <input type="email" name="email" placeholder="Введите Email">
					<input type="text" name="text" placeholder="Введите ваше сообщение">

                     <button class="btn" type="submit" name="search">Отправить</button>
    

    

</form>


	
</div>	










</div>	









</div>	

</section>







<footer>
            <div class="container1">
			<div class="card_r">
			
			
			<div class="navmenu" style="text-align: center;">
                        <ul id="menu">
                        <li class="active"><a href="about.html">О нас</a></li>
                            <li><a href="search.html">Туры</a></li>

              <li><a href="#YSLUGI">Акции</a></li>


                            <li><a href="#kontacti">Контакты</a></li>
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
</html>