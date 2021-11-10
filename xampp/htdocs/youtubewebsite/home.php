
<!DOCTYPE html>
<html>
<head>
    <title>Company_Project</title>
    <link rel="stylesheet" href="cssfile.css">
	<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
	<link rel = "icon" href = "images/logo.png" type = "image/png">
</head>
<body style="height: 2000px;">
	<header>
	 
		 
		<div id = "header">
            
			<div id="logo">
			<!--	<img src="https://scontent.fnag5-1.fna.fbcdn.net/v/t1.6435-9/98427516_117702543277931_9057337654982475776_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=hshcp-8eCcsAX_UBhAd&_nc_ht=scontent.fnag5-1.fna&oh=3257ccf0c5ce286e3a50c14791d24b17&oe=60DB819D" class="header_menu_logo">-->
			</div>
			
			<span class="sign"><a class="act" href="login.php">LOG IN</a></span>
		    <span class="sign"><a class="act" href="register.php">REGISTER NOW</a></span>

			<div class="header container">
			 
				<div class="nav-bar">
				
				<div class="nav-list">
				  <div class="hamburger">
					<div class="bar"></div>
				  </div >
				  <ul >
					<li><a href="#slider_images" data-after="Home">Home</a></li>
					<li><a href="#projects" data-after="Service">PRODUCTS</a></li>
					<li><a href="#gallery" data-after="Projects">GALLERY</a></li>
					<li><a href="#contact" data-after="Contact">Contact</a></li>
				  </ul>
				</div>
			  </div>
			</div>
		 
		  <!-- End Header -->
	 </div>>
	</header>

	

	    <!--HOME PAGE SLIDE BAR-->
	<section id="slider_images">
			<div class="slider">
				<!-- fade css -->
				<div class="myslide fade">
					<div class="txt">
						<h1>PRODUCT</h1>
						<p>For Sale<br>If Required Sign Up <br> For More Details Contact Us</p>
					</div>
					<img src="images/slide5.png" style="width: 100%; height: 100%;">
				</div>
				
				<div class="myslide fade">
					<div class="txt">
						<h1>PRODUCT</h1>
						<p>For Sale<br>If Required Sign Up <br> For More Details Contact Us</p>
					</div>
					<img src="images/slide1.png" style="width: 100%; height: 100%;">
				</div>
				
				<div class="myslide fade">
					<div class="txt">
						<h1>PRODUCT</h1>
						<p>For Sale<br>If Required Sign Up <br> For More Details Contact Us</p>
					</div>
					<img src="images/slide3.png" style="width: 100%; height: 100%;">
				</div>
				
				<div class="myslide fade">
					<div class="txt">
						<h1>PRODUCT</h1>
						<p>For Sale<br>If Required Sign Up <br> For More Details Contact Us</p>
					</div>
					<img src="images/slide4.png" style="width: 100%; height: 100%;">
				</div>
				
				
				<!-- /fade css -->
				
				<!-- onclick js -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
				
				<div class="dotsbox" style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
					<span class="dot" onclick="currentSlide(4)"></span>
					<span class="dot" onclick="currentSlide(5)"></span>
				</div>
	</section>
		<!--END HOME PAGE SLIDE BAR-->

			
<!-- About Section -->
<section id="about">
	<div class="about container">
	<div class="col-left">
		
	</div>
	<div class="col-right">
		<h1 class="section-title">About <span>Milk Island</span></h1>
		<h2>  MEENA MILK SUPPLIER PRIVATE LIMITED </h2>
		<p>
			


		</p>
		
	</div>
	</div>
