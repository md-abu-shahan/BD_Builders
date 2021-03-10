<!DOCTYPE html>
<html>
	<head>
		<title>Categories</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style1.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script>
			function registration_work(i){
				if(i==1){
					var a=document.getElementById('registration_pop_up');
					a.style.display='block';
					//a.style.color='red';
					document.getElementById('forget_password_pop_up').style.display='none';
					document.getElementById('login_pop_up').style.display='none';
				}else{
					document.getElementById('registration_pop_up').style.display='none';
					
				}
			}
			
			function login(i){
				if(i==1){
					document.getElementById('login_pop_up').style.display='block';
					document.getElementById('registration_pop_up').style.display='none';
					document.getElementById('forget_password_pop_up').style.display='none';
				}else{
					document.getElementById('login_pop_up').style.display='none';

				}
			}
			
			function forget_work(i){
				if(i==1){
					document.getElementById('forget_password_pop_up').style.display='block';
					document.getElementById('login_pop_up').style.display='none';
					document.getElementById('registration_pop_up').style.display='none';
					
				}else{
					document.getElementById('forget_password_pop_up').style.display='none';
				}
			}

		</script>
	</head>
	
	
	<body>
	<?php
					include("include/conn.php");
					if(isset($_REQUEST['reg']))
					{
						$name=$_REQUEST['firstname'];
						$l_name=$_REQUEST['lastname'];
						$pass=$_REQUEST['password'];
						$c_pass=$_REQUEST['Confirm_password'];
						$gmail=$_REQUEST['Email'];
						$loc=$_REQUEST['City_Name'];
						$user=$_REQUEST['UserId'];
						$name=$name." ".$l_name;
						
						$registration="select * from login where email='$gmail'";
						$registration2="select * from login where email='$user'";
						$res=mysqli_query($conn,$registration);
						$res1=mysqli_query($conn,$registration2);
						$f=mysqli_num_rows($res);
						$f1=mysqli_num_rows($res1);
						
						
						if($pass != $c_pass){
							echo "<script type='text/javascript'>alert(\"passward are not matching!!\");</script>";
						}
						else if($f==0 && $f1==0)
						{
						
							$registration1="insert into login values ('$gmail','$pass','$user', '$loc','$name')";
							mysqli_query($conn,$registration1);
							echo "<script type='text/javascript'>alert(\"Successfully!!\");</script>";
						}else{
							echo "<script type='text/javascript'>alert(\"User Name or Email is already in used!!\");</script>";
						}
						
						
					}
					else if(isset($_REQUEST['go']))
					{
						include("include/conn.php");
						$mail=$_REQUEST['email'];
						$password=$_REQUEST['password'];
						//$remember=isset($_POST['remember'])==true?1:0; 
						
						$loginQuery="SELECT * FROM login WHERE (email='$mail' OR user_id='$mail') AND pass='$password'";
						$res1=mysqli_query($conn,$loginQuery);
						$f1=mysqli_num_rows($res1);
						if($f1==0)
						{
							header("Location:index.php");
						}
						else 
						{
							header("Location:For Employers.php");
						}
						
					}
				?>
		<h1 class="title">
		
			<a href="index.php" >BD Builders</a>
		 </h1>
		<div class="sub_header">
			<a href="index.php">Home</a>    
			<a href="For Employers.php">For Employers  </a>
			<a href="For Candidates.php">For Candidates  </a>
			<a href="Post A Job.php">Post A Job  </a>
			<a href="Categories.php">Categories  </a>
			<a href="#" onClick="login(1)"> Login </a>
			<a href="#" onClick="registration_work(1)"> Register</a>
			
		</div>
		
		<div  id = "registration_pop_up" class="popup_main_div">
			<div  class="popup_registration_div">
				 <i id="close_color" style="float:right; cursor:pointer;" class="fa fa-close" onClick="registration_work(2)"></i><br>
				<form action="index.php">
				<fieldset>
				<legend style="color:green;"><b>Personal information:</b></legend>
				  <b>First name:</b><br>
				  <input style="width:250px; height:30px;" type="text" name="firstname" value="" required=""><br><br>
				  <b>Last name:</b><br>
				  <input style="width:250px; height:30px;" type="text" name="lastname" value=""><br><br>
				  <b>Gender:</b><br>
				  <input type="radio" name="gender" value="male"> Male
				  <input type="radio" name="gender" value="female"> Female
				  <input type="radio" name="gender" value="other"> Other<br><br>
				  <b>Age:</b><br>
				  <input style="width:250px; height:30px;" type="Number" name="age" value="">
				  <br><br>
				  <b>UserId:</b><br>
				  <input style="width:250px; height:30px;" type="text" name="UserId" value="" required="">
				  <br><br>
				  <b>Email:</b><br>
				  <input style="width:250px; height:30px;" type="email" name="Email" value="" required="">
				  <br> <br>
				  <b>City Name:</b><br>
				  <input style="width:250px; height:30px;" type="text" name="City_Name" value="" required="">
				  <br><br>
				  <b>Password:</b><br>
				  <input style="width:250px; height:30px;" type="password" name="password" value="" minlength="8" required="" >
				  <br><br>
				  <b>Confirm Password:</b><br>
				  <input style="width:250px; height:30px;" type="password" name="Confirm_password" value="" required="">
				  <br><br>
				  <input style="width:100px; height:40px;background:mediumseagreen; color:white;" type="submit" name="reg" value="Register">
				  
				</fieldset>
			</form> 
			<p>Already Registered?</p>
			<a href="#" onClick="login(1)"> <u>Click Here</u> </a>
					
			</div>
					
		</div>
		
		<div id = "login_pop_up" class="popup_main_div">
				<div class="popup_registration_div">
					<i id="close_color1" style="float:right; cursor:pointer;" class="fa fa-close" onClick="login(2)"></i><br>
					<form action="index.php">
			<fieldset >
				<legend style="color:green;"><b>Login information:</b></legend>
			  <b>Email or UserId:</b><br>
			  <input  style="width:250px; height:30px;" type="text" name="email" value="" required="">
			  <br>
			  <b>Password:</b><br>
			  <input  style="width:250px; height:30px;" type="password" name="password" value="" required="">
			  <br><br>
			  <input style="width:100px; height:40px;background:mediumseagreen; color:white;" type="submit" value="Login" name="go">
			  
			  
			</fieldset>
			</form> 
			<p>Forgot your password?</p>
			<a href="#" onClick="forget_work(1)"> <u>Click Here</u> </a>
			<p>Not Registered yet?</p>
			<a href="#" onClick="registration_work(1)"> <u>Click Here</u> </a>
				</div>
		</div>
			
			<div id = "forget_password_pop_up" class="popup_main_div">
				<div class="popup_registration_div">
					<i id="close_color1" style="float:right; cursor:pointer;" class="fa fa-close" onClick="forget_work(2)"></i><br>
					<form>
						<fieldset style="text-align:center;">
							<legend style="text-align:center;"><b>Reset your password<b></legend>
							
							<p>Enter your user account's verified email address and we will send you a password reset link.</p>
							
							<input style="width:400px; height:30px;" type="email" placeholder="Enter Your Email Address" name="rem" required="" class="popup_registration">		
							
							<button style="margin:0 auto;height:35px;margin-top:15px; background:mediumseagreen; color:white">Recover
							</button>
						</fieldset>
					</form>
				</div>
			</div>
		
		<div class="Categories">
					
			<h2><u>Popular Categories (Demo Photos)</u><h2>
					
			<img src="Images/img.png" height="200px" width="200px" border="1px solid black">
			<img src="Images/job2.jpg" height="200px" width="200px" border="1px solid black"><br><br>
			<img src="Images/img1.png" height="200px" width="200px" border="1px solid black">
			<img src="Images/img2.png" height="200px" width="200px" border="1px solid black"><br><br>
			<img src="Images/img3.png" height="200px" width="200px" border="1px solid black">
			<img src="Images/img5.png" height="200px" width="200px" border="1px solid black"><br><br>
			<img src="Images/img6.png" height="200px" width="200px" border="1px solid black">
			<img src="Images/job1.jpg" height="200px" width="200px" border="1px solid black"><br><br>
			<img src="Images/writer.png" height="200px" width="200px" border="1px solid black">
			<img src="Images/job4.jpg" height="200px" width="200px" border="1px solid black"><br><br>
			<img src="Images/job5.jpg" height="200px" width="200px" border="1px solid black">
			<img src="Images/job6.jpg" height="200px" width="200px" border="1px solid black"><br><br>
			
					
		
		
		</div>
		
		
		
		<div class="slider">
					
			<div class="slideshow-container">
				<div class="mySlides">
				  <img src="Images/img-1.jpg" style="width:100%; height:300px">
				</div>
				<div class="mySlides">
				  <img src="Images/img-2.jpg" style="width:100%; height:300px">
				</div>
				<div class="mySlides">
				  <img src="Images/img-3.jpg" style="width:100%; height:300px">
				</div>
			</div>
			<br>

			<div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
		
		
		</div>
		
		
		<script>
				var slideIndex = 0;
				showSlides();

				function showSlides() {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("dot");
				  for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";  
				  }
				  slideIndex++;
				  if (slideIndex > slides.length) {slideIndex = 1}    
				  for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";  
				  dots[slideIndex-1].className += " active";
				  setTimeout(showSlides, 2000); 
				}
		</script>

	</body>
	
	
	<footer>
	
		<div style="display:inline;">
