<?php
    session_start();
    $connect = mysqli_connect('localhost', 'root', '', 'touristpro');



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Эльбрус</title>

	<link rel="stylesheet" href="css/profile1.css">



</head>
<body>



        <header>
           <div class="container1">
                <div class="logo">
                    <a href="../index.php">
                       <img src="images/logo11.png" style="/* width:145px; *//* height:145px; */" alt="logo">
                    </a>
                </div>
<div class="navmenu"style="text-align: center;">
                        <ul id="menu">
                        <li class="active"><a href="about.html">О нас</a></li>
                            <li><a href="search.php">Туры</a></li>

              <li><a href="#YSLUGI">Акции</a></li>
              <li><a href="faq.html">Поддержка</a></li>

                            <li ><a href="contact.html">Контакты</a></li>
                            <li class="last">
<form>
  <a href="php/logout.php" class="logout">   <img src="images/ic2.png" width="20px" height="20px"   ></a>
</form>
</li>

                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>

            </div>




        </header>






 <section id="Profile">

            <div class="container">
              <div class="prof_text">
 <h1 class="text-center">Мой профиль</h1>
 
  </div>
<div class="boxPROF">
  <ul> 
   <li><form>
   
   
   
  <?php
   //Вывод аватарки




  ?>
    <img src="../images/Avatar/1.jpg" width=300px height=300px>  
   
   
   
   
   
    

  </form>
     </li>
    <li>
<ol>

  <li> <p1><?=$_SESSION['name'] ?></p></li>

   <li> <p1><?=$_SESSION['login'] ?></p1></li>

    <li><p1><?=$_SESSION['email'] ?></p1></li>
     
    </ol>   

    </li>
    
      
  
   </div> 
   <div class="boxPROF2">
   <div class="text-left">
   
   
  
   
   
   
   
   <div class="stocks__card-text-container">
                         
                        <p class="stocks__card-description"> Загрузите вашу фотографию
                        </p>
                        <button class="stocks__button-more" id="stocksButton1">П</button>
                    </div>
   
   <div class="stocks__card-more stocks__card-more_hidden" id="stock1">
                    <p class="stocks__card-more-text"> 
					<form action="php/avatarUser.php"  method="post" enctype="multipart/form-data">
					<input name="file" type="file" name="file" id="input__file" class="input input__file" multiple>
   <label for="input__file" class="input__file-button">
     
      <span class="input__file-button-text">Выберите файл</span>
   </label>
                    <input type="submit" value="Отправить">   </p> 
					</form>
                </div>
  
   
   
   
   
    </div>
     </div> 
<div class="boxPROF1">
  <ol>
    <li>
  <p3 class="text-left">Обо мне</p3> </li>
  <hr>
   <li>
  <p1 class="text-left">Заполните, чтобы другие пользователи могли узнать о вас больше.</p1>
   </li>
   </ol>
</div>
 </div>

 </section>


 
    </div>


















<section id="MOI_TURI">
 <div class="container">
<div class="boxMOI_TURI">


<h1> МОИ ЖЕЛАНИЯ</h1>


   <div class="footer-right">

       <a href="#">  <img src="images/plus.png" width="35" height="35"> </a>
        
     

      </div>




</div>

</div>







  </section>
  



  <br>
  <br>
  <br>
<section id="OTZIVI">





 <div class="containerOTZ">

 <ul>
<div class="boxOTZ">
<ol>

<li>  <h1>МОИ ТУРЫ</h1>   </li>
<li>  

   <div class="footer-right">

       <a href="#">  <img src="images/str2.png" width="35" height="35"> </a>
        <a href="#">  <img src="images/str1.png" width="35" height="35"> </a>
     

      </div>

       </li>
</ol>
 </div>
 <div class="boxOTZ1">
<li>  <p> Здесь храняться ваши увлекательные поездки. <br>Хотите оставить отзыв? Или поделиться с друзьями?<br> Можете перейти ниже. <p></li>
</div>
 </ul>



 </div>

<div class="container container__results">
           
			
			<div class="card"> 
			<div class="cardfoto">
			 <img src="images/06-big.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Калининград</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
		
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
				
			<div class="card"> 
			<div class="cardfoto">
			 <img src="images/9.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Санкт-Петербург</h2>
			<p>Город имеет великолепный <br>
			исторический центр, в котором 
			каждое <br>здание является произведением искусства.</p>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
			
			<div class="card"> 
			<div class="cardfoto">
			 <img src="images/img1.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2>Севастополь</h2>
			<p>Уникальный город,<br> находящийся на полуострове, <br>популярный центр любых видов отдыха.  </p>
		
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
        </div>



</div>


  </section>


 

  

</section>
</div>



















 <div class="kontactii">   
<section id="kontacti">

<div class="container">

 
        <div class="h2cent">
      <h2 class="text-center">Подпишитесь на рассылку</h2>
     
    </div>
     <form action="php/subs.php" method="post" >     
             <div class="form-inner">
             <input type="name" name="name" placeholder="Введите своё имя">
             <input type="email" name="email" placeholder="Введите Email">
             <input type="submit" value="Подписаться">
    

    </form>





 </div>
 </div>
 </section>
  </div>
<footer>
            <div class="container1">
			<div class="card_r">
			
			
			<div class="navmenu" style="text-align: center;">
                        <ul id="menu">
                        <li class="active"><a href="about.html">О нас</a></li>
                            <li><a href="search.html">Туры</a></li>

              <li><a href="#YSLUGI">Акции</a></li>

 <li><a href="faq.html">Поддержка</a></li>
                            <li><a href="#kontact">Контакты</a></li>
                            <li class="last">

  <a href="../registrarion.html" class="button1" onclick="togglePopup()">   <img src="images/ic1.png"></a>

</li>

                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>
			
			
			
			
			 </div>
			
			
			
			
			
				
				
				
				
			<div class="card_r1">
	
               
                    <a href="../index.html">
                       <img src="images/Icons/inst1.png" width="40px" height="40px" alt="ic">
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



<script type="text/javascript" src="js/script.js"></script>
<script src="js/stocksScript.js"></script>
</body>
</html>