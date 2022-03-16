<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
	box-sizing: border-box;
}

body {
	background-color: #28223F;
	font-family: Montserrat, sans-serif;
	
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;

	min-height: 100vh;
	margin: 0;
}

h3 {
	margin: 10px 0;
}

h6 {
	margin: 5px 0;
	text-transform: uppercase;
}

p {
	font-size: 14px;
	line-height: 21px;
}

.card-container {
	background-color: #231E39;
	border-radius: 5px;
	box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
	color: #B3B8CD;
	padding-top: 30px;
	position: relative;
	width: 350px;
	max-width: 100%;
	text-align: center;
}

.card-container .pro {
	color: #231E39;
	background-color: #FEBB0B;
	border-radius: 3px;
	font-size: 14px;
	font-weight: bold;
	padding: 3px 7px;
	position: absolute;
	top: 30px;
	left: 30px;
}

.card-container .round {
	border: 1px solid #03BFCB;
	border-radius: 50%;
	padding: 7px;
}

button.primary {
	background-color: #03BFCB;
	border: 1px solid #03BFCB;
	border-radius: 3px;
	color: #231E39;
	font-family: Montserrat, sans-serif;
	font-weight: 500;
	padding: 10px 25px;
}

button.primary.ghost {
	background-color: transparent;
	color: #02899C;
}

.skills {
	background-color: #1F1A36;
	text-align: left;
	padding: 15px;
	margin-top: 30px;
}

.skills ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.skills ul li {
	border: 1px solid #2D2747;
	border-radius: 2px;
	display: inline-block;
	font-size: 12px;
	margin: 0 7px 7px 0;
	padding: 7px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
</style>
<body>


<?php
require("config.php");
// $paymentId = $_SESSION['payment_ID'];
//include("authentication.php");
$emaili = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email = '{$emaili}' " ;
if ($result = mysqli_query($conn, $sql)) {
    while ($row = $result->fetch_assoc()) {
        $firstname = $row["first_name"];
        $lastname = $row["last_name"];
        $country = $row["country"];
        $city = $row["city"];
        $date = $row["date"];
        $state = $row["state"];

        $sql = "SELECT * FROM `account` WHERE email = '{$emaili}' " ;
        if ($result = mysqli_query($conn, $sql)) {
         while ($row = $result->fetch_assoc()) {
                $holder = $row["holder"];
                $bank_name = $row["bank_name"];
                $acc_num = $row["acc_num"];
                $crypto = $row["crypto"];
                $wallect = $row["wallect"];
    }
}
      
      

  
    }
}
?>
<div class="card-container">
	<span class="pro">Verified</span>
	<img class="round" src="avatar.jpg" alt="user" />
	<h3><?php echo "$firstname $lastname" ?></h3>
	<h6><?php echo "$country" ?></h6> <br>

    <h3><?php echo "$state" ?></h3>
	<h6><?php echo "$city" ?></h6>

	<p>Date of Withdrawal >>> <span style="color: #FEBB0B;"><?php echo $date ?></span> </p>
	<div class="buttons">
		<button  class="primary">
			Withdraw bonus
		</button>
		<button  class="primary ghost">
		Withdraw main balance
		</button>
	</div>
	<div class="skills">
		<h6>Personal details</h6>
		<ul>
			<li><?php echo "$holder" ?></li>
			<li><?php echo "$bank_name" ?></li>
			<li><?php echo "$acc_num" ?></li>
			<li><?php echo "$crypto" ?></li>
			<li><?php echo "$wallect" ?></li>
			
		</ul>
	</div>
</div> <br> <br><br> <br><br>

<footer>
	<p>
		Your personal details are secured with us !!!
	</p>
</footer>
</body>
</html>