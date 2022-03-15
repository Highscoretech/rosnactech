


<?php
// generating random referral codes

 require("config.php");
 $emaili = $_SESSION['email'];

//  $sql = "SELECT * FROM collage WHERE email = '{$emaili}' " ;
//  $result = mysqli_query($conn, $sql);
//  $result_fetch = mysqli_fetch_assoc($result);




$sql = "SELECT * FROM `users` WHERE email = '{$emaili}'";
if ($result = mysqli_query($conn, $sql)) {
    while ($row = $result->fetch_assoc()) {
        $amount = $row["plan"];

            $sql = "SELECT * FROM `account` WHERE email = '{$emaili}'";
            if ($result = mysqli_query($conn, $sql)) {
                while ($row = $result->fetch_assoc()) {
                    $amount = $row["balance"];
            //silver plan
                        function silver($amount){
                            $amount += 250;
                            $_SESSION['click'] =+ $amount;
                            return $amount;
                            if ($amount > 7510){
                                echo "<script>
                                alert('You have completed your subscription') </script>";
                                session_destroy();
                                header("Location: home.php");
                            }else{

                            }
                        }

                        // pearl plan
                        function pearl($amount){
                            $amount += 500;
                            $_SESSION['click'] =+ $amount;
                            return $amount;
                            if ($amount > 15200){
                                echo "<script>
                                alert('You have completed your subscription') </script>";
                                session_destroy();
                                header("Location: home.php");
                            }else{

                            }
                        }
                        //>Red coral plan
                        function red($amount){
                            $amount += 1250;
                            $_SESSION['click'] =+ $amount;
                            return $amount;
                            if ($amount > 37600){
                                echo "<script>
                                alert('You have completed your subscription') </script>";
                                session_destroy();
                                header("Location: home.php");
                            }else{

                            }
                        }
                        //Tanzanite plan
                        function tani($amount){
                            $amount += 2500;
                            $_SESSION['click'] =+ $amount;
                            return $amount;
                            if ($amount > 75100){
                                echo "<script>
                                alert('You have completed your subscription') </script>";
                                session_destroy();
                                header("Location: home.php");
                            }else{

                            }
                        }

                        //Sapphire plan
                        function sapphire($amount){
                            $amount += 6250;
                            $_SESSION['click'] =+ $amount;
                            return $amount;
                            if ($amount > 187600){
                                echo "<script>
                                alert('You have completed your subscription') </script>";
                                session_destroy();
                                header("Location: home.php");
                            }else{

                            }
                        }

                        //Opal plan
                        function opal($amount){
                            $amount += 12500;
                            $_SESSION['click'] =+ $amount;
                            return $amount;
                            if ($amount > 375100){
                                echo "<script>
                                alert('You have completed your subscription') </script>";
                                session_destroy();
                                header("Location: home.php");
                            }else{

                            }
                        }

                        function diamond($amount){
                            $amount += 25000 ;
                            $_SESSION['click'] =+ $amount;
                            return $amount;
                            if ($amount > 750100){
                                echo "<script>s
                                alert('You have completed your subscription') </script>";
                                session_destroy();
                                header("Location: home.php");
                            }else{

                            }
                        }

                        function benito($amount){
                            $amount += 50000;
                            $_SESSION['click'] =+ $amount;
                            return $amount;
                            if ($amount > 1500001){
                                echo "<script>
                                alert('You have completed your subscription') </script>";
                                session_destroy();
                                header("Location: home.php");
                            }else{

                            }
                        }


                        function ruby($amount){
                            $amount += 83333;
                            $_SESSION['click'] =+ $amount;
                            return $amount;
                            if ($amount > 2500002){
                                echo "<script>
                                alert('You have completed your subscription') </script>";
                                session_destroy();
                                header("Location: home.php");
                            }else{

                            }
                        }

                        // function meg($amount){
                        //     $amount += 200;
                        //     $_SESSION['click'] =+ $amount;
                        //     return $amount;
                        //     if ($amount > 6001){
                        //         session_destroy();
                        //         header("Location: home.php");
                        //     }else{

                        //     }
                        // }

                        if (isset($_POST['click_button'])) {

                                            //Get Heroku ClearDB connection information
                            $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
                            $cleardb_server = $cleardb_url["host"];
                            $cleardb_username = $cleardb_url["user"];
                            $cleardb_password = $cleardb_url["pass"];
                            $cleardb_db = substr($cleardb_url["path"],1);
                            $active_group = 'default';
                            $query_builder = TRUE;
                            // Connect to DB
                            $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

                            // $conn = mysqli_connect("localhost", "root", "", "facault");
                                
                            // // Check connection
                            // if($conn === false){
                            //     die("ERROR: Could not connect. "
                            //         . mysqli_connect_error());
                            // }
                            
                            if ( $plan == 1){
                                $acc = silver($amount);
                                $sql = "UPDATE users SET `acc_bal`= '{$acc}' WHERE email = '{$emaili}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    echo 'sucessfully';
                                    header("Location: home.php");
                                }
                            }
                            elseif ( $plan == 2){
                                $acc = pearl($amount);
                                $sql = "UPDATE users SET `acc_bal`= '{$acc}' WHERE email = '{$emaili}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    echo 'sucessfully';
                                    header("Location: home.php");
                                }
                                
                            } if ( $plan == 3){
                                $acc = red($amount);
                                $sql = "UPDATE users SET `acc_bal`= '{$acc}' WHERE email = '{$emaili}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    echo 'sucessfully';
                                    header("Location: home.php");
                                }
                            } if ( $plan == 4){
                                $acc = tani($amount);
                                $sql = "UPDATE users SET `acc_bal`= '{$acc}' WHERE email = '{$emaili}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    echo 'sucessfully';
                                    header("Location: home.php");
                                }
                            } if ( $plan== 5){
                                
                                $acc = sapphire($amount);
                                $sql = "UPDATE users SET `acc_bal`= '{$acc}' WHERE email = '{$emaili}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    echo 'sucessfully';
                                    header("Location: home.php");
                                }
                            
                            }
                            if ( $plan == 6){
                                $acc = opal($amount);
                                $sql = "UPDATE users SET `acc_bal`= '{$acc}' WHERE email = '{$emaili}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    echo 'sucessfully';
                                    header("Location: home.php");
                                }
                            
                            } if ( $plan == 7){
                                $acc = diamond($amount);
                                $sql = "UPDATE users SET `acc_bal`= '{$acc}' WHERE email = '{$emaili}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    echo 'sucessfully';
                                    header("Location: home.php");
                                }
                            
                            } if ( $plan == 8){
                                $acc = benito($amount);
                                $sql = "UPDATE users SET `acc_bal`= '{$acc}' WHERE email = '{$emaili}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    echo 'sucessfully';
                                    header("Location: home.php");
                                }
                            } if ( $plan == 9){
                                $acc = ruby($amount);
                            $sql = "UPDATE users SET `acc_bal`= '{$acc}' WHERE email = '{$emaili}'";
                                if ($result = mysqli_query($conn, $sql)) {
                                    echo 'sucessfully';
                                    header("Location: home.php");
                                }
                            }
                        }
                    }
                }
            }
        }
            
?>
