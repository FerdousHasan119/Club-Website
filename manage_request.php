<?php

use function PHPSTORM_META\elementType;

  session_start();
  $admin = $_SESSION['admin'];
  if($admin==null){
    header('location:login.php');
  }
  include '_dbconnect.php';
  $flag = 0;
  $flag1 = 0;
  $html = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $search = $_POST['search'];
  $cat = $_POST['cat'];

  $q =  "SELECT `id`,`name`, `email`, `stdid`, `department`, `contact`,`tnxID`,`status` FROM `mrequest` WHERE  `$cat` LIKE '%$search%';";
  $run = mysqli_query($con, $q);
  

  
  if(mysqli_num_rows($run)>0){
      while($row = $run->fetch_assoc()){
          $html = $html. "<tr><td>" . $row["id"] ."</td>
          <td>". $row["name"] . "</td>
          <td>". $row["email"] . "</td>
          <td>". $row["stdid"] . "</td>
          <td>". $row["department"] . "</td>
          <td>". $row["contact"] . "</td>
          <td>". $row["tnxID"] . "</td>
          <td>". $row["status"] . "</td>
          <td>". '<a href="update_request.php?id= '.$row['id'].'" class="btn btn-lg btn-block btn btn-success"><i class="fa-solid fa-plus"></i> Accept Request</a><a href="delete_request.php?id= '.$row['id'].'" class="btn btn-lg btn-block btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i> Delete Request</a>' .
          "</td></tr>";
          $flag = 1;
        
      }
    }
  }
      else{
        $flag1 = 1;
      }
      
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Membership Requests</title>
    <link rel = "icon" href="img/fav1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
</head>

<body>
    
    <?php 
    include('header2.html');
    ?>

    
    <div id="cta">
    <h1 class = "cta-heading"><i class="fa-solid fa-list-check"></i> View Membership Request</h1>
    </div>
    
    <form class="form" action="manage_request.php" method="POST">
     <div class="form-group" id="pad">
        <input type="text" class="form-control" name="search" aria-describedby="emailHelp" placeholder="Search">
     </div>
     
     
     <div class="form-group" id="pad2">
            <select class="form-control" name="cat">
            <option value="email">User Email</option>
            <option value="stdid">ID</option>
            <option value="department">Department</option>
            <option value="name">Name</option>
           
        </select>
    </div>
    
     <div class="col-lg-12 col-md-12 col-sm-12" id = "pad3">
     <button type="submit" class="btn btn-lg btn-block btn-success"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
     <button onclick="window.location.href='manage_request.php'" type="button" class="btn btn-lg btn-block btn-info"><i class="fa-solid fa-list"></i> See All</button>
     </div>
    </form>
    
           <table id="example" class="table table-light table-hover table-bordered pad" style="width:100%">
        
        <thead>
            <tr>
                <th>Name</th>        
                <th>Email</th>
                <th>Student ID</th>
                <th>Department</th>
                <th>Contact</th>
                <th>Transaction ID</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
            
       
        <tbody>
            
             <?php
                    
                    if($flag = 1){
                      $flag = 0;
                      echo $html;
                
                    }
                    if($flag1 == 1){
                      $flag1 = 0;
                        $conn=new PDO('mysql:host=localhost:3306;dbname=club;','root','');
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        //database code execute, default : warning generate
                        $sqlquerystring="SELECT * FROM mrequest ";
                        $returnobj=$conn->query($sqlquerystring);

                        
                        ///user data found
                        $tabledata=$returnobj->fetchAll();

                        foreach($tabledata AS $row){
                         ?>

                         <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['stdid']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['tnxID']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td><?php echo '<a href="update_request.php?id= '.$row['id'].'" class="btn btn-lg btn-block btn btn-success"><i class="fa-solid fa-plus"></i> Accept Request</a><a href="delete_request.php?id= '.$row['id'].'" class="btn btn-lg btn-block btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i> Delete Request</a>'; ?></td>
                        </tr>
                        <?php
                    }
                  }
    ?>
            
            
         </tbody>
            
        </table>
    
       <footer id="footer">
    <a id="icon-fb" href="#">
      <i class="s-icons fa-brands fa-facebook"></i>
    </a>
    <a id="icon-insta" href="#">
      <i class="s-icons fa-brands fa-instagram"></i>
    </a>
    <a id="icon-mail" href="mailto:#">
      <i class="s-icons fa-solid fa-envelope" href=""></i>
    </a>
    
    
    <p>Developed by <a href="https://www.facebook.com/FerdousHasanSabuj">Ferdous Hasan</a> & <a href="https://www.facebook.com/aaptaarefin">Arefin Ittesafun Abian</a>.<br>
    © Copyright UIU Science Club</p>

   </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
    <script src="https://use.fontawesome.com/2c7ebecd35.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
