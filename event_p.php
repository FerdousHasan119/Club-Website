<?php
$id=$_GET['id'];
        try{
            $conn=new PDO('mysql:host=localhost:3306;dbname=club;','root','');
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            
            $sqlquerystring="SELECT participant FROM event WHERE id=$id";
            $returnobj=$conn->query($sqlquerystring);
            $tabledata=$returnobj->fetchAll();
            foreach($tabledata AS $row){
                $p=$row ['participant'];
            }
            $p2=$p+1;

            $sqlquerystring1="UPDATE event
            SET participant='$p2'
            WHERE id=$id";

            $conn->exec($sqlquerystring1);

            ?>
            <script>location.assign('userhome.php#event')</script>
            <?php
            
        }
        catch (PDOException $ex){
            ?>
                <script>location.assign('userhome.php')</script>
            <?php
        }
?>