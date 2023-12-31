<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel = "icon" href="img/fav1.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <section id="title">
    <div class="container-fluid" id="cf">
    
        <form class="form" action="loginprocess.php" method="POST">

        <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12" id=col2>
                <div class="logo">
                <img class = "logo" src="img/logo.png" alt="img">
                </div>
                <div class="view">
                <img class= "pic" src="img/2.svg" alt="img">
                </div>
            
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12" id=col1>
        <div id="log-title">
                    <h2 id="pad"><i class="fa-solid fa-user"></i>Admin Login</h2>
                </div>
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control rounded-pill gap2" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <div class="log-bt form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control rounded-pill gap2" name="password" placeholder="Password" required>
                </div>
                
                <button class="CA btn btn-lg btn-block btn btn-success rounded-pill gap3" type="submit">Login</button>
                <div class="gap2">
                <a class="ret-home" href="userhome.php"><i class="fa-solid fa-house-user"></i> Return Home</a>
                </div>
                 
              </div>
        </div>
        
        </form>

    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>