<a href="https://www.linkedin.com/in/abu-shahan-b52414179/" target="_blank" style="border:1px solid mediumseagreen; border-radius: 5px; padding:5px;"><i class="fa fa-linkedin" style="color:mediumseagreen;"></i></a> 
<a href="https://www.google.com/" target="_blank" style="border:1px solid mediumseagreen; border-radius: 5px; padding:5px;"><i class="fa fa-google" style="color:mediumseagreen;"></i></a>

<a href="https://www.facebook.com/Md.a.shahan/" target="_blank" style="border:1px solid mediumseagreen; border-radius: 5px; padding:5px;"><i class="fa fa-facebook" style="color:mediumseagreen;"></i></a>

<a href="https://www.twitter.com/" target="_blank" style="border:1px solid mediumseagreen; border-radius: 5px; padding:5px;"><i class="fa fa-twitter" style="color:mediumseagreen;"></i></a>

<a href="https://www.youtube.com/channel/UCvxQM3EfjEFK-htp5KII6jA" target="_blank" style="border:1px solid mediumseagreen; border-radius: 5px; padding:5px;"><i class="fa fa-youtube" style="color:mediumseagreen;"></i></a>

<a href="https://github.com/md-abu-shahan" target="_blank" style="border:1px solid mediumseagreen; border-radius: 5px; padding:5px;"><i class="fa fa-github" style="color:mediumseagreen;"></i></a>
		<div>
	
		<h3 class="footer_links"><a href="help.php" >Help</a><a href="Categories.php" >Quick Menu</a><a href="Categories.php" >Categories</a>
		
		</h3>
		<p>&copy; Copyrighted By BD Builders
		<p>&reg; Registered By BD Builders
		<p>BD Builders &trade;
		
	</footer>

</html>