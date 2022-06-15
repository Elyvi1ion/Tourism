<?php
require "php/settings.php";

session_start();





if (isset($_SESSION["login"])) {
    $bookingm = "bookingManage.php";
    $account = "Выход из аккаунта";
    $acc_status = "../php/exit.php";
} else {
    header("Location: ../php/nonauth.php");
    $bookingm = "../registration/reg.php";
    $account = "Личный кабинет";
    $acc_status = "../registration/reg.php";
}
//Класс реализующий вывод выбранного ранее маршрута и его данных в страницу бронирования
class booking  extends dbConnect
{
    public $tourid;
    public $chosentour;
    public $region;
    public $zones;
    public $datapohoda;
    public $people;
    public $tourPrice;
    public $searchtour;
    public $searchid;
    public $searchzone;


    function __construct()
    {
        parent::__construct();
        if (!empty($_SESSION['chosen-tour'])) {
            $this->chosentour = $_SESSION['tour'];
            
        } else if($_GET['selected-tobhvcr'])
            {   
                $this->chosentour = $_GET['selected-tour'];
            }
        
           
       
    }

    //Очищает все поля от лишнего
    public function trimming()
    {
        $this->chosentour = filter_var(trim($this->chosentour), FILTER_SANITIZE_STRING);
    }

    //Поиск тура и зон в бд
    function nameSearch()
    {
        $this->searchtour = $this->mysqli->query("SELECT * FROM `tours` WHERE `name` LIKE '%" . $this->chosentour . "%'");
       
        $this->searchid = $this->mysqli->query("SELECT * FROM `tours` WHERE `name` LIKE '%" . $this->chosentour . "%'");
        while ($out = $this->searchid->fetch_assoc()) {
            $this->tourid = $out['id'];
        }
        
        $res = $this->mysqli->query("SELECT * FROM `zone` WHERE `id_t` LIKE '" . $this->tourid . "'");
        while ($resultZone = $res->fetch_assoc()) {
            $this->searchzone[] = $resultZone['name'];
        }
    }

    //Вывод цены
    public function price()
    {
        $res = $this->mysqli->query("SELECT * FROM `tours` WHERE `name` LIKE '%" . $this->chosentour . "%'");
        while ($resultprice = $res->fetch_assoc()) {
            $this->tourPrice = $resultprice['tourprice'];
        }
        echo $this->tourPrice;
    }

    //Вывод найденного тура
    function bookingOutput()
    {
        while ($output = $this->searchtour->fetch_assoc()) {
            echo '<section class="booking booking__container" id="Booking">
            <div class="container">
                <h1 class="booking__main-caption">Данные о заказе</h1>
                <div class="booking__wrapper">
                    <h2 class="booking__captions">Регион:</h2>
                    <p class="booking__infos">' . $output['region'] . '</p>
    
                    <h2 class="booking__captions">Маршрут:</h2>
                    <p class="booking__infos">' . $output['name'] . '</p>
    
    
                    <h2 class="booking__captions">Выбранные зоны:</h2>
                    <div class="booking__zones-container booking__section">
                        <p class="booking__infos booking__zone">' . implode(", ", $this->searchzone) . '</p>
                    </div>
    
                    <h2 class="booking__captions">Предполагаемые даты похода:</h2>
                    <div class="booking__dates-container">
                        <p class="booking__infos booking__date">' . $output['datapohoda'] . '</p>
                    </div>
    
                    <h2 class="booking__captions">Количество человек:</h2>
                    <p class="booking__infos">' . $output['people'] . '</p>
    
    
                    <h2 class="booking__captions">Стоимость:
                        <span class="booking__tour-price">' . $output['tourprice'] . '</span>
                    </h2>
                </div>';
        }
    }
}
$booking = new booking;
$booking->nameSearch();
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
	<title>Эльбрус</title>

	<link rel="stylesheet" href="css/bron.css">



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
              <li><a href="faq.html">Поддержка</a></li>

                            <li ><a href="contacti.html">Контакты</a></li>
                            <li class="last">

  <a href="../registrarion.php" class="logout">   <img src="images/ic2.png" width="20px" height="20px"   ></a>

