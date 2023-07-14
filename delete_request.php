<?php

	$id = $_GET["id"];

	try{
        $conn=new PDO('mysql:host=localhost:3306;dbname=club;','root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sqlquerystring="DELETE FROM mrequest WHERE id='$id'";

        $conn->exec($sqlquerystring);

            ?>
              <script>location.assign('manage_request.php')</script>
            <?php
    }
    catch (PDOException $ex){
        ?>
            <script>location.assign('manage_request.php')</script>
        <?php
    }
	


?>