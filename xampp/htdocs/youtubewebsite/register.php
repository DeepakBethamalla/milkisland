<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>REGESTRATION</title>
   <?php  include 'links.php'  ?>

  <style>
   *{
    margin-top: 5px;
    padding: 0;
    box-sizing: border-box;
}
.main_div{
    width: 100vw;
    height: 100vh;
    position: relative;
    background:#fff;
    margin-top:10px;
}
.box{
    width: 400px;
    position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,0.8);
    border-radius: 10px;
    padding-left: 30px;
    padding-right: 30px;
}
.box h1{
    font-family: 'Benne', serif;
    color: #fff;
    margin-top:20px;
    font-size:30px;
    text-align: center;
    text-transform: capitalize;
}
.box .inputBox{
    position: relative;
    margin-top:40px;
    margin-bottom:40px;
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
    color:#03a9f4;  
    text-decoration:none; 
}
.box a:hover{
    color:#18d8f1; 
    text-decoration:none;    
}

.form .btn{
    background: linear-gradient(to left, #743bd5,#9face6);
    border-radius: 6px;
    border: none;
    outline: none;
    color: #fff;
    display: block;
    font-family:'Monteserrat',sans-serif;
    font-size: 16px;
    padding: 15px 0;
    margin-top: 20px;
    width: 100%;
    font-weight: bold;
    text-transform: uppercase;
    transition: all 1s ease;
}

.form .btn:hover{
   background:linear-gradient(to right, #74ebd5),#9face6 ; 
   
}
</style>

</head>
<body>

<div class="main_div" >
    <div  class="box" >
              <h1 > Create Account</h1>

       <form class="form" [formGroup]="regestration" id="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" >
           <div class="inputBox">
            <input type="text" name="name" autocomplete="off" required>
                <label> username </label>
            </div>
            <div class="inputBox">
              <input type="text" name="mobile" autocomplete="off" required>
                <label> Phone Number </label>
              </div>
            <div class="inputBox">
              <input type="Email" name="mail" autocomplete="off" required>
                <label>Email</label>
              </div>
            
            <div class="inputBox">
               <input type="password" name="password" autocomplete="off" required>
                <label> Password </label>
            </div>

            <div class="inputBox">
               <input type="password" name="cpassword" autocomplete="off" required>
                <label>Conform Password </label>
               </div>

            <input type="submit" value="Submit" class="btn" name="submit">  

        </form>
         
        <p> Already Have an Account? <a href="login.php"> Login Here </a> </p>
        
    </div>
    
</div> 

</body>
</html>


<?php
include 'connection.php';

if(isset($_POST['submit'])){
   
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $phone = mysqli_real_escape_string($con,$_POST['mobile']);
    $email = mysqli_real_escape_string($con,$_POST['mail']);
    $Password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

    $pass = password_hash($Password ,PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword,PASSWORD_BCRYPT);

    $emailquery = "SELECT `Id`, `Name`, `Mobile`, `Email`, `Password`, `CPassword` FROM `peopleinformation` WHERE `Email`='$email'";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
      ?>
      <script>
          alert("Email already exists");
       </script>   
      <?php
    }else{
       if($Password === $cpassword){
         $insertquery = " INSERT INTO `peopleinformation`(`Id`, `Name`, `Mobile`, `Email`, `Password`, `CPassword`)
         VALUES ('','$name','$phone','$email','$pass','$cpass')";
         
         $res = mysqli_query($con,$insertquery);  

         if($res){
            ?>
                <script>
                    alert("data inserted proper");
                 </script>   
            <?php
         }else{
             ?>
             <script>
                 alert("data not inserted proper");
             </script>   
             <?php
         }

       }else{
         ?>
         <script>
             alert("Conform password not Matched");
         </script>   
         <?php
       }
    }
    
}

?>

