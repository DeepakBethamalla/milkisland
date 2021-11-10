
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update regestration form</title>
   <?php  include 'links.php'  ?>
 
   
     
<style>
    *{
        margin:0;
        padding:0;

    }
.main_div{
    
    width: 100vw;
    height: 100vh;
    position: relative;
    background:#fff;
}
.box{
    width: 400px;
    position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 50px;
    background: rgba(0,0,0,0.8);
    border-radius: 10px;
}

.box h1{
    margin-bottom: 30px;
    color: #fff;
    text-align: center;
    text-transform: capitalize;
}
.box .inputBox{
    position: relative;
    margin-top:30px;
    margin-bottom:30px;
}
.box .inputBox input{
    width: 100%;
    padding: 10px;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    border: none;
    border-bottom: 1px solid #fff;
    background-color: transparent;
    outline: none;
}
.box .inputBox label{
    position: absolute;
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    transition: 0.5s;
}
.box input[type="submit"]{
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #03a9f4;
    padding: 8px 16px;
    border-radius: 5px;
    font-size: 14px;
}

.box input[type="submit"]:hover{
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #18d8f1;
    padding: 8px 16px;
    border-radius: 5px;
    font-size: 14px;
}
.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label{
    top: -20px;
    left: 0;
    color: #03a9f4;
    font-size: 12px;
}

.box p{
    color:#fff;
    margin-top:20px;    
}
.box a{
    color:blue;   
}
.box a:hover{
    color:#18d8f1;    
}

 </style>    

</head>
<body>

<div class="main_div">
    <div class="box">
        <h1 style="font-family: 'Benne', serif;"> Update Account</h1>
        <form method="POST" action="">

           <!-- update from from here -->
           <?php
            include 'connection.php';
             $ids = $_GET['id']; 
             $showquery = "select * from peopleinformation where id={$ids}";
             $showdata = mysqli_query($con,$showquery);
             $arrdata = mysqli_fetch_array($showdata);

            if(isset($_POST['submit'])){

                $idupdate = $_GET['id']; 

                $name = $_POST['name'];
                $phone = $_POST['mobile'];
                $email = $_POST['mail'];
                $Password = $_POST['password'];
                $cpassword = $_POST['cpassword'];
                
                 $query = "UPDATE `peopleinformation` SET `Name`='$name',`Mobile`='$phone',
                    `Email`='$email',`Password`='$Password',`CPassword`='$cpassword' WHERE Id='$idupdate'" ;
            
            $res = mysqli_query($con,$query);  

            if($res){
                ?>
                    <script>
                        alert("data updated proper");
                    </script>   
                <?php
            }else{
                    ?>
                    <script>
                        alert("data not updated proper");
                    </script>   
                    <?php
                }
            }

            ?>

            <div class="inputBox">
              <input type="text" name="name" autocomplete="off" value="<?php echo $arrdata['Name']; ?> "  required>
              <label>Username</label>
            </div>

             <div class="inputBox">
               <input type="number" name="mobile" autocomplete="off" value="<?php echo $arrdata['Mobile']; ?>"  required>
               <label>Phone Number</label>
             </div>

             <div class="inputBox">
               <input type="Email" name="mail" autocomplete="off" value=" <?php echo $arrdata['Email']; ?>"   required>
               <label>Email</label>
             </div>

             <div class="inputBox">
                 <input type="text" name="password" autocomplete="off"  value=" <?php echo $arrdata['Password']; ?>" required>
                 <label>Password</label>
             </div>

             <div class="inputBox">
               <input type="password" name="cpassword" autocomplete="off" required>
                <label>Conform Password </label>
               </div>

             <input type="submit" name="" value="Update">
        </form> 
            
         
         
     </div>
</div>


</body>
</html>