</li>

                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>

            </div>




        </header>













 
<section id="Turii">

<div class="container">
  <?php $booking->bookingOutput() ?>
 
      <div class="h2cent">
      <h2 class="text-center">Алустон Тур</h2>

<div class="CARD_OTZ">
  
  <div class="card-text">
    <div class="portada1"> </div>
    <div class="title-total">   
      <div class="title1">сложность 2</div>
      <h1>Зоны посещения</h1>
  
  <div class="desc">Плато Чатыр Дага (с посещением пещеры), Демерджи ( с "Долиной приведений") и верхнее плато. 
Радиальный выход на Медведь гору.Экскурсия в парк Айвазовского и экскурсия с дегустацией( по желанию) в Массандру.
Прогулка к водопаду Джур-джур, и вверх по его течению.</div>


   </div>
   
  </div>

  







 </div>

 </div> 
 </div>
</section>









<section id="GALERY">  
  
  
 <div class="containerOTZ">
<div class="boxOTZ">
<ol>


<li>  

   <div class="footer-right">

       <a href="#">  <img src="img/str2.png" width="35" height="35"> </a>
        <a href="#">  <img src="img/str1.png" width="35" height="35"> </a>
     

      </div>

       </li>
</ol>
 </div>
</div>

 
  <div class="container">
  <h2 class="text-right">Галерея</h2>

   
					
						<div class="box1">






<div class="container">
<table>
 
 <tr> <th> </th> 
   <th></th></tr>
 <tr>

  <td>

 <div class= "box4">
						 <ul class="align=left">
						<li><img src="img/kr008.jpg" width="450" height="400"></li>
						<table>

					<td> <li>  <img src="img/kr009.jpg" width="220" height="180"> </li></td>
					<td> <li>  <img src="img/kr010.jpg" width="220" height="180"> </li></td>
						</ul>

					</div>
				</table>
					
		 			
								
	</div> </td>
	 <td>
	 	<div class= "box4"> 
	 		<ul class="align=left">
	 		<table>


					<td> <li>  <img src="img/kr012.jpg" width="220" height="180"> </li></td>
					<td> <li>  <img src="img/kr011.jpg" width="220" height="180"> </li></td>
						

					</div>
				</table>
  						


						<li> <img src="img/kr007.jpg" width="450" height="400"></li>
						
						</ul>
		
 </td>
</table>

</div>
 <div class="containerBRON">
<a href="Chek_P.html" class="knopkaPROSM"><p1>Забронировать</p1> </a>
</div>

</div>
</div>
</section>


  
  </div>

 </section>





















<section id="COMMENTS">  
  
  <div class="container">
  <h2 class="text-right">Отзывы</h2>
<div class="com"> 
<ul>
<li>  <img src="img/Avtr2.png" width="336px" height="250px">  </li>
<li>  <!-- ФОРМА КОММЕНТАРИЕВ -->
<div class="come"> 
<form action="/vendor/send.php" method="post" >

 <p1><?=$_SESSION['login'] ?></p1> 

  

 

 <input type="text" name="text" placeholder="Оставить комментарий">  
  <input type="submit" value="Отправить"> 


</form> </li>
</ul>

 </div>

  </div>
   <div class="container">
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

 </section>


 <div class="kontactii">   
<section id="kontacti">

<div class="container">

 
      <div class="h2cent">
      <h2 class="text-center">Подпишитесь на рассылку</h2>
     
    </div>
                 
                    <div class="form-inner">
                    <input type="text" placeholder="Введите своё имя">
                    <input type="text" placeholder="Введите Email">
                    <input type="submit" value="Подписаться">
    

    </form>




 </div>


</section>
 </div>


</body>
</html>