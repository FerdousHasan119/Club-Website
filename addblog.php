<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php
  session_start();
  $admin = $_SESSION['admin'];
  if($admin==null){
    header('location:login.php');
  }
?>
<?php 
    $msg = $_SESSION['add_blog'];
    $_SESSION['add_blog'] = null;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Add Blog</title>
    <link rel = "icon" href="img/fav1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/addevent.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
   
</head>

<body>
<?php
include('header2.html');
?>
    

<section id="cta">
        <form id="update_from" class="form" action="blog_entry.php" method="POST" novalidate>
          <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12" id=col1>
              <div id="log-title">
                <h3 class="cta-heading"><i class="fa-solid fa-calendar"></i> Add Blog</h3>
                <?php if ($msg) { ?>                
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <?php echo $msg ?>
                        </div>
                    </div>

                </div>
              <?php } ?>
              </div>

              <div class="form-group">
                <label for="name">Blog Name</label>
                <input type="text" class="form-control" name="bname" placeholder="Enter Blog Name" required>
              </div>
              
              
              <div class="form-group">
              <label for="Product Details">Blog content</label>
              <textarea class="form-control" name="description" rows="4" cols="50" placeholder="Enter Blog Description" required> </textarea>
              </div>

        
              <button type="submit" class="btn btn-lg btn-block btn btn-success">Submit</button>
            </div>
          </div>
        </form>
</section>
    
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