</section>
<!-- End About Section -->
					

         <!-- Projects Section -->
  
		 <section id="projects">
			<div class="projects container">
					<div class="projects-header">
						<h1 class="section-title"> BRIEF DESCRIPTION ABOUT PURITY OF PRODUCTS </h1>
					</div>
			 
					<div class="all-projects">
				        <div class="project-item">
				            <div class="project-info">
									<h1> MILK PRODUCT   </h1>
									<h2>BREIF NOTE ON THE PRODUCTS....! </h2>              
									
				            </div>
									<div class="project-img">
										<img src="images/img4.png" alt="img">
									</div>
						</div>
					</div>
			

					<div class="all-projects">
						<div class="project-item">
							<div class="project-info">
									<h1> BUTTER   </h1>
									<h2> BREIF NOTE ON THE PRODUCTS....! </h2>          
									
									
							</div>
									<div class="project-img">
										<img src="images/img3.png" alt="img">
									</div>
						</div>
					</div>
			

					
			</div>

	</section>


	<!-- End Projects Section -->

	 <!--=======-----------Card Section-----====================-->
		 <!-- <section id="food">
		<div>
		<h2 class="title-text" > What we offer</h2>
		 </div>
	   <div class="food-container"> -->
			   <!--======Card Start ----============-->
	   <!-- <article class="food-card">
			   <img src="images/order1.jpeg" class="food-img"alt="">
			   <div class="img-text">
				   <h1>Ghar ka Ghee</h1>
			   </div>
			   <div class="img-footer">
				   <div class="footer-icon">
					 <i class="fas fa-rupee-sign">1000 <h1>Per KG </h1>  </i>
				   </div>
				   <div class="footer-btn">
					  <a  href="index.php"> <button type="button"class="food-btn">Order Now</button>  </a> 
				   </div>
			   </div>    
			   </article>
			   <article class="food-card">
				 <img src="images/order2.jpeg"alt="">
				 <div class="img-text">
					 <h1>Malal Paneer</h1>
				 </div>
				 <div class="img-footer">
					 <div class="footer-icon">
					   <i class="fas fa-rupee-sign">300 <h1>Per KG </h1></i>
					 </div>
					 <div class="footer-btn">
					    <a  href="index.php"> <button type="button"class="food-btn">Order Now</button>  </a> 
					 </div>
				 </div>
				 </article>
				 <article class="food-card">
					 <img src="images/order3.jpeg" class="food-img"alt="">
					 <div class="img-text">
						 <h1>15% Offer</h1>
					 </div>
					 <div class="img-footer">
						 <div class="footer-icon">
						   <i class="fas fa-rupee-sign"> <del>150 </del> 125 </i>
						 </div>
						 <div class="footer-btn">
						    <a  href="index.php"> <button type="button"class="food-btn">Order Now</button>  </a> 
						 </div>
					 </div>
					 </article>

					 <article class="food-card">
						<img src="images/order4.jpeg" class="food-img"alt="">
						<div class="img-text">
							<h1>15% Offer</h1>
						</div>
						<div class="img-footer">
							<div class="footer-icon">
							  <i class="fas fa-rupee-sign"> <del>150 </del> 125 </i>
							</div>
							<div class="footer-btn">
							   <a  href="index.php"> <button type="button"class="food-btn">Order Now</button>  </a> 
							</div>
						</div>
						</article>

						<article class="food-card">
							<img src="images/order5.jpeg" class="food-img"alt="">
							<div class="img-text">
								<h1>15% Offer</h1>
							</div>
							<div class="img-footer">
								<div class="footer-icon">
								  <i class="fas fa-rupee-sign"> <del>150 </del> 125 </i>
								</div>
								<div class="footer-btn">
								   <a  href="index.php"> <button type="button"class="food-btn">Order Now</button>  </a> 
								</div>
							</div>
							</article>

							<article class="food-card">
								<img src="images/order6.jpeg" class="food-img"alt="">
								<div class="img-text">
									<h1>15% Offer</h1>
								</div>
								<div class="img-footer">
									<div class="footer-icon">
									  <i class="fas fa-rupee-sign"> <del>150 </del> 125 </i>
									</div>
									<div class="footer-btn">
									   <a  href="index.php"> <button type="button"class="food-btn">Order Now</button>  </a> 
									</div>
								</div>
								</article>

								
							<article class="food-card">
								<img src="images/order7.jpeg" class="food-img"alt="">
								<div class="img-text">
									<h1>15% Offer</h1>
								</div>
								<div class="img-footer">
									<div class="footer-icon">
									  <i class="fas fa-rupee-sign"> <del>150 </del> 125 </i>
									</div>
									<div class="footer-btn">
									   <a  href="index.php"> <button type="button"class="food-btn">Order Now</button>  </a> 
									</div>
								</div>
								</article>

								<article class="food-card">
									<img src="images/order8.jpeg" class="food-img"alt="">
									<div class="img-text">
										<h1>15% Offer</h1>
									</div>
									<div class="img-footer">
										<div class="footer-icon">
										  <i class="fas fa-rupee-sign"> <del>150 </del> 125 </i>
										</div>
										<div class="footer-btn">
										   <a  href="index.php"> <button type="button"class="food-btn">Order Now</button>  </a> 
										</div>
									</div>
									</article>
									<article class="food-card">
										<img src="images/order9.jpeg" class="food-img"alt="">
										<div class="img-text">
											<h1>15% Offer</h1>
										</div>
										<div class="img-footer">
											<div class="footer-icon">
											  <i class="fas fa-rupee-sign"> <del>150 </del> 125 </i>
											</div>
											<div class="footer-btn">
											 <a  href="index.php"> <button type="button"class="food-btn">Order Now</button>  </a>
											</div>
										</div>
										</article>

				
		</div>
		
	   
		
	</section>  -->
		<!--======End of Card =========-->
 
	  <!--=====End of Card Section=================-->
		  

   <!-- GALLERY-->
   

   <section id= "gallery">
       
	<div class="gallery container">
		<div class="inner-width">
			<div>
				<h1 style="font-size: 40px; ">GALLERY  </h1>
			</div>
			  <div class="border"></div>
			   <div class="gallery">

		   
				   <a href="images/img1.png" class="image">
					 <img src="images/img1.png" alt="">
				   </a>
				   
				   <a href="images/img2.png" class="image">
					<img src="images/img2.png" alt="">
				  </a>

				   <a href="images/img3.png" class="image">
					 <img src="images/img3.png" alt="">
				   </a>

				   <a href="images/img4.png" class="image">
					 <img src="images/img4.png" alt="">
				   </a>

				   <a href="images/img5.png" class="image">
					 <img src="images/img5.png" alt="">
				   </a>

				   <a href="images/img6.png" class="image">
					<img src="images/img6.png" alt="">
				  </a>

				  <a href="images/img7.png" class="image">
					<img src="images/img7.png" alt="">
				  </a>

				  <a href="images/img8.png" class="image">
					<img src="images/img8.png" alt="">
				  </a>

				  <a href="images/img9.png" class="image">
					<img src="images/img9.png" alt="">
				  </a>

			   </div>
	   </div>
 </div>
