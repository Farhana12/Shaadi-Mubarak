<?php
error_reporting(0);
require("config.php");?>
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
					<h1><a  href="index.php"><span>Muslim</span>Marriage Service</a></h1>
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
						<li><a href="index.php">Home</a></li>
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
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="faqs-top-grids">
				<div class="book-grids">
					<div class="col-md-6 book-left">
						<div class="book-left-info">
							<h3>Create Your Account</h3>
						</div>
						<div class="book-left-form">
							<form method="post" enctype="multipart/form-data">
								<p>First Name</p>
								<input type="text" name="fname" required>
								<p>Last Name</p>
								<input type="text" name="lname" required>
                                <p>Gender &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
								<input type="radio" name="gender" value="Groom">Male &nbsp; &nbsp; &nbsp;
                                <input type="radio" name="gender" value="Bride">Female</p>
                                <p>Age</p>
								<input type="text" name="age" required>
                                <p>Caste</p>
								<input type="text" name="caste" required>
                               
                                <p>Religion &nbsp; &nbsp; :  &nbsp; &nbsp;&nbsp; &nbsp;
								<select class="frm-field required" name="religion" style="border:#CCC 1px solid; width:150px;" required>
                                <option value="null">Select</option>
																					<option value="Muslim">Muslim</option>
																					<option value="Hindu">Hindu</option>         
																					<option value="Chrisitian">Chrisitian</option>
																					<option value="Jain">Jain</option>
																					<option value="parsi">parsi</option>
																					<option value="Sikh">Sikh</option>
																			  </select></p>
                                <p>Language :&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
								<select class="frm-field required" name="language" style="border:#CCC 1px solid; width:150px;" required>
                                <option value="null">Select</option>
																					<option value="Tamil">Tamil</option>
																					<option value="Malayalam">Malayalam</option>         
																					<option value="Assamese">Assamese</option>
																					<option value="Bengali">Bengali</option>
																					<option value="Bhojpuri">Bhojpuri</option>
																					<option value="English">English</option>
																			  </select></p>
                                                                              
                               <p>Education :&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
								<select class="frm-field required" name="education" style="border:#CCC 1px solid; width:150px;" required>
																					<option value="null">Select</option>
																					<option value="Diploma">Diploma</option>
																					<option value="Engineer">Engineer</option> 
																					<option value="Medicine">Medicine</option>
																					<option value="IAS">IAS</option>
																					<option value="ph.D">ph.D</option>	  
																			  </select></p>
								<p>Phone Number</p>
								<input type="text" name="phone" required>
								<p>Email Address</p>
								<input type="text" name="email" required>
								<p>Password</p>
								<input type="password" name="password" id="password" required>
								<p>Confirm Password</p>
								<input type="password" name="cpassword" id="password" required>
                                
                                <p>Upload Photo</p>
								<input type="file" name="file">
                                
								<label for="checkbox"><input type="checkbox" id="checkbox" required> <i>Remember me</i></label>
								<input type="submit" name="submit" id="login" value="Register">
							</form>
                            <?php

if(isset($_POST['submit']))
{
	
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$caste=$_POST['caste'];
$religion=$_POST['religion'];
$language=$_POST['language'];
$education=$_POST['education'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$cpassword=$_POST['cpassword'];

$path = "images/";
$valid_formats = array("jpg","bmp","jpeg","png");
  $name = $_FILES['file']['name'];
list($txt, $ext) = explode(".", $name);
   if(in_array($ext,$valid_formats)&& $_FILES['file']['size'] <= 1600*1200)
   {
    $upload_status = move_uploaded_file($_FILES['file']['tmp_name'], $path.$_FILES['file']['name']);
    if($upload_status)
	  {
         $new_name = $path.$name;
	
      }
	}
else
$msg="File size Max  KB or Invalid file format supports .jpg and .bmp";


		 $qry = "SELECT * FROM register WHERE email='$email'";
		$result = mysql_query($qry);
		if(mysql_num_rows($result) > 0) 
		{
		?>
<script>alert("Email Id Already Registered. Please try again with another Email id");
window.location.href = "index.php";
</script>
<?php
		}
		elseif(mysql_num_rows($result) == 0) 
		{
$select = "SELECT * from register ORDER BY sno DESC LIMIT 1";
	$select_result=mysql_query($select);
	if($select_result)
	{
		if(mysql_num_rows($select_result) == 1) 
		{
			$row=mysql_fetch_array($select_result);
			$row['sno'];
			$last =$row['sno']+1;
			 $rid='REG150'.$last;
		}
		else if(mysql_num_rows($select_result) == 0)
		{
			 $rid='REG1501';
		}
	}
 echo $query="INSERT INTO register (matri_id,fname,lname,gender,age,caste,religion,language,education,phone,email,password,photo,status)
 values ('$rid','$fname', '$lname','$gender','$age','$caste','$religion','$language','$education','$phone','$email', '$cpassword','$new_name','1')";
$res_query=mysql_query($query);
if($res_query)
{
	?>
<script type="text/javascript">
  window.alert("Registered successfully!");
  window.location.href = "index.php";
</script>
<?php	
}
else
{
?>
<script>alert("Registration Failed. Please Try Again");
window.location.href = "signup.php";
</script>
<?php
}	
	
}
}

?>
						</div>
					</div>
					<div class="col-md-6 book-left book-right">
						<div class="book-left-info">
							<h3>Recommended</h3>
						</div>
						<div class="book-left-bottom">
							<div class="book-left-facebook">
								<a href="#">Connect with Facebook</a>
							</div>
							<div class="book-left-chrome">
								<a href="#">Connect with Google</a>
							</div>
						</div>
						<ul>
							<li>Global and wide set of profiles including NRIs</li>
							<li>Free and easy profile registration</li>
							<li>Make checkouts simpler</li>
							<li>Safe and secure site. 100% privacy guaranteed</li>
							<li>Enhanced privacy features to protect your personal details</li>
							<li>Registered profiles are manually screened and validated to ensure they meet the norms of our site</li>
							<li>Easy payment options</li>
							<li>E-mail alerts when members contact each other</li>
							<li>User friendly interface and features for easy partner search</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- footer -->
	
	<!-- //footer -->
	<div class="footer-bottom-grids">
		<!-- container -->
		<div class="container">
				<div class="footer-bottom-top-grids">
					
					</div>
					
					
					<div class="clearfix"> </div>
					<div class="copyright">
						<p>Copyrights © muslim marriage services</p>
					</div>
				</div>
		</div>
	</div>
	<script defer src="js/jquery.flexslider.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/script.js"></script>	
</body>
</html>