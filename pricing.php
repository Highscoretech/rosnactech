<?php

// To check if session is started.
if(isset($_SESSION["email"]))
{
	if(time()-$_SESSION["login_time_stamp"] >600)
	{
		session_unset();
		session_destroy();
		header("Location:reg.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Rosnac company</title>
<!--
App Starter Template
http://www.templatemo.com/tm-492-app-starter
-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- PRE LOADER -->
<!-- 
<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div> -->



<!-- Navigation Section -->

<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"><span>rosnac</span></a>
		</div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				 <!-- <li><a href="Login.php" class="smoothScroll">login</a></li> -->
                    <li><a href="index.html" class="smoothScroll">Home</a></li> 
                <li><a href="policy.html" class="smoothScroll">How it works</a></li>
                <li><a href="About us.html" class="smoothScroll">About</a></li>
                <li><a href="policy.html" class="smoothScroll">policy</a></li>
			</ul>
		</div>

	</div>
</div>



<!-- Pricing Section -->

<section id="pricing">
     <div class="container">
          <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                         <h1>Packages</h1>
                         <hr>
                    </div>
               </div>

               <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.4s">
                    <div class="pricing-plan">
                         <div class="pricing-month">
                              <h2>₦5,000</h2>
                         </div>
                         <div class="pricing-title">
                              <h3>silver plan</h3>
                         </div>
                         <p>20/30days</p>
                         <p>total payout : ₦7,500</p>
                         <p>Affiliate bonus 5%</p>
                         <button class="btn btn-default section-btn"> <a href="bank.php">Purchase now</a></button>
                    </div>
               </div>

               <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
                    <div class="pricing-plan">
                         <div class="pricing-month">
                              <h2>₦10,000</h2>
                         </div>
                         <div class="pricing-title">
                              <h3>pearl plan</h3>
                         </div>
                         <p>20/30days</p>
                         <p>total payout : $15,000</p>
                         <p>Affiliate bonus 5%</p>
                        
                         <button class="btn btn-default section-btn"> <a href="bank.php">Purchase now</a></button>
                    </div>
               </div>

               <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.8s">
                    <div class="pricing-plan">
                         <div class="pricing-month">
                              <h2>₦25,000</h2>
                         </div>
                         <div class="pricing-title">
                              <h3>Red corol plan</h3>
                         </div>
                         <p>20/30days</p>
                         <p>total payout : ₦37,500</p>
                         <p>Affiliate bonus 5%</p>
                         
                         <button class="btn btn-default section-btn"> <a href="bank.php">Purchase now</a></button>
                    </div>
               </div>

          </div>
     </div>
</section>



<section id="pricing">
     <div class="container">
          <div class="row">
<!-- 
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                         <h1>Packages</h1>
                         <hr>
                    </div>
               </div> -->

               <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.4s">
                    <div class="pricing-plan">
                         <div class="pricing-month">
                              <h2>₦50,000</h2>
                         </div>
                         <div class="pricing-title">
                              <h3>Tanzanite plan</h3>
                         </div>
                         <p>20/30days</p>
                         <p>total payout : ₦75,000</p>
                         <p>Affiliate bonus 5%</p>
                         <button class="btn btn-default section-btn"> <a href="plan.php">Purchase now</a></button>
                    </div>
               </div>

               <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
                    <div class="pricing-plan">
                         <div class="pricing-month">
                              <h2>₦100,000</h2>
                         </div>
                         <div class="pricing-title">
                              <h3>Sapphire plan</h3>
                         </div>
                         <p>20/30days</p>
                         <p>total payout : ₦150,000</p>
                         <p>Affiliate bonus 5%</p>
                        
                         <button class="btn btn-default section-btn"> <a href="bank.php">Purchase now</a></button>
                    </div>
               </div>

               <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.8s">
                    <div class="pricing-plan">
                         <div class="pricing-month">
                              <h2>₦250,000</h2>
                         </div>
                         <div class="pricing-title">
                              <h3>Opal plan</h3>
                         </div>
                         <p>20/30days</p>
                         <p>total payout : ₦3750,000</p>
                         <p>Affiliate bonus 5%</p>
                         
                         <button class="btn btn-default section-btn"> <a href="bank.php">Purchase now</a></button>
                    </div>
               </div>

          </div>
     </div>
</section>



<section id="pricing">
     <div class="container">
          <div class="row">
<!-- 
                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                         <h1>Packages</h1>
                         <hr>
                    </div>
               </div> -->

               <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.4s">
                    <div class="pricing-plan">
                         <div class="pricing-month">
                              <h2>₦500,000</h2>
                         </div>
                         <div class="pricing-title">
                              <h3>Black diamond plan</h3>
                         </div>
                         <p>20/30days</p>
                         <p>total payout : ₦750,000</p>
                         <p>plus the company's t-shirt</p>
                         <p>Affiliate bonus 5%</p>
                         <button class="btn btn-default section-btn"> <a href="bank.php">Purchase now</a></button>
                    </div>
               </div>

               <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
                    <div class="pricing-plan">
                         <div class="pricing-month">
                              <h2>₦1,000,000</h2>
                         </div>
                         <div class="pricing-title">
                              <h3>Benitoite plan</h3>
                         </div>
                         <p>20/30days</p>
                         <p>total payout : ₦1,500,000</p>
                         <p>Affiliate bonus 5%</p>
                         <button class="btn btn-default section-btn"> <a href="bank.php">Purchase now</a></button>
                    </div>
               </div>

               <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.8s">
                    <div class="pricing-plan">
                         <div class="pricing-month">
                              <h2>₦2,000,000</h2>
                         </div>
                         <div class="pricing-title">
                              <h3>Ruby plan</h3>
                         </div>
                         <p>20/30days</p>
                         <p>total payout : ₦3,000,000</p>
                         <p>Affiliate bonus 5%</p>
                         
                         <button class="btn btn-default section-btn"> <a href="deposit.php">Purchase now</a></button>
                    </div>
               </div>

          </div>
     </div>
</section>



<!-- Back top -->

<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>