<?php 
    require "../includes/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title> О нас</title>
 <!-- Bootstrap 4 cdn CSS -->
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

 <!-- link to css -->
<link rel="stylesheet" type="text/css" href="../css/about_style.css">
<!-- Jquery added for some manipulations with images -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="../scripts/about.js"></script>
</head>
<body>
 <?php include "../includes/navbar.php"; ?>


  <!-- After our navbar we have block of photo -->
<section id="main_photo" class="main_photo">
	<div class="photo">
		<img src="https://img-fotki.yandex.ru/get/102548/2008163.34/0_113259_72258780_orig"  alt="placeholder 960" class='img-fluid w-100' />
	</div>
</section>

<!-- Section to conact us now -->
<section id="call" class="call">
	<div class="container">
		<div class="row">
			 <div class="phone d-flex ml-auto mr-auto">
			 	<div class="phone__text">
                 Call us now to
                 <!-- span to change color of words -->
                 	<span class="gold">Get more info</span>
                </div> 

                <div class = "phone__number">
                       8-747-452-08-73
                </div>
			 </div>	
		</div>
	</div>
</section>
<br>
<!-- section about our company -->
<section id="company" class="company">
	<div class="container">
		<div class="row">
			<center>
				<div class="slogan">
					<h3 class="gold">We deliver a piece of your immunity</h3>
				</div>
				<div class="desc col-lg-6">
					<p> Our products are manufactured in the Zhambyl region at the foot of the Tien Shan Mountains, where clean air and mountain nature provide high-quality feed for our cows.
					</p>
				</div>
			</center>
		</div>
	</div>
</section>
<br>

<!-- section about skills -->

	<div class="container">
		<div class="row">

			<div class="col-lg-4 left up">
				<center>
				  <!-- Bootstrap icons used -->
				  <svg class="bi bi-bucket green" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M8 1.5A4.5 4.5 0 003.5 6h-1a5.5 5.5 0 1111 0h-1A4.5 4.5 0 008 1.5z" clip-rule="evenodd"/>
				  <path fill-rule="evenodd" d="M1.61 5.687A.5.5 0 012 5.5h12a.5.5 0 01.488.608l-1.826 8.217a1.5 1.5 0 01-1.464 1.175H4.802a1.5 1.5 0 01-1.464-1.175L1.512 6.108a.5.5 0 01.098-.42zm1.013.813l1.691 7.608a.5.5 0 00.488.392h6.396a.5.5 0 00.488-.392l1.69-7.608H2.624z" clip-rule="evenodd"/>
				  </svg>
								
				<h3 class="type" class="green">Production</h3>
				

				<p>Our business is built on good relations with our customers, so we will prepare your orders in the early morning</p>
				</center>
			</div>
			

			<div class="col-lg-4 left up">
				<center>

					<svg class="bi bi-cursor green" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 01.103.557L8.528 15.467a.5.5 0 01-.917-.007L5.57 10.694.803 8.652a.5.5 0 01-.006-.916l12.728-5.657a.5.5 0 01.556.103zM2.25 8.184l3.897 1.67a.5.5 0 01.262.263l1.67 3.897L12.743 3.52 2.25 8.184z" clip-rule="evenodd"/>
					</svg>
				
					<h3 class="type"  class="green">Delivery</h3>
				
				
				<p>We guarantee you to deliver your order before noon, the products we made this morning.</p>
				</center>
			</div>
		

			<div class="col-lg-4 up">
				<center>
				<svg class="bi bi-briefcase green" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 001.5 14h13a1.5 1.5 0 001.5-1.5v-6h-1v6a.5.5 0 01-.5.5h-13a.5.5 0 01-.5-.5v-6H0v6z" clip-rule="evenodd"/>
					  <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 011.5 3h13A1.5 1.5 0 0116 4.5v2.384l-7.614 2.03a1.5 1.5 0 01-.772 0L0 6.884V4.5zM1.5 4a.5.5 0 00-.5.5v1.616l6.871 1.832a.5.5 0 00.258 0L15 6.116V4.5a.5.5 0 00-.5-.5h-13zM5 2.5A1.5 1.5 0 016.5 1h3A1.5 1.5 0 0111 2.5V3h-1v-.5a.5.5 0 00-.5-.5h-3a.5.5 0 00-.5.5V3H5v-.5z" clip-rule="evenodd"/>
				</svg>
				
				<h3 class="type" class="green">Partnership</h3>
				
				<p>We really value our customers and therefore often give various bonuses to our regular customers.</p>
			</center>
			</div>
		</div>
	</div>
<br><br>
<!-- Slides div -->
<div class="container">
	<div class="row">
		<div class="col-lg-6">
		
			<!-- first photo information  -->
			<nav id="loc">
				<h3>Location</h3>
				<p>The farm is located at the foot of the Tien Shan Mountains, near the village of Shokpar in the Shuskiy district of the Zhambyl region of Kazakhstan. Our farm covers 25 hectares.</p>
			</nav>
			<!-- second photo information  -->
			<!-- All navs except first should not be visable -->
			<!-- ID used in our js files as references -->
			<nav id="qua" style="display: none;">
				<h3>Products quality</h3>
				<p >We feed our cows only healthy and natural foods to get no less healthy products.</p>
			</nav>
			<!-- third photo information  -->
			<nav id="fou" style="display: none;">
				<h3>Founder</h3>
				<p>Our Founder - Amangali Amanov, works in this sphere about 10 years. In the beginning, we supplied products only to shops and residents of our region, then 4 years ago we entered the market of large cities like Taraz and Almaty. </p>
			</nav>
			<!-- fourth photo information  -->
			<nav id="go" style="display: none;">
				<h3>Goal</h3>
				<p>We have been successfully working on the market for <span class="gold">4</span> years and all the time we are aimed at improving the quality of life of people, and therefore we try to produce the highest quality product..</p>
			</nav>
		</div>

		<div class="col-lg-3 down">
			<!-- rounded is built-in class of bootstrap, another one is for js -->
				<img src="https://forbes.kz/img/articles/b05730715b012ac54a680349924c0d42-small.jpg" class="slide_img rounded first">
			
			
				<img src="https://qualityinspection.org/wp-content/uploads/2019/11/HowQualityPlanningDrivesQCandProcessImprovement.jpg"  class="slide_img rounded second">
			
		
		</div>

		<div class="col-lg-3 about upper">
			
				<img src="https://informburo.kz/img/inner/1020/41/img_4838.jpg"  class="slide_img rounded third">
			
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS8n5pg6i5aybLYPv1QysuimAi9x6Zq_JIV8h7-fu9oTZteNqlo&usqp=CAU"  class="slide_img rounded fourth">
			
		</div>
	</div>
</div>
	
	<!-- footer -->
	<?php include "../includes/footer.php"; ?>

</body>
</html>