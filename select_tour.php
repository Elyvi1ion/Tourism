<?php
    session_start();
    require "php/connect.php";
?>









<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Эльбрус</title>

	<link rel="stylesheet" href="css/select_tour.css">



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

  <a href="../profile.php">   <img src="images/ic2.png" width="20px" height="20px"   ></a>

</li>

                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>

            </div>




        </header>


<section id="podr">

<div class="container">

<div class="box122">

<h1> ВОСХОЖДЕНИЕ В МАССИВЕ БЕЛУХИ</h1>
<p>Район горы Белуха очень богат на реки и озера.<br> 
Реки отличаются быстрым течением и имеют множество мест с каскадами,<br>
 а озера — одни из самых живописных и чистых на планете. </p>

</div>



<div class="box1">

<div class="box123">

<h1> Галерея</h1>


</div>





<div class="container">
<img src="images/Foto/1.jpg" width="450" height="400">
<img src="images/Foto/2.jpg" width="450" height="400">
<img src="images/Foto/3.jpg" width="450" height="400">
<img src="images/Foto/4.jpg" width="450" height="400">

</div>


 <div class="card2">
<a href="../Chek_P.php" class="button" onclick="togglePopup()"> <button>Забронировать </button> </a>
</div>






</div>

</section>


<section id="COMMENTS">  
 
  <div class="containerCArd_otz">
  
  
  <div class="bubl">
  <h2 class="text-right">Добавьте отзыв</h2> 
 

<div class="com"> 

<div class="come"> 
<form action="php/send.php" method="post" >

 

 <input type="text" name="text" placeholder="Что вы думаете о туре?">  
 <input type="submit" value="Отправить"> 
 <div class="icon2">
<ul>
<li> <img src="images/photo1.png" width="20px" height="20px"> </li>
<li>  <p> Фото</p></li>
<li>  <img src="images/video1.png" width="20px" height="20px"></li>
<li>  <p> Видео</p></li>
</ul>
</div>
</form> 

 </div>
 </div>
 </div>
 
  <div class="containerCArd_otz">
 <div class="containerCArd_otz1">

  
  
                <?php $koment = mysqli_query($connect,"SELECT * FROM `comments` ORDER BY `timestamp` DESC LIMIT 3") ?>
                <?php while($kom = mysqli_fetch_assoc($koment)){  ?>
				  <div class="bubl">
		     <div class="com1"> 
			 <ol id="com4">   
			  <li> <div class = "avatar"> <img src="images/avatar11.png" width="40px" height="40px"> </div></li>
			 
			  <li><div class = "ava"><?= $kom['ava']  ?> </div>
			 <div class = "login"><?= $kom['login']  ?> </div>
			 <div class = "timestamp"><?= $kom['timestamp']  ?> </div></li>
			</ol>

			 <div class = "text"><?= $kom['text']  ?> </div>
		    </div>
			 <div class="icon2">
<ul>
<li> <img src="images/like1.png" width="20px" height="20px"> </li>
<li>  <p> 51</p></li>
<li>  <img src="images/comment1.png" width="20px" height="20px"></li>
<li>  <p> 3 </p></li>
<li>  <img src="images/share1.png" width="20px" height="20px"></li>
<li>  <p> Поделиться </p></li>
</ul>
		   
             </div>
             </div>
				<?php } ?>
 
  
    </div>
	<button type="submit" value="com_more" name="com_more" 
	class="com_more">Показать все</button>
  
  </div>

</div>
</div>
</section>  

<!--
<section id="COMMENTS">  
  
  <div class="containerCArd_otz">
  
<div class="com"> 
<ul>
<li>  <h2 class="text-right">Добавьте отзыв</h2>  </li>
<li>   ФОРМА КОММЕНТАРИЕВ 


<div class="come"> 
<form action="php/send.php" method="post" >

 <p3><?=$_SESSION['login'] ?></p3> 

  

 

 <input type="text" name="text" placeholder="Оставить комментарий">  
  <input type="submit" value="Отправить"> 


</form> </li>
</ul>

 </div>

  </div>
   <div class="containerCArd_otz">
<hr>
  
                <?php $koment = mysqli_query($connect,"SELECT * FROM `comments` ORDER BY `id`") ?>
                <?php while($kom = mysqli_fetch_assoc($koment)){  ?>
		     <div class="com1"> 
			  <div class = "ava"><?= $kom['ava']  ?> </div>
			 <div class = "login"><?= $kom['login']  ?> </div>
			  <div class = "line"><hr></div>
			 <div class = "text"><?= $kom['text']  ?> </div>
		   
		   
             </div>
				<?php } ?>
 
  
   
  
  </div>

			 </div>
 </section>



-->


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
                       <img src="/images/Icons/inst1.png"  width="40px" height="40px" alt="ic">
                    </a>
               
				 
                    <a href="../index.html">
                       <img src="/images/Icons/vk1.png" width="40px" height="40px" alt="ic">
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