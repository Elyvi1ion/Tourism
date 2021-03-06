<?php
require "php/settings.php";

//Подключение класса поиска маршрутов
require "php/search.php";

session_start();
//Сбрасываем записанные в сессию название зон и тура
unset($_SESSION["chosen-tour"]);
unset($_SESSION["chosen-zones"]);
if (isset($_SESSION["login"])) {
    $booking = "bookingManage.php";
    $account = "Выход из аккаунта";
    $acc_status = "../php/exit.php";
} else {
    $booking = "../registration/reg.php";
    $account = "Личный кабинет";
    $acc_status = "../registration/reg.php";
}

$tours = new search();
$tours->trimming();
$tours->toursearch();
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Эльбрус</title>

	<link rel="stylesheet" href="css/search.css">
    <script src="js/search.js" defer></script>

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









<section class="book-form" id="book-form">


	<div class="container">
            <h1 class="results__caption">Поиск маршрутов</h1>
 <form class="search__form" method="get" action="search/search.php">
    <div class="inputBox">
        <span>Откуда </span>
        <input type="text" placeholder="Место отправления" value="">

  </div>

    <div class="inputBox">
        <span>Куда </span>
          <select class="search__form-selects" size="1" name="region">
                    <option value="" selected>Выберите регион</option>
                    <option value="Абхазский">Абхазский</option>
                    <option value="Калининградский">Калининградский</option>
                    <option value="Мурманский">Мурманский</option>
                    <option value="Алтайский">Алтайский</option>
                    <option value="Крым">Крым</option>
                </select>
  </div>
      <div class="inputBox">
        <span>Дата выезда</span>
        <input type="date"  value="">

  </div>
      <div class="inputBox">
        <span>Обратно</span>
        <input type="date"  value="">

  </div>
        <div class="inputBox">
        <span>Взрослых</span>
        <input type="number" placeholder="от 1" value="">

  </div>
         <div class="inputBox">
        <span>Детей (до 7 лет)</span>
        <input type="number" placeholder="-" value="">

  </div>
  <a href="../rez.html">
   <button class="btn" type="submit" name="search">Найти!</button>
   </a>
</form>















    </div>
