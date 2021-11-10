<?php

include 'connection.php';

$id = $_GET['id'];

$deletequery = "DELETE FROM `peopleinformation` WHERE Id = $id " ;

$query = mysqli_query($con,$deletequery);

if($query){
    ?>
        <script>
            alert("data deleted proper");
        </script>   
    <?php
}else{
        ?>
        <script>
            alert("data not deleted proper");
        </script>   
        <?php
    }
    
header('location:display.php')
?>