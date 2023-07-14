<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $sql2 = " SELECT * FROM admini WHERE email = '$email' and pass = '$password'";
    $result1 = mysqli_query($con, $sql2);
    $num1 = mysqli_num_rows($result1);

   

    if ($num1 == 1) {
        
        while ($row = $result1->fetch_assoc()) {
                session_start();
                $_SESSION['admin'] = $email;
                 header("Location:adminhome.php");
            }
        }
    else{
        $_SESSION['wrong'] = "Wrong Email or Password";
         header("Location:login.php");
          exit(); 
    }
}