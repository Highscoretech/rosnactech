<?php

require("config.php");
if (isset($_POST['submit'])) {
	$emaili = $_SESSION['email'];

	// Taking all 5 values from the form data(input)

    $DOB = $_REQUEST['DOB'];
    $sex = $_REQUEST['sex'];
    $city = $_REQUEST['city'];
    $phone = $_REQUEST['phone'];
    $state = $_REQUEST['state'];
    $country = $_REQUEST['country'];
    $holder = $_REQUEST['name'];

    $coin = $_REQUEST['coin'];
    $wallect = $_REQUEST['wallect'];
    
     $bank_name = $_REQUEST['bank_name'];
    $acc_name = $_REQUEST['acc_num'];
    $pin = $_REQUEST['pin'];

    $sql = "UPDATE users SET `DOB`= '{$DOB}',`sex`= '{$sex}',`phone`= '{$phone}',`country`= '{$country}',`state`= '{$state}',`city`= '{$city}' WHERE email = '{$emaili}'";
  $result = mysqli_query($conn, $sql);

    $sql = "UPDATE account SET `holder`= '{$holder}',`bank_name`= '{$bank_name}',`acc_num`= '{$acc_name}',`crypto`= '{$coin}',`wallect`= '{$wallect}',`pin`= '{$pin}' WHERE email = '{$emaili}'";
    if($result = mysqli_query($conn, $sql)){
        echo 'sucessfully updated';
    }
        



}



?>