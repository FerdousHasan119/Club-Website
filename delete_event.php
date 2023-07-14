<?php

	$id = $_GET["id"];

	try{
        $conn=new PDO('mysql:host=localhost:3306;dbname=club;','root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sqlquerystring="DELETE FROM event WHERE id='$id'";

        $conn->exec($sqlquerystring);

            ?>
              <script>location.assign('update_event.php')</script>
            <?php
    }
    catch (PDOException $ex){
        ?>
            <script>location.assign('update_event.php')</script>
        <?php
    }
	
    session_start();
	$_SESSION['delete'] = "Successfully deleted in the Database";

?>