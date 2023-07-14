<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $p_num = $_POST['p_num'];
    
    $password= $_POST['password'];
    $cpassword= $_POST['cpassword'];

    if($password == $cpassword){
        $sql2 = "SELECT * FROM admini WHERE email = '$email'";
        $result1 = mysqli_query($con, $sql2);
        $num1 = mysqli_num_rows($result1);
        
        
        if ($num1 == 0) {
        $sql = "INSERT INTO `admini` VALUES ('','$name', '$email','$password','$p_num');";
            $result = mysqli_query($con, $sql);
            $_SESSION['success'] = "Account created successfully";
            header("Location:create_admin.php");
            exit();
        }
        else{
            $_SESSION['not_success'] = "Email already used before";
        header("Location:create_admin.php");
         exit();   
        }
             
    }
    
        $_SESSION['pasword'] = "Password did not matched";
        header("Location:create_admin.php");
         exit(); 
    
}
?>