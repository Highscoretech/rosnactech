<?php
require('config.php');

if(isset($_POST['surbit'])){
    $email = $_POST['email'];
    $balance = $_POST['balance'];


$sql = "UPDATE users SET `acc_bal`= '{$balance}' WHERE email = '{$email}'";
if ($result = mysqli_query($conn, $sql)) {
    echo 'sucessfully edited';
}
// // Close connection
mysqli_close($conn);
}





?>
