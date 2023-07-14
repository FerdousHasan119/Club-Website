<?php
    include '_dbconnect.php';
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $studentid = $_POST['studentid'];
        $department = $_POST['department'];
        $contact = $_POST['contact'];
        $tnxID=$_POST['tnxID'];

        // $name = 'hasan';
        // $email= 'hasan@gmail.com';
        // $studentid = '011191245';
        // $department ='CSE';
        // $contact = '01798678768';
        // $tnxID ='wsc43trf';
        
        $q =  "INSERT INTO `mrequest`(`id`, `name`, `email`, `stdid`, `department`, `contact`, `tnxID`) VALUES ('','$name','$email','$studentid','$department','$contact','$tnxID');";
        $run = mysqli_query($con, $q);
       
         $_SESSION['member_request'] = "Your request placed succesfully. We will let you know through email or contact no if it approve.";
        header('location:member_request.php');
        $con->close();

        // echo $studentid;
        // echo $department;
        // echo $contact;
        // echo $tnxID;
        // echo $name;
    }
    
?>  
