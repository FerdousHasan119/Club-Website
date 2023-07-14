<?php 
error_reporting(0);
ini_set('display_errors', 0);
    session_start();
    $msg = $_SESSION['member_request'];
    $_SESSION['member_request'] = null;
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Membership Request</title>
    <link rel = "icon" href="img/fav1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/addevent.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <style>
      button {
                float: left;
                background: #198754;
                padding: 10px 22px;
                color: #fff;
                border-radius: 8px;
                margin-right: 17px;
                border: none;
            }
            button:hover{
                opacity: .7;
                cursor: pointer;
            }
    </style>
</head>

<body>
    
<?php 

    
    
?> 
    
    <section id="cta">
        <form class="form" action="member_request_process.php" method="POST">
          <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12" id=col1>
              <div id="log-title">
                <h3 class="cta-heading"><i class="fa-solid fa-handshake-angle"></i> Membership Request</h3>
                <center><h5>Please send money 350৳ through Bkash no: 01798985289.Then Provide the Transaction ID below.</h5></center>
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
                <label for="Package Name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" required>
              </div>
              <br>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email ID" required>
              </div>
              <br>
              <div class="form-group">
                <label for="stdid">Student ID</label>
                <input type="text" class="form-control" name="studentid" placeholder="Student ID" required>
              </div>
              <br>
              <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control" name="department" placeholder="Department" required>
                </div>
                <br>
               <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="text" class="form-control" name="contact" placeholder="Please enter contact number" required>
                </div>
                <br>
                <div class="form-group">
                <label for="tnxID">Transaction ID</label>
                <input type="text" class="form-control" name="tnxID" placeholder="Please enter transaction id" required>
                </div>

                <br>
              <button type="submit" class="btn btn-lg btn-block btn btn-success">Submit</button>
              
            
            </div>
          </div>
        </form>
        <br>
        <button onclick="window.location.href='userhome.php'" type="button"><i class="fa-solid fa-house"></i> Return Home</button>
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
    <script src="https://use.fontawesome.com/2c7ebecd35.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
