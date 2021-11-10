<?php

$username ="root";
$password ="";
$server ='localhost';
$db='product';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    // echo "Connection Successful";

     ?>
        <script>
            alert("Connecton Successful")
        </script>
     <?php

}else{
    // echo " Not Connected ";

    ?>
    <script>
        alert("Connecton Failed")
    </script>
 <?php
}

?>