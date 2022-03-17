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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<script>
  function on(){
    alert ("Promoted sucessfully");
}
</script>

<body id="body-pi">
  

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="7.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="8.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div>
  <h2>Instructions</h2>
  <p>Make sure you promote our sponsors to earn for today</p>
  <p>You can buy and sell your coin with them at an affordable rate</p>
  
</div>


<div class="card" style="width: 18rem; float:left">
  <img src="home_img_mobile.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" style="color: darkblue;">Ice TV</h5>
    <p class="card-text" style="color: blue;">🎀Do you need a reliable cryptocurrency trading platform where cryptocurrency of all kinds are sold at the best rate ?
ICE TV is the best option for trading your cryptocurrencies with high level of security and trustworthiness.
</p>
<p style="color: blue;">For enquires :
+2349076567991 (WhatsApp only)</p>
<form action="amount.php" method="POST">
<button name="submit" type="submit" onclick="on()" class="btn btn-primary">promote</button>
</form>
    
  </div>
</div>


<div style="margin: 20px;">
<h3>Blockchain</h3>
<p style="margin: 20px; padding:20px">Bitcoin is a decentralized cryptocurrency originally described in a 2008 whitepaper by a person, or group of people, using the alias Satoshi Nakamoto. It was launched soon after, in January 2009. <br>

Bitcoin is a peer-to-peer online currency, <br>
meaning that all transactions happen directly between equal, independent network participants, without the need for any intermediary to permit or facilitate them. Bitcoin was created, according to Nakamoto’s own words, to allow “online payments to be sent directly from one party to another without going through a financial institution.”

Some concepts for a similar type of a decentralized electronic currency precede BTC, but Bitcoin holds the distinction of being the first-ever cryptocurrency to come into actual use.



</div>
   


    <script src="script.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>