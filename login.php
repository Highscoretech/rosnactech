<?php      

    require('config.php');  
if (isset($_POST['login_user'])) {
        $_SESSION['email'] = $_POST['email'];

    $emailEl = $_SESSION['email'];
    $passwordEl= $_POST['password'];  

        //to prevent from mysqli injection  
        $emailEl = stripcslashes($emailEl);  
        $passwordEl = stripcslashes($passwordEl);  
        $emailEl = mysqli_real_escape_string($conn, $emailEl);  
        $passwordEl = mysqli_real_escape_string($conn, $passwordEl); 

        $select = mysqli_query($conn, "SELECT * FROM `login` WHERE email = '". $_SESSION['email']."'");
        if(mysqli_num_rows($select)) {
            $sql = "SELECT * FROM `login` WHERE email = '$emailEl'";  
            if ($result = mysqli_query($conn, $sql)) {
                while ($row = $result->fetch_assoc()) {
                    $email = $row["email"];
                    $password = $row["password"];
                
                    if ($passwordEl == $password){
                        // Storing username in session variable
                        echo "<script>
                    alert('Log in successfully') </script>";
                        header("Location: home.php");
                        exit;    
                    }elseif ($passwordEl != $password){
                        echo "incorrect password";
                        echo "<script>
                        alert('incorrect password') </script>";
                        exit;
                    }
                    else{
                        echo "<script>
                        alert('incorrect password') </script>";
                        exit;
                    }
                }
            }else{
                echo "<script>
                alert('incorrect email') </script>";
                exit;
            }
            $result->free();
        }
        else{
            echo "<script>
                alert('incorrect email and password') </script>";
                echo "Insert your correct details";
            exit;
        }
}

?>   