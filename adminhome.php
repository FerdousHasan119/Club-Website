<?php
  session_start();
  $admin = $_SESSION['admin'];
  if($admin==null){
    header('location:login.php');
  }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Adminhome</title>
  <link rel="stylesheet" href="css/userhome.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel = "icon" href="img/fav1.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <section id="title">
    <div class="container-fluid" id="cf">
        
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar navbar-light bg-light">
    <div class="logo">
      <a href="adminhome.php">
      <img class = "logo" src="img/logo.png" alt="img">
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="adminhome.php"><i class="fa-solid fa-house-user"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create_admin.php"><i class="fa-solid fa-address-book"></i> Create New Admin</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa-solid fa-user"></i> Logout</a>
      </li>
      
    </ul>
    </div>
    </nav>
    
    
    <section id="cta">
        <h3 class="cta-heading">UIU Science Club</h3>
        <h1>Welcome Admin</h1>
        
    </section>
    </div>
    
  </section>

  <section id="Sec">
    

    <div class="row">


    <div class="p-col col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-calendar"></i> Event Management</h5>
        <a href="event.php" class="btn btn-lg btn-block btn btn-dark downbtn2">Add Event</a>
        <a href="update_event.php" class="btn btn-lg btn-block btn btn-dark downbtn2">Update Event</a>
        </div>
        </div>
    </div>

    <div class="p-col col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-clover"></i> Blog Management</h5>
        <a href="addblog.php" class="btn btn-lg btn-block btn btn-dark downbtn2">Add Blog</a>
        <a href="update_blog.php" class="btn btn-lg btn-block btn btn-dark downbtn2">Update Blog</a>
        </div>
        </div>
    </div>


    <div class="p-col col-lg-4 col-md-6 col-sm-12">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title"><i class="fa-solid fa-user-group"></i> Membership Request</h5>
        <a href="manage_request.php" class="btn btn-lg btn-block btn btn-dark downbtn2">Manage Request</a>
        </div>
        </div>
    </div>
    <div class="p-col col-lg-4 col-md-12 col-sm-12">
        
    </div>
    
   
    

  </div>

  </section>


  


  <!-- Footer -->

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
    
    
    <p>Developed by <a href="https://www.facebook.com/FerdousHasanSabuj/">Ferdous Hasan</a> & <a href="https://www.facebook.com/aaptaarefin">Arefin Ittesafun Abian</a>.<br>
    © Copyright UIU Science Club</p>

  </footer>

    
</body>

</html>