</section>

    <section class="results results__container" id="Results">
        <div class="container container__results">
            <h1 class="results__caption">Туры по городам</h1>
			
			

	<div class="card1"> 
			<div class="cardfoto">
			 <img src="images/06-big.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Калининград</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
			<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
				  
				
	
	<div class="card1"> 
			<div class="cardfoto">
			 <img src="images/9.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Санкт-Петербург</h2>
			<p>Город имеет великолепный <br>
			исторический центр, в котором 
			каждое <br>здание является искусством.</p>
			<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
				
			<div class="card1"> 
			<div class="cardfoto">
			 <img src="images/img1.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Севастополь</h2>
			<p>Уникальный город,находящийся<br> на полуострове,
			популярный<br> центр любых видов отдыха. </p>
			<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
				 </div>
				

        </div>
		 <div class="container container__results">
            <h1 class="results__caption">Отдых на море</h1>
			
			<!--
            	<div class="card"> 
			<div class="cardfoto">
			 <img src="images/sochi.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Сочи</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
				<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
		
             </div> -->
			 		<div class="card1"> 
			<div class="cardfoto">
			 <img src="images/sochi.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Сочи</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи </p>
			<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
             </div>
			 <!--
			 	<div class="card"> 
			<div class="cardfoto">
			 <img src="images/ilta.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Ялта</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
				<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
			
             </div>-->
			 	<div class="card1"> 
			<div class="cardfoto">
			 <img src="images/ilta.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Ялта</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи </p>
			<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
             </div>
			 <!-- 
			 	<div class="card"> 
			<div class="cardfoto">
			 <img src="images/original.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Анапа</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
				<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
             </div>-->
			  	<div class="card1"> 
			<div class="cardfoto">
			 <img src="images/original.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Анапа</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи </p>
			<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
             </div>
			 
        </div>
		 <div class="container container__results">
            <h1 class="results__caption">Горнолыжный отдых</h1>
			
	<div class="card1"> 
			<div class="cardfoto">
			 <img src="images/88.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Белуха</h2>
			<p>Наш легендарный маршрут к подножию Белухи – самой высокой<br> и красивой горы Алтая!</p>
			<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
				  
				
	
	<div class="card1"> 
			<div class="cardfoto">
			 <img src="images/99.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Кавказский хребет</h2>
			<p>Высшая точка Кавказа, России и Европы – гора Эльбрус (5642 м),<br> которую обязан посетить каждый!.</p>
			<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
				  
				
	
	<div class="card1"> 
			<div class="cardfoto">
			 <img src="images/77.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Горный массив Фишт</h2>
			<p>Оштен и Фишт — единственные горы в <br>
			Краснодарском крае и Адыгее, 
			где есть <br>зона вечных льдов.</p>
			<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
				  
				
            
        </div><!-- 
		 <div class="container container__results">
            <h1 class="results__caption">Культурно-познавательные туры</h1>
	
	<div class="card1"> 
			<div class="cardfoto">
			 <img src="images/06-big.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Калининград</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
			<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
		
			
             </div>
				  
				
	
	<div class="card1"> 
			<div class="cardfoto">
			 <img src="images/06-big.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Калининград</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
			<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
			
			
             </div>
	
	<div class="card1"> 
			<div class="cardfoto">
			 <img src="images/06-big.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Калининград</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
			<ul id="dalee">
					<li><span><p1>от 9.500</p1></span></li>
					<li><a href="bron.html"><p1>подробнее</p1></a></li>
					</ul>
			
			
			
             </div>
				  
				
            
        </div>-->
    </section>




























        <!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<div class="b-order-prepare__field" data-qaid="city-dd">
  <div class="js-toggle x-drop-down" data-qaid="dd_widget"><span class="x-drop-down__value b-order-prepare__field">Откуда</span><span class="x-drop-down__arrow"></span><input type="hidden" value="8e1718f5-1972-11e5-add9-005056887b8d">



    <div class="x-drop-down__dropped">
      <div class="x-drop-down__search">
        <div class="x-input x-input_size_s"><input type="text" class="x-input__field" autocomplete="off" value=""></div>
      </div>
      <ul class="x-drop-down__list js-dropdown" style="max-height: 300px;">
        <li class="js-item b-drop-down__list-item b-drop-down__list-item_state_hover">Авангард</li>
        <li class="js-item b-drop-down__list-item">Москва</li>
        <li class="js-item b-drop-down__list-item">Санкт-Петербург</li>
        <li class="js-item b-drop-down__list-item">Крым</li>
        <li class="js-item b-drop-down__list-item">Аджамка</li>
        <li class="js-item b-drop-down__list-item">Ананьев</li>
        <li class="js-item b-drop-down__list-item">Андреевка (Балаклейский р-н)</li>
        <li class="js-item b-drop-down__list-item">Андреевка (Бердянский р-н)</li>
        <li class="js-item b-drop-down__list-item">Андрушевка</li>
        <li class="js-item b-drop-down__list-item">Антоновка (Скадовский р-н)</li>

      </ul>
    </div>


<div class="b-order-prepare__field" data-qaid="city-dd">
  <div class="js-toggle x-drop-down" data-qaid="dd_widget"><span class="x-drop-down__value b-order-prepare__field">Куда</span><span class="x-drop-down__arrow"></span><input type="hidden" value="8e1718f5-1972-11e5-add9-005056887b8d">

    <div class="x-drop-down__dropped">
      <div class="x-drop-down__search">
        <div class="x-input x-input_size_s"><input type="text" class="x-input__field" autocomplete="off" value=""></div>
      </div>
      <ul class="x-drop-down__list js-dropdown" style="max-height: 300px;">
        <li class="js-item b-drop-down__list-item b-drop-down__list-item_state_hover">Авангард</li>
        <li class="js-item b-drop-down__list-item">Авдеевка</li>
        <li class="js-item b-drop-down__list-item">Крым</li>
        <li class="js-item b-drop-down__list-item">Сочи</li>
        <li class="js-item b-drop-down__list-item">Анапа</li>


      </ul>
    </div>

  </div><noscript></noscript></div>
   </div>

   -->
   <div class="cont1">
<footer>

            <div class="container1">
			<div class="card_r">
			
			
			<div class="navmenu" style="text-align: center;">
                        <ul id="menu">
                        <li class="active"><a href="about.php">О нас</a></li>
                            <li><a href="search.php">Туры</a></li>

              <li><a href="#YSLUGI">Акции</a></li>

        <li><a href="../faq.html">Поддержка</a></li>
                            <li><a href="../kontact.html">Контакты</a></li>
                            <li class="last">

  <a href="../registrarion.html" class="button1" onclick="togglePopup()">   <img src="images/ic1.png"></a>

</li>

                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>
			
			
			
			
			 </div>
			
			
			
			
			
				
				
				
				
				<div class="card_r1">
	
               
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
	</div>
       </footer>


</body>
</html>