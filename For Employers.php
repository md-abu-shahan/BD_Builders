<!DOCTYPE html>
<html>
	<head>
		<title>For Employers</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style1.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	
	<body>
		
		<h1 class="title">
		
			<a href="index.php" >BD Builders</a>
		 </h1>
		<div class="sub_header">
			<a href="index.php">Home</a>    
			<a href="For Employers.php">For Employers  </a>
			<a href="For Candidates.php">For Candidates  </a>
			<a href="Post A Job.php">Post A Job  </a>
			<a href="Categories.php">Categories  </a>
			
		</div>
		<div class="canmain">
			<div class="can1">
				<img src="images/im.jfif" height="290px" width="250px" border="1px solid black">
			</div>
			<div class="can2" style="background-color:white;">
				<h3>Name : </h3><br>
				<h3>Location : </h3><br>
				<h3>Job Post Count: </h3><br>
				<!-- <h3>Ratings : </h3>  -->
			</div>
		</div>
		<div style="height: auto; width=100%; min-height: 650px;">
		<?php
			include("include/conn.php");
			$sql="select * from job_posts ORDER BY p_id DESC";
			$result = mysqli_query($conn,$sql);
			$sl=0;
			while($array=mysqli_fetch_array($result))
			{
				$sl++;
			?>
			
				<div class ="show_post" style="height:500px;  text-align:center; margin:0 auto; border:1px solid lightgreen;">
									<h1 style="color: mediumseagreen"><?php echo $array['title']; ?></h1>
									<h3 style="color:blue"><?php echo "Posted on - ".$array['date']." , ".$array['time']; ?> </h3>
									<h3><?php echo $array['company']; ?></h3>
									<h3><?php echo $array['type'];?></h3>
									<i class="fa fa-map-marker" style="cursor:pointer;font-size:24px; color:red;text-align:center; margin:0 auto;"></i>
									<p style=" color:red;text-align:center; margin:0 auto;"><?php echo $array['location']; ?></p>
									<h3><?php echo "Salary : ".$array['job']; ?></h3>
									<h3><?php echo $array['description']; ?></h3><br>
										<h3><?php echo "Deadline : ".$array['deadline']; ?></h3>
									<h3><?php echo "Phone : 0".$array['phone']; ?></h3>
									<h3><?php echo "Email : ".$array['email']; ?></h3>
									
								</div>
			
			<?php
			}
			?>

		</div>
		<div  class="job_news">
			<div style="height:10px; width:auto; background-color: white;">
						
			</div>		
		
		</div>
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
	
		<h3 class="footer_links"><a href="help.php" >Help</a><a href="For Employers.php" >Quick Menu</a><a href="Categories.php" >Categories</a>
		
		</h3>
		<p>&copy; Copyrighted By BD Builders
		<p>&reg; Registered By BD Builders
		<p>BD Builders &trade;
		
	</footer>

</html>