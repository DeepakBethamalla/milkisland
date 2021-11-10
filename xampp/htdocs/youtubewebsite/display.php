



<!DOCTYPE html>
<html>
<head>
<title>Display REGESTRATION</title>
  <?php  include 'links.php' ?>;
 
  <style>
  
   

/* ############################################ */
#section{
    background-color: #222;
    background-size: 100%;
    background-repeat: no-repeat;
    font-family: 'Mulish',sans-serif;
    display: flex;
    justify-content: center;
    min-height: 100vh;
    width: 100%;
    color: white;
    /* overflow-x: hidden; */
}
table{
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0, 0,0, 0.034);
    border-radius: 10px;
    margin: auto;
    width: 100%;
}
th,td{
    border: 1px solid #f2f2f2;
    padding: 8px 30px;
    text-align: center;
    color: grey;
}
th{
    text-transform: uppercase;
    font-weight: 500;
}
td{
    font-size: 13px;
}
.email-style{
    font-size: 14px;
    color: gray;
    display: inline-block;
    background: #f2f2f2;
    -webkit-border-raidus:2px;
    -moz-border-raidus : 2px;
    border-radius: 2px;
    line-height: 30px;
    padding: 0 14px;
}
.post-class{
    text-transform: uppercase;
}
.fa{
  font-size: 18px;
}
.fa-edit{color:#63c76a}
.fa-trash{color:#FF0000}
h1{
  text-decoration: none;
  display: flex;
  justify-content: center;
  text-align: center;
  
}

.main_div{
    width: 100%;
    height: 100vh;
    position: relative;
}
.box{
    width: 400px;
    position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 50%;
    background: rgba(0,0,0,0.8);
    border-radius: 10px;

}

  </style> 

 
</head>
<body>
<div id=section>
  <div class="main-div">
      <h1> List of Registered People in Database </h1>

      <div class="center-div">
           <div class="table-responsive">
               <table>
                   <thead>
                       <tr>
                         <th> ID </th>
                         <th> Name </th>
                         <th> Mobile </th>
                         <th> Email </th>
                         <!-- <th>Password  </th>
                         <th> Cpassword </th> -->
                         <th colspan=2> Operations </th>
                       </tr>
                   </thead>
                   <tbody>

                        <?php

                        include 'connection.php';
                        $selectquery = "select * from peopleinformation";
                        $query = mysqli_query($con,$selectquery);
                        $nums = mysqli_num_rows($query);
                        while($res = mysqli_fetch_array($query)){
                        ?>
                          
                          <tr>
                                <td> <?php echo $res['Id']; ?> </td> 
                                <td> <?php echo $res['Name']; ?> </td>  
                                <td> <?php echo $res['Mobile']; ?> </td> 
                                <td> <span class="email-style"> <?php echo $res['Email']; ?> </span> </td>  
                                <!-- <td> <?php  echo $res['Password']; ?> </td> 
                                <td> <?php  echo $res[`CPassword`]; ?> </td>   -->
                                
                                <td> <a href="update.php?id= <?php echo $res['Id']; ?> " data-toggle="tooltip" data-placement="top" title="UPDATE"> <i class="fa fa-edit" aria-hidden="true"></i> </a>  </td>
                                <td> <a href="delete.php?id= <?php echo $res['Id']; ?> " data-toggle="tooltip" data-placement="top" title="DELETE"> <i class="fa fa-trash" aria-hidden="true"></i> </a> </td>
                          </tr>

                        <?php
                          }

                        ?>
                      
                   </tbody>
               </table>
           </div>
      </div>
  </div> 
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>
</html>
