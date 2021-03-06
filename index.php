
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

	<link rel="stylesheet" href="css/main.css">
	<script src="js/app.js" defer></script>


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

  <a href="../profile.php">   <img src="images/ic2.png"  width="20px" height="20px" ></a>

</li>

                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>

            </div>



        </header>












	<div class="container">
		<section class="gallery">

			<div class="frame">
				<div class="frame__content">
					<h2>Почувствуй мир.</h2>
					<p>О нас</p>
					<p>Компания "Эльбрус" предлагает вам<br>
экскурсионные услуги для частных<br>лиц и бизнеса по РФ</p>
				</div>
			</div>
 <!--
			<div class="frame">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(images/1.jpg)"></div>
				</div>
			</div>
			
				<div class="frame frame_bg">
				<div class="frame__content">
					<video class="frame-media frame-media_right" src="media/video_optimized.mp4" autoplay loop muted></video>
				</div>
			</div>

			
 -->
 	<div class="frame frame_bg">
				<div class="frame__content">
					<div class="frame-media frame-media_right1" style="background-image: url(images/777.jpg)"></div>
				</div>
			</div>
		
			<div class="frame"></div>

			<div class="frame">
				<div class="frame__content text-right">
					<h3>Куда ты хочешь?</h3>
					<p>Россия — страна большая, поэтому определиться с тем,
						<br> куда поехать, — сложно. Курортные города или старинные<br> деревни, отдых на море или поездка в заповедник, подъем<br> в горы или экскурсия по руинам древних городов?</p>
				</div>
			</div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<div class="frame-media frame-media_left" style="background-image: url(images/2.jpg)"></div>
				</div>
			</div>

			<div class="frame"> 	<div class="frame__content3">
					<h2>Ласточкино гнездо</h2>
					<p>Готический замок,<br>
расположенный на отвесной<br> 40-метровой скале мыса<br> Ай-Тодор в посёлке Гаспра<br> Ялтинского городского<br> округа Крыма. </p>

				</div></div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<div class="frame-media frame-media_right" style="background-image: url(images/img1.jpg)"></div>
				</div>
			</div>

			<div class="frame"></div>

			<div class="frame">
				<div class="frame__content text-left">
					<h3>Горы Кавказа</h3>
					<p>Кавказский край богат природными красотами<br> для отдыха, занятий спортом и просто наслаждения. <br>Достопримечательностей так много, что сложно даже <br>предположить их точное число. </p>
				</div>
			</div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<div class="frame-media frame-media_right" style="background-image: url(images/2img.jpg)"></div>
				</div>
			</div>

			<div class="frame">
				<div class="frame__content">
					<video class="frame-media frame-media_left" src="media/video_optimized.mp4" autoplay loop muted></video>
				</div>
			</div>

			<div class="frame"></div>
			<div class="frame"></div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<div class="frame-media frame-media_right" style="background-image: url(images/5.jpg)"></div>
				</div>
			</div>

			<div class="frame frame_bg">
				<div class="frame__content">
					<video class="frame-media" src="media/video_optimized.mp4" autoplay loop muted></video>
				</div>
			</div>

			<div class="frame"></div>
			<div class="frame"></div>


		</section>
	</div>

	<img class="soundbutton paused" src="images/sound.gif" alt="Alt">
	<audio class="audio" src="media/ambient.mp3" loop></audio>

</body>
</html>