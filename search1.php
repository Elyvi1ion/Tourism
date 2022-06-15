<?php
require "php/settings.php";
session_start();


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
                    <a href="../index.html">
                       <img src="images/logo11.png" style="/* width:145px; *//* height:145px; */" alt="logo">
                    </a>
                </div>
<div class="navmenu"style="text-align: center;">
                        <ul id="menu">
                        <li class="active"><a href="index.html">О нас</a></li>
                            <li><a href="search.html">Туры</a></li>

              <li><a href="#YSLUGI">Акции</a></li>


                            <li ><a href="turi.html">Контакты</a></li>
                            <li class="last">

  <a href="../registrarion.html" class= "button1" onclick="togglePopup()">   <img src="images/ic1.png"  ></a>

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
        <input type="date"  value="" name="dateV">

  </div>
      <div class="inputBox">
        <span>Обратно</span>
        <input type="date"  value="" name="dateO">

  </div>
        <div class="inputBox">
        <span>Взрослых</span>
        <input type="number"  value="" name="peopleNum">

  </div>
         <div class="inputBox">
        <span>Детей (до 7 лет)</span>
        <input type="number"  value="" name="childrenNum">

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
			
			<div class="card"> 
			<div class="cardfoto">
			 <img src="images/06-big.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Калининград</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
			<ul id="dalee">
					<li><a href="index.php"><p>от 9.500</p></a></li>
					<li><a href="bron.html"><p>подробнее</p></a></li>
					</ul>
			
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
			<ul id="dalee">
					<li><a href="index.php"><p>от 15.000</p></a></li>
					<li><a href="bron.html"><p>подробнее</p></a></li>
					</ul>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
			
			<div class="card"> 
			<div class="cardfoto">
			 <img src="images/img1.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2>Севастополь</h2>
			<p>Уникальный город,<br> находящийся на полуострове, <br>популярный центр любых видов отдыха.  </p>
			<ul id="dalee">
					<li><a href="index.php"><p>от 13.000</p></a></li>
					<li><a href="bron.html"><p>подробнее</p></a></li>
					</ul>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
        </div>
		 <div class="container container__results">
            <h1 class="results__caption">Отдых на море</h1>
            	<div class="card"> 
			<div class="cardfoto">
			 <img src="images/sochi.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Сочи</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
			 	<div class="card"> 
			<div class="cardfoto">
			 <img src="images/ilta.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Ялта</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
			 	<div class="card"> 
			<div class="cardfoto">
			 <img src="images/original.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Анапа</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
        </div>
		 <div class="container container__results">
            <h1 class="results__caption">Горнолыжный отдых</h1>
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
			 <img src="images/06-big.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Калининград</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
            
        </div>
		 <div class="container container__results">
            <h1 class="results__caption">Культурно-познавательные туры</h1>
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
			 <img src="images/06-big.jpg" height="250" width="350" alt=" ">
			  </div>
			<h2> Калининград</h2>
			<p>Один из крупнейших городов России,<br> 
			раскинувшийся на берегу Балтийского<br> моря 
			в устье реки Преголи.</p>
			
			<!-- <video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video> -->
			
             </div>
            
        </div>
    </section>













    <section class="results results__container" id="Results">
        <div class="container container__results">
            <h1 class="results__caption">Горящие туры</h1>
            <?php $tours->touroutput(); ?>
        </div>
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

</body>
</html>