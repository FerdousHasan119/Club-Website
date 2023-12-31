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
include '_dbconnect.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $image = $_POST['image_name'];
  $location = $_POST['location'];
  $time = $_POST['time'];
 
  $description = $_POST['description'];
;

      $sql = "UPDATE `event` SET `name` = '$name', `img` = '$image', `details` = '$description', `e_time` = '$time', `location` = '$location' WHERE `event`.`id` = $id;";

      $result = mysqli_query($con, $sql);
      session_start();
      $_SESSION['update'] = "Successfully updated in the Database";
     
     header("Location: update_event.php");
      $con->close();
      exit();
      
  
}

    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
    $id = $queries['id'];
    //echo $id;
    $_SESSION['request_id'] = $id;
    $sql = "select * FROM event WHERE id = $id";
    $result1 = mysqli_query($con, $sql);
    
    $num1 = mysqli_num_rows($result1);
    $html = "";
    
    if ($num1 > 0) {
        if ($row = $result1->fetch_assoc()) {
            $name = $row["name"];
            $img = $row["img"];
            $e_time = $row["e_time"];
            $location = $row["location"];
            $details= $row["details"];
           
       
        }
    }
   
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Update Product</title>
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
        <form id="update_from" class="form" action="update_eventprocess.php" method="POST" novalidate>
          <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12" id=col1>
              <div id="log-title">
                <h3 class="cta-heading"><i class="fa-solid fa-calendar"></i> Update Event</h3>
               
              </div>
              <div class="form-group"> 
                <input hidden type="text" name="id" value="<?php echo $id ?>">
              </div>
              <div class="form-group">
                <label for="name">Event Name</label>
                <input type="text" class="form-control" name="name" placeholder="Event Name" value="<?php echo $name ?>"required>
              </div>
              <!-- <div class="form-group">
                <label for="Event Image">Event Image</label>
                <div class="row">
                  <div class="col-md-6">
                    <img src="event img/<?php echo $img ?>" width="300px" class="rounded mx-auto d-block image-preview">
                  </div>
                  <div class="col-md-6">
                    <input type="file" class="form-control" name="image" _value="<?php echo $img ?>" value="<?php echo $img ?>"required/> 
                    <input type="hidden" name="image_name" value="<?php echo $img ?>"/>
                  </div>
                </div>
              </div> -->
              <div class="form-group">
                <label for="Location">Event location</label>
                <input type="text" class="form-control" name="location" placeholder="Location" value="<?php echo $location ?>"required>
              </div>
             
              <div class="form-group">
                  <label for="Time">Event Time</label>
                  <input type="text" class="form-control" name="time" placeholder="Event Time" value="<?php echo $e_time ?>"required>
              </div>
              <div class="form-group">
              <label for="Description">Description</label>
              <textarea class="form-control" name="description" rows="4" cols="50" placeholder="Description" required><?php echo $details ?> </textarea>
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
    <script src="https://use.fontawesome.com/2c7ebecd35.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
      $('input[name=image]').on('change', function() {
        var file = $('input[name=image]').get(0).files[0];
        console.log(file);
        var blob = URL.createObjectURL(file)
        document.querySelector('.image-preview').src= blob;
        $('input[name=image_name]').val(file.name);
      });

      $("#update_from").validate({

        rules: {
          name_1: {
                required: true
            },
            price: {
                required: true,
            },
            type: {
                required: true,
            },
            stock: {
                required: true,
            },
            description: {
              required: true,
            },
            image: {
              required: false
            }
        },
        messages: {
          name_1: {
                required: "this field is required"
            },
            price: {
              required: "this field is required"
            },
            type: {
              required: "this field is required"
            },
            stock: {
              required: "this field is required"
            },
            description: {
              required: "this field is required"
            }
        },

          
      });

    </script>
    
</body>
</html>
