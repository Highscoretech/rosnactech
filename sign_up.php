<?php
require("config.php");
if (isset($_POST['log'])) {
	$_SESSION['email'] = $_POST['email'];

	// Taking all 5 values from the form data(input)

	$firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $affiliator = $_REQUEST['ref_code'];
    $ref_code = strtoupper(bin2hex(random_bytes(4)));

        $password = $_REQUEST['password'];
    $confirm = $_REQUEST['confirm'];
    $code = $_REQUEST['code'];
    $acc_bal = 1000;


    if ($password != $confirm){
        echo "password did not match";
        exit;
    }else{
        if($code != ''){
             $sql = "SELECT * FROM `market` WHERE `paymentid` = '$code'";  
             if ($result = mysqli_query($conn, $sql)) {
                while ($row = $result->fetch_assoc()) {
                    $plan = $row["plan"];
            
                        if($affiliator == ''){
                        $sql = "INSERT INTO `login` VALUES ('$email','$code','$affiliator','$ref_code','$password')";
                        mysqli_query($conn, $sql);
                    
                        $sql = "INSERT INTO `notification` VALUES ('$email','Welcome to rosnac our investor, We are glad to have you here','')";
                        mysqli_query($conn, $sql);
                    
                        $sql = "INSERT INTO `account` VALUES ('$email','?','?','?','$acc_bal','0','?','?')";
                        mysqli_query($conn, $sql);
                    
                        $sql = "INSERT INTO `users` VALUES ('$email','$firstname','$lastname','?','?','','?','?','?','$plan',Now())";
                        mysqli_query($conn, $sql);

                        $sql = "DELETE FROM `market` WHERE  `paymentid` = '$code' ";
                        mysqli_query($conn, $sql);

                        header('location: home.php');
                        }else{
                            $sql = "INSERT INTO `login` VALUES ('$email','$code','$affiliator','$ref_code','$password')";
                            mysqli_query($conn, $sql);
                        
                            $sql = "INSERT INTO `notification` VALUES ('$email','Welcome to rosnac our investor, We are glad to have you here'','')";
                            mysqli_query($conn, $sql);
                        
                            $sql = "INSERT INTO `account` VALUES ('$email','?','?','?','$acc_bal','0','?','?')";
                            mysqli_query($conn, $sql);
                        
                            $sql = "INSERT INTO `users` VALUES ('$email','$firstname','$lastname'','?','?','','?','?','?',Now())";
                            mysqli_query($conn, $sql);
                            if ($plan == 1){
                                $sql = "SELECT * FROM `login` WHERE `affiliator` = '{$affiliator}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    while ($row = $result->fetch_assoc()) {
                                        $aff_email = $row["email"];
                
                                        $sql = "SELECT * FROM `account` WHERE `email` = '{$aff_email}'";
                                        if ($result = mysqli_query($conn, $sql)) {
                                            while ($row = $result->fetch_assoc()) {
                                                $bonus = $row["ref_bal"] + 250;

                                                $sql = "UPDATE `account` SET `ref_bal`= '{$bonus}' WHERE `email` = '{$aff_email}'";
                                                if ($result = mysqli_query($conn, $sql)) {
                                                    echo 'sucessfully';
                                                    header('location: home.php');
                                                    $sql = "DELETE FROM `market` WHERE  `paymentid` = '$code' ";
                                                    mysqli_query($conn, $sql);
                                                }
                                            }
                                        }
                                    }				 
                                }
                            } elseif ($plan == 2){
                                $sql = "SELECT * FROM `login` WHERE `affiliator` = '{$affiliator}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    while ($row = $result->fetch_assoc()) {
                                        $aff_email = $row["email"];
                                        
                                        $sql = "SELECT * FROM `account` WHERE `email` = '{$aff_email}'";
                                        if ($result = mysqli_query($conn, $sql)) {
                                            while ($row = $result->fetch_assoc()) {
                                                $bonus = $row["ref_bal"] + 500;
                                            
                                                $sql = "UPDATE `account` SET `ref_bal`= '{$bonus}' WHERE `email` = '{$aff_email}'";
                                                if ($result = mysqli_query($conn, $sql)) {
                                                    echo 'sucessfully';
                                                    header('location: home.php');
                                                    $sql = "DELETE FROM `market` WHERE  `paymentid` = '$code' ";
                                                    mysqli_query($conn, $sql);
                                                }
                                            }
                                        }
                                    }					 
                                }
                            }elseif ($plan == 3){
                                $sql = "SELECT * FROM `login` WHERE `affiliator` = '{$affiliator}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    while ($row = $result->fetch_assoc()) {
                                        $aff_email = $row["email"];
                                    
                                        $sql = "SELECT * FROM `account` WHERE `email` = '{$aff_email}'";
                                        if ($result = mysqli_query($conn, $sql)) {
                                            while ($row = $result->fetch_assoc()) {
                                                $bonus = $row["ref_bal"] + 1250;
                                                    
                                                $sql = "UPDATE `account` SET `ref_bal`= '{$bonus}' WHERE `email` = '{$aff_email}'";
                                                if ($result = mysqli_query($conn, $sql)) {
                                                    echo 'sucessfully';
                                                    header('location: home.php');
                                                    $sql = "DELETE FROM `market` WHERE  `paymentid` = '$code' ";
                                                    mysqli_query($conn, $sql);
                                                }
                                            }
                                        }
                                    }
                                }
                            }elseif ($plan == 4){
                                $sql = "SELECT * FROM `login` WHERE `affiliator` = '{$affiliator}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    while ($row = $result->fetch_assoc()) {
                                        $aff_email = $row["email"];
                                    
                                        $sql = "SELECT * FROM `account` WHERE `email` = '{$aff_email}'";
                                        if ($result = mysqli_query($conn, $sql)) {
                                            while ($row = $result->fetch_assoc()) {
                                                $bonus = $row["ref_bal"] + 2500;
                                        
                                                $sql = "UPDATE `account` SET `ref_bal`= '{$bonus}' WHERE `email` = '{$aff_email}'";
                                                if ($result = mysqli_query($conn, $sql)) {
                                                    echo 'sucessfully';
                                                    header('location: home.php');
                                                    $sql = "DELETE FROM `market` WHERE  `paymentid` = '$code' ";
                                                    mysqli_query($conn, $sql);
                                                }
                                            }
                                        }
                                    }	
                                }
                            }elseif ($plan == 5){
                                $sql = "SELECT * FROM `login` WHERE `affiliator` = '{$affiliator}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    while ($row = $result->fetch_assoc()) {
                                        $aff_email = $row["email"];
                                        
                                        $sql = "SELECT * FROM `account` WHERE `email` = '{$aff_email}'";
                                        if ($result = mysqli_query($conn, $sql)) {
                                            while ($row = $result->fetch_assoc()) {
                                                $bonus = $row["ref_bal"] + 6250;
                                            
                                                $sql = "UPDATE `account` SET `ref_bal`= '{$bonus}' WHERE `email` = '{$aff_email}'";
                                                if ($result = mysqli_query($conn, $sql)) {
                                                    echo 'sucessfully';
                                                    header('location: home.php');
                                                    $sql = "DELETE FROM `market` WHERE  `paymentid` = '$code' ";
                                                    mysqli_query($conn, $sql);
                                                }
                                            }
                                        }
                                    }
                                }
                            }elseif ($plan == 6){
                                $sql = "SELECT * FROM `login` WHERE `affiliator` = '{$affiliator}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    while ($row = $result->fetch_assoc()) {
                                        $aff_email = $row["email"];
                                    
                                        $sql = "SELECT * FROM `account` WHERE `email` = '{$aff_email}'";
                                        if ($result = mysqli_query($conn, $sql)) {
                                            while ($row = $result->fetch_assoc()) {
                                                $bonus = $row["ref_bal"] + 12500;
                                        
                                                $sql = "UPDATE `account` SET `ref_bal`= '{$bonus}' WHERE `email` = '{$aff_email}'";
                                                if ($result = mysqli_query($conn, $sql)) {
                                                    echo 'sucessfully';
                                                    header('location: home.php');
                                                    $sql = "DELETE FROM `market` WHERE  `paymentid` = '$code' ";
                                                    mysqli_query($conn, $sql);
                                                }
                                            }
                                        }
                                    }
                                }
                            }elseif ($plan == 7){
                                $sql = "SELECT * FROM `login` WHERE `affiliator` = '{$affiliator}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    while ($row = $result->fetch_assoc()) {
                                        $aff_email = $row["email"];
                                        
                                        $sql = "SELECT * FROM `account` WHERE `email` = '{$aff_email}'";
                                        if ($result = mysqli_query($conn, $sql)) {
                                            while ($row = $result->fetch_assoc()) {
                                                $bonus = $row["ref_bal"] + 25000;
                                                    
                                                $sql = "UPDATE `account` SET `ref_bal`= '{$bonus}' WHERE `email` = '{$ref_email}'";
                                                if ($result = mysqli_query($conn, $sql)) {
                                                    echo 'sucessfully';
                                                    header('location: home.php');
                                                    $sql = "DELETE FROM `market` WHERE  `paymentid` = '$code' ";
                                                    mysqli_query($conn, $sql);
                                                }
                                            }
                                        }
                                    }
                                }
                            }elseif ($plan == 8){
                                $sql = "SELECT * FROM `login` WHERE `affiliator` = '{$affiliator}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    while ($row = $result->fetch_assoc()) {
                                        $aff_email = $row["email"];
                                        echo $aff_email;
                                        
                                        $sql = "SELECT * FROM `account` WHERE `email` = '{$aff_email}'";
                                        if ($result = mysqli_query($conn, $sql)) {
                                            while ($row = $result->fetch_assoc()) {
                                                $bonus = $row["ref_bal"] + 50000;
                                                    
                                                $sql = "UPDATE `account` SET `ref_bal`= '{$bonus}' WHERE `email` = '{$ref_email}'";
                                                if ($result = mysqli_query($conn, $sql)) {
                                                    echo 'sucessfully';
                                                    header('location: home.php');
                                                    $sql = "DELETE FROM `market` WHERE  `paymentid` = '$code' ";
                                                    mysqli_query($conn, $sql);
                                                }
                                            }
                                        }
                                    }
                                }
                            }elseif ($plan == 9){
                                $sql = "SELECT * FROM `login` WHERE `affiliator` = '{$affiliator}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    while ($row = $result->fetch_assoc()) {
                                        $aff_email = $row["email"];
                                    
                                        $sql = "SELECT * FROM `account` WHERE `email` = '{$aff_email}'";
                                        if ($result = mysqli_query($conn, $sql)) {
                                            while ($row = $result->fetch_assoc()) {
                                                $bonus = $row["ref_bal"] + 75000;
                                                    
                                                $sql = "UPDATE `account` SET `ref_bal`= '{$bonus}' WHERE `email` = '{$ref_email}'";
                                                if ($result = mysqli_query($conn, $sql)) {
                                                    echo 'sucessfully';
                                                    header('location: home.php');
                                                    $sql = "DELETE FROM `market` WHERE  `paymentid` = '$code' ";
                                                    mysqli_query($conn, $sql);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    
                }
            }else{
                echo "invalid code";
            }
            $result->free();
        }else{
            echo 'purchase code first';
        }
    }
}

        
