<?php
        include '_dbconnect.php';
        $q =  "SELECT `id`, `name`, `details`, `e_time`, `location`, `img` FROM `event`;";
        $run = mysqli_query($con, $q);
        if(mysqli_num_rows($run)>0){
          while($row = $run->fetch_assoc()){
          $id=$row['id'];
          $first_name = $row['name'];
          $first_det = $row['details'];
          $first_time = $row['e_time'];
          $first_loc = $row['location'];
          $first_img = $row['img'];
          break;
          }
        }       
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Userhome</title>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    
    <div class="logo">
      <a href="userhome.php">
      <img class = "logo" src="img/logo.png" alt="img">
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto test">
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="userhome.php"><i class="fa-solid fa-house-user"></i> Home</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="view_blog_list.php"><i class="fa-brands fa-blogger-b"></i> Blogs</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="#event"><i class="fa-solid fa-calendar-days"></i> Events</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="contact_list.php"><i class="fa-regular fa-address-card"></i> Contact us</a>
      </li>
      <li class="nav-item">
        <a id= "test2" class="nav-link" href="member_request.php"><i class="fa-solid fa-right-to-bracket"></i> Join US</a>
      </li>

      <li class="nav-item">
        <a id= "test2" class="nav-link" href="login.php"><i class="fa-solid fa-user"></i> Admin Login</a>
      </li>
      
    </ul>
    </div>
    </nav>
    
    
    <section id="cta">

        <h3 class="cta-heading">UIU Science Club</h3>

        <h4>The science of today is the technology tomorrow </h4>
        
        <button type="button"class="btn btn-success btn-lg downbtn2"><i class="fa-brands fa-apple"></i> Download</button>
        <button type="button"class="btn btn-outline-success btn-lg downbtn2"><i class="fa-brands fa-google-play"></i> Download</button>
        

        
    </section>
    
    </div>
  </section>


<section id="cta2">
        <div class="left_panel">
          <img class="uiu" src="img/uiu.jpg" alt="UIU Image" width="630" height="400">

        </div>
        <div class="right_panel">
            <h1>Our Vision</h1>
            <p>
            The vision of the Science club is to encourage more and more students to participate in regional, national and international-level science exhibitions so as to expose them to various ideas and technology used in scientific models.
            </p>
        </div>
</section>


<section id="event">
<h2>Events</h2>
<p>Find our upcoming events here</p>
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" interval= "1000">
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="event img/<?php echo $first_img; ?>" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $first_name; ?></h5>
        <p><i class="fa-solid fa-calendar"></i> <?php echo date('h:i:s a, m/d/Y', strtotime($first_time));?> &nbsp <i class="fa-solid fa-location-dot"></i> <?php echo $first_loc; ?><br><br><?php echo $first_det; ?></p>
        <button onclick="going(<?php echo $row['id']; ?>)" class="CA btn btn-lg btn-block btn btn-light"><i class="fa-solid fa-thumbs-up"></i> Going</button>
      </div>
    </div>
    <?php
    if(mysqli_num_rows($run)>0){
    while($row = $run->fetch_assoc()){
      
      
    ?>
    <div class="carousel-item">
      <img class="d-block w-100" src="event img/<?php echo $row['img'];?>" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $row['name'];?></h5>
        <p><i class="fa-solid fa-calendar"></i> <?php echo date('h:i:s a, m/d/Y', strtotime($row['e_time']));?> &nbsp <i class="fa-solid fa-location-dot"></i> <?php echo $row['location'];?><br><br><?php echo $row['details'];?></p>
        <button onclick="going(<?php echo $row['id']; ?>)" class="CA btn btn-lg btn-block btn btn-light"><i class="fa-solid fa-thumbs-up"></i> Going</button>
      </div>
    </div>
    <?php
      
      
    }
  }
  ?>
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<script>
  function going(id){
    location.assign('event_p.php?id='+id);
  }
</script>
  

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
    
    
    <p>Developed by <a href="https://www.facebook.com/FerdousHasanSabuj">Ferdous Hasan</a> & <a href="https://www.facebook.com/aaptaarefin">Arefin Ittesafun Abian</a>.<br>
    © Copyright UIU Science Club</p>

  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>