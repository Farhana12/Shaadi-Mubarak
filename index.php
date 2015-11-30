
<!DOCTYPE html>
<html>
<head>
<title>Shaadi Mubarak</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Govihar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //fonts -->	
<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
<!--pop-up-->
<script src="js/menu_jquery.js"></script>
<!--//pop-up-->	
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
				<div class="logo">
					<h1><a  href="index.php"><span>Shaadi</span>Mubarak</a></h1>
				</div>
				<!--navbar-header-->
				<div class="header-dropdown">
					<div class="emergency-grid">
						<ul>
							<li>contact : </li>
							<li class="call">+91 9001234567</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="nav-top">
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt="" /></span>
					<ul class="nav1">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="contact.php">Contact us</a></li>
						
					</ul>
					<div class="clearfix"> </div>
					<!-- script-for-menu -->
							 <script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
							</script>
						<!-- /script-for-menu -->
				</div>
				<div class="dropdown-grids">
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
							<div id="loginBox">                
								<form id="loginForm" method="post">
									<div class="login-grids">
										<div class="login-grid-left">
											<fieldset id="body">
												<fieldset>
													<label for="email">Email Address</label>
													<input type="text" name="email" id="email">
												</fieldset>
												<fieldset>
													<label for="password">Password</label>
													<input type="password" name="password" id="password">
												</fieldset>
												<input type="submit" name="signin" id="login" value="Sign in">
												<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
											</fieldset>
											<span><a href="#">Forgot your password?</a></span>
											<div class="or-grid">
												<p>OR</p>
											</div>
											<div class="social-sits">
												<div class="facebook-button">
													<a href="#">Connect with Facebook</a>
												</div>
												<div class="chrome-button">
													<a href="#">Connect with Google</a>
												</div>
												<div class="button-bottom">
													<p>New account? <a href="signup.php">Signup</a></p>
												</div>
											</div>
										</div>
									</div>
								</form>
                                
                                <?php
								if(isset($_POST['signin']))
 {

	
$email_id=$_POST['email'];
$password=$_POST['password'];
echo $query="select * from register where email='$email_id' and password='$password'";
$result=mysql_query($query);

      if(mysql_num_rows($result)==1)
       {
		   ?>
		 <script type="text/javascript">
         alert("Successfully logged in");
       window.location.href = "index.php";
     </script>
     <?php
	$exe=mysql_fetch_assoc($result);
	$_SESSION['matri_id']=$exe['matri_id'];
	$_SESSION['email']=$exe['email'];
	header("location:index.php");
	
	    }
	
	else
	{
		
		?>
		 <script type="text/javascript">
         alert("Email Id or Password Incorrect!");
       window.location.href = "index.php";
     </script>
     <?php
    }
	

 }
 ?>
							</div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!-- banner -->
	<div class="banner">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 banner-left">
				<section class="slider2">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slider-info">
									<img src="images/1.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="images/2.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/3.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/4.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="images/5.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
			</div>
			<div class="col-md-8 banner-right">
				<div class="sap_tabs">	
					<div class="booking-info">
						<h2>Find someone who cares for what you love!</h2>
					</div>
					 <div id="horizontalTab" >
						
									<div class="facts">
										<div class="booking-form">
											<!---strat-date-piker---->
											<script>
												$(function() {
													$( "#datepicker,#datepicker1" ).datepicker();
												});
											</script>
											<!---/End-date-piker---->
											<!-- Set here the key for your domain in order to hide the watermark on the web server -->
											
											<div class="online_reservation">
													<div class="b_room">
														<div class="booking_room">
                                                        <form method="post" action="search.php">
															<div class="reservation">
																<ul>	
                                                                    <li  class="span1_of_1" style="margin-left: 25px;">
																		 <h5>Bride/Groom *</h5>
																		 <div class="book_date">
																			
																				 <select  class="frm-field required" name="gender">
																					<option value="Bride">Bride</option>
																					<option value="Groom">Groom</option>         
																					
																			  </select>
																			
																		 </div>					
																	 </li>
																	<li  class="span1_of_1 desti">
																		 <h5>Age from</h5>
																		 <div class="book_date">
																	
																				<!--<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>-->
								<input type="text" placeholder="Type age" class="typeahead1 input-md form-control tt-input" name="agef" required>
																	
																		 </div>					
																	 </li>
																	 <li  class="span1_of_1 left desti">
																		 <h5>Age to</h5>
																		 <div class="book_date">
																		
																			<!--<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> -->
																			<input type="text" placeholder="Type age" name="aget" class="typeahead1 input-md form-control tt-input" required>
																		
																		 </div>		
																	 </li>
																	 <li  class="span1_of_1 desti">
																		 <h5>Caste</h5>
																		 <div class="book_date">
																			
																				<!--<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>-->
																				<input type="text" placeholder="Type Caste" name="caste" class="typeahead1 input-md form-control tt-input" required>
																			
																		 </div>					
																	 </li>
                                                                     <li class="span1_of_1 left">
																		 <h5>Religion</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select name="religion" class="frm-field required">                                                                          <option value="null">Select</option>
																					<option value="Muslim">Muslim</option>
																					<option value="Hindu">Hindu</option>         
																					<option value="Chrisitian">Chrisitian</option>
																					<option value="Jain">Jain</option>
																					<option value="parsi">parsi</option>
																					<option value="Sikh">Sikh</option>
																			  </select>
																		 </div>	
																	</li>
																	<li class="span1_of_1 left tab-children">
																		 <h5>Language</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select name="language" onchange="change_country(this.value)" class="frm-field required">                                                                          <option value="null">Select</option>
																					<option value="Tamil">Tamil</option>
																					<option value="Malayalam">Malayalam</option>         
																					<option value="Assamese">Assamese</option>
																					<option value="Bengali">Bengali</option>
																					<option value="Bhojpuri">Bhojpuri</option>
																					<option value="English">English</option>
																			  </select>
																		 </div>	
																	</li>
                                                                    <li class="span1_of_1 economy" style="margin-left: 25px;">
																		 <h5>Education</h5>
																		 <div class="section_room">
																			  <select name="education" class="frm-field required">
																					<option value="null">Select</option>
																					<option value="Diploma">Diploma</option>
																					<option value="Engineer">Engineer</option> 
																					<option value="Medicine">Medicine</option>
																					<option value="IAS">IAS</option>
																					<option value="ph.D">ph.D</option>	  
																			  </select>
																		 </div>	
																	</li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
															
															<div class="reservation">
																<ul>	
																	 <li class="span1_of_3" style="margin-left: 230px;">
																			<div class="date_btn">
																				
																					<input type="submit" name="submit" value="Search" />
																				
																			</div>
																	 </li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
                                                            </form>
														</div>
														<div class="clearfix"></div>
													</div>
											</div>
											<!---->
										</div>	
									</div>
								
							 			        					            	      
						
					  </div>	
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	<div class="move-text">
		<div class="marquee">Register your profile with us free of cost.<a href="signup.php">Here</a></div>
		<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
        <script>
		  $('.marquee').marquee({ pauseOnHover: true });
		  //@ sourceURL=pen.js
		</script>
	</div>
	
	<div class="popular-grids">
		<!-- container -->
		<div class="container">
			<div class="popular-info">
				<h3>Newly Married Couples</h3>
			</div>
			<!-- slider -->
			<div class="slider">
				<div class="arrival-grids">			 
					 <ul id="flexiselDemo1">
						 <li>
							 <a href="products.php"><img src="images/a3.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.php"><img src="images/a2.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.php"><img src="images/a4.jpg" alt=""/>
							 </a>
						 </li>
						 <li>
							 <a href="products.php"><img src="images/a1.jpg" alt=""/>
							 </a>
						 </li>
						</ul>
						<script type="text/javascript">
						 $(window).load(function() {			
						  $("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover:true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems: 2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
				</div>
			</div>
			<!-- //slider -->
		</div>
		<!-- //container -->
	</div>
	<!-- popular-grids -->
	<!-- footer -->
	
	<!-- //footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">
				
					
					<div class="clearfix"> </div>
					<div class="copyright">
						<p>Copyrights © muslim marriage services </p>
					</div>
				</div>
		</div>
	</div>
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
			});
			$(window).load(function(){
			$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
			});
		});
	</script>		
</body>
</html>