</section>


<!-- END GALLERY --> 

  



  <section class = "customers" id = "customers">
	<div class = "sec-width">
		<div>
		    <h1 style="font-size: 50px; "> CUSTOMER  </h1>>
		</div>
		<div class = "customers-container">
			<!-- single customer -->
			<div class = "customer">
				<div class = "rating">
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "far fa-star"></i></span>
				</div>
				<h3>We Loved it</h3>
				<p>Products from the Milk Island is very awsome and comming to the quality its impressive as
					 compare to the other frams. </p>
				<img src = "images/cus1.jpg" alt = "customer image">
				<span>Deepak Bethamalla, Telangana</span>
			</div>
			<!-- end of single customer -->
			<!-- single customer -->
			<div class = "customer">
				<div class = "rating">
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "far fa-star"></i></span>
				</div>
				<h3>Comfortable Prize</h3>
				<p>I am very happy for the rgular costumer for the Milks Island, Because they are providig the milk
					 products very comfortable prises and cheap prises for the costmers  </p>
				<img src = "images/cus2.jpg" alt = "customer image">
				<span> Chashku Pragya, Delhi</span>
			</div>
			<!-- end of single customer -->
			<!-- single customer -->
			<div class = "customer">
				<div class = "rating">
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "far fa-star"></i></span>
				</div>
				<h3>Magical Taste_buds</h3>
				<p>We love the products of milk Island, It takes me to heaven when we eat the sweets and when we drink the shakes 
					it was out-of-the-box. So every one use prducts of Milk Island and win the amazing offers.</p>
				<img src = "images/cus3.jpg" alt = "customer image">
				<span> Ramaswami, Chennai</span>
			</div>
			<!-- end of single customer -->
			<!-- single customer -->
			<div class = "customer">
				<div class = "rating">
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "fas fa-star"></i></span>
					<span><i class = "far fa-star"></i></span>
				</div>
				<h3>BOOM the Offers</h3>
				<p>We love the products of milk Island, We are daily costumers of this brand. Weekend offers in this is 
					very impressive its mostely favours for the clients we love it and lets join and you can also love it.</p>
				<img src = "images/cus4.jpg" alt = "customer image">
				<span> Anaga Mithal , Indoor</span>
			</div>
			<!-- end of single customer -->
		</div>
	</div>
</section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+91 9999142428</h2>
            <h2>+91 9534084912</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>anuragmehar06@gmail.com</h2>
            
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>MEENA MILK SUPPLIER PRIVATE LIMITEDFARIDABAD75, BHARAT VIHAR121009 FARIDABAD-FARIDABAD, INDIA</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->


  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
		 <h1>MEENA MILK SUPPLIER PRIVATE </h1>>
       <!-- <h1><span>D</span>eepak <span>B</span>ethamalla</h1> -->
      </div>
      <h2>Thanku for visiting the page</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      <p>Company project </p>
    </div>
  </section>
  <!-- End Footer -->


		<!-- /onclick js -->

	
<script src="jsfile.js"></script>


<script>
	$(".gallery").magnificPopup({
	  delegate: 'a',
	  type: 'image',
	  gallery:{
		enabled: true
	  }
	});
   </script>
   
</body>
</html>

