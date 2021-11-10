<?php


if(!isset($_SESSION['username'] )){
    echo "you are logged out";
    header('location:home.php');
}

?>

<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> <?php echo  $_SESSION['username']; ?> Cart
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        $email_search = "select * from cart_list where userid=". $_SESSION['userid'];
      
   
                        $query = mysqli_query($con,$email_search);
                        $email_count = mysqli_num_rows($query);
                       
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$email_count</span>";
                        

                        ?>
                    </h5>
                </a>
            </div>
            <span class="sign"><a class="act" href="http://localhost:8080/youtubewebsite/home.php">LOG OUT</a></span>
        </div>

    </nav>
</header>

 

 






