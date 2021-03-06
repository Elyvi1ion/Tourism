<?php

require "../php/settings.php";
session_start();

//Подключение класса поиска маршрутов
require "../php/select.php";

session_start();
//Сбрасываем записанные в сессию название зон и тура
unset($_SESSION["chosen-tour"]);
unset($_SESSION["chosen-zones"]);
if (isset($_SESSION["login"])) {
    $booking = "..//bookingManage.php";
    $logout = "Выход из аккаунта";
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

	<link rel="stylesheet" href="../css/searchFR.css">
   

</head>
<body>



        <header>
           <div class="container1">
                <div class="logo">
                    <a href="../index.php">
                       <img src="../images/logo11.png" style="/* width:145px; *//* height:145px; */" alt="logo">
                    </a>
                </div>
<div class="navmenu"style="text-align: center;">
                        <ul id="menu">
                        <li class="active"><a href="../about.html">О нас</a></li>
                            <li><a href="../search.php">Туры</a></li>

              <li><a href="#YSLUGI">Акции</a></li>
              <li><a href="../faq.html">Поддержка</a></li>

                            <li ><a href="../contact.html">Контакты</a></li>
                            <li class="last">

  <a href="../profile.php" >   <img src="../images/ic2.png" width="20px" height="20px"   ></a>

</li>

                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>

            </div>




        </header>









<section class="book-form" id="book-form">


	<div class="container">
            <h1 class="results__caption">Поиск маршрутов</h1>
 <form class="search__form" method="get" action="search.php">
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
        <input type="number"  value=""  placeholder="от 1" name="peopleNum">

  </div>
         <div class="inputBox">
        <span>Детей (до 7 лет)</span>
        <input type="number"  placeholder="-" value="" name="childrenNum">

  </div>
  <a href="../rez.html">
   <button class="btn" type="submit" name="search">Найти!</button>
   </a>
</form>





















    </div>
	
	
</section>
   <section class="results results__container" id="Results">
        <div class="container container__results">
            <h1 class="results__caption">Результаты по вашему запросу</h1>
            <?php $tours->touroutput(); ?>
			
        </div>
    </section>







<footer>
            <div class="container1">
			<div class="card_r">
			
			
			<div class="navmenu" style="text-align: center;">
                        <ul id="menu">
                        <li class="active"><a href="about.html">О нас</a></li>
                            <li><a href="search.php">Туры</a></li>

              <li><a href="#YSLUGI">Акции</a></li>

 <li><a href="../faq.html">Поддержка</a></li>
                            <li><a href="../contact.html">Контакты</a></li>
                            <li class="last">

  <a href="../registrarion.html" class="button1" onclick="togglePopup()">   <img src="../images/ic1.png"></a>

</li>

                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>
			
			
			
			
			 </div>
			
			
			
			
			
				
				
				
				
			<div class="card_r1">
	
               
                    <a href="../index.html">
                       <img src="/images/Icons/inst1.png"  width="30px" height="30px" alt="ic">
                    </a>
               
				 
                    <a href="../index.html">
                       <img src="/images/Icons/vk1.png" width="30px" height="30px" alt="ic">
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