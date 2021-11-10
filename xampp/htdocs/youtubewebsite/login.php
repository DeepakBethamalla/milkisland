<?php
    session_start();

//   unset($_SESSION['cart']);
 

?>


<!DOCTYPE html>
<html>
 <head>
 <title> </title>


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
    color:#03a9f4;  
    text-decoration:none; 
}
.box a:hover{
    color:#18d8f1; 
    text-decoration:none;    
}
 </style>   

</head>
<body>


<?php
  include 'connection.php'; 

if(isset($_POST['submit'])){
    $email = $_POST['mail'];
    $password = $_POST['password'];

    $email_search = "SELECT * FROM `peopleinformation` WHERE  `Email` Like  '$email'";
   
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['Password'];

        $_SESSION['username'] = $email_pass['Name'];
        $_SESSION['userid'] = $email_pass['Id'];
        
        $pass_decode = password_verify($password,$db_pass);


        if( $pass_decode){
            ?>
            <script>
                alert("Login successfull");
                location.replace("Shopping/index.php");

             </script>   
            <?php
        }else{
            ?>
            <script>
                alert("Password Incorrect");
             </script>   
            <?php
        }

    }else{
        ?>
            <script>
                alert("Invalid email");
             </script>   
            <?php
    }

}
?>

<div class="main_div">
    <div class="box">
        <h1> Sign Up</h1>

         
       <form class="form" [formGroup]="regestration" id="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" >
           
            <div class="inputBox">
              <input type="Email" name="mail" autocomplete="off" required>
                <label>Email</label>
              </div>
            
            <div class="inputBox">
               <input type="password" name="password" autocomplete="off" required>
                <label> Password </label>
            </div>
            
              <input type="submit" value="Login" class="btn" name="submit"> 

        </form>
         
        <p> Don't Have an Account? <a href="http://localhost:8080/youtubewebsite/register.php"> Create Here </a> </p>
        
    </div>
    
</div> 

</body>
</html>


