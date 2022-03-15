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
  function success(){
    alert ("You have completed today's task")
}
</script>

<body id="body-pi">
  <h1>TODAY's TASK</h1>
  <p>12th March 2022</p>
   <br>

 <h3>Blockchain</h3>
 <p>Bitcoin is a decentralized cryptocurrency originally described in a 2008 whitepaper by a person, or group of people, using the alias Satoshi Nakamoto. It was launched soon after, in January 2009. <br>

Bitcoin is a peer-to-peer online currency, <br>
meaning that all transactions happen directly between equal, independent network participants, without the need for any intermediary to permit or facilitate them. Bitcoin was created, according to Nakamoto’s own words, to allow “online payments to be sent directly from one party to another without going through a financial institution.”

Some concepts for a similar type of a decentralized electronic currency precede BTC, but Bitcoin holds the distinction of being the first-ever cryptocurrency to come into actual use.




  
    <div class="task-container">
        <!-- <form action="empty" onsubmit="return false" method="post"> -->
        <!-- <input type="submit" name="click_button" value="t">
        </form> -->
        

        <p>Click to complete your task.</p>

        <form action="amount.php" method="post">
        <input onclick="success()" type="submit" name="click_button" class="btn btn-success" value="click to earn">
        </form>
        <br>
   


    <script src="script.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>