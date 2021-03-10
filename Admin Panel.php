<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style1.css"/>
		
	</head>
	
	
	<body>
	
		<?php
					include("include/conn.php");
					
					if(isset($_REQUEST['go']))
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
							if($f1==0){
								echo "<script type='text/javascript'>alert(\"Id or password didn't match!!\");</script>";
							}
							//header("Location:index.php");
						}
						else 
						{
							
							header("Location:For Employers.php");
						}
						
					}
		?>
	
		<h1 style="text-align:center;min-width:200px;text-decoration: none;color:mediumseagreen;">
		
			<a style="text-align:center;min-width:200px;text-decoration: none;color:mediumseagreen;" href="#" >BD Builders</a>
		 </h1>
		 
		 <h2 style="text-align:center;min-width:200px; text-decoration: none; ">
		
			<a style="text-align:center;min-width:200px; text-decoration: none; color: green;" href="Admin Panel.php">Admin Panel</a>
		 </h2>
		
		
			
		<div style="height:800px; width:100%; background-color: white;">
		
		
			<div style="height:400px; width:100%; background-color: grey; text-align:center;">
				<h2><u> Delete Account: </u></h2>
				<form action="Admin Panel.php">
				
					<!-- <input style="width:400px; height:50px;" type="search" name="Name" placeholder="Enter User Name...."><br><br> -->
					<input style="width:400px; height:50px;" type="search" name="id" placeholder="Enter User Id...."><br><br>
					<input style="width:80px; height:50px;" type="submit" value="Delete" name="del"><br>
					<br>
				</form>
			</div>
			
			<?php
					include("include/conn.php");
					if(isset($_REQUEST['del']))
					{
						
						
						//$name=$_REQUEST['Name'];
						$id=$_REQUEST['id'];
						$f=0;
						//echo $name;
						//echo $id;
						$search="select * from login where (user_id='$id')";
						$resul=mysqli_query($conn,$search);
						$f=mysqli_num_rows($resul);
						//echo $f;
						if($f > 0){
							$sql="DELETE FROM login WHERE (user_id = '$id')";
							mysqli_query($conn,$sql);
							echo "<script type='text/javascript'>alert(\"Id successfully Deleted!!\");</script>";
						}
					}
					?>
			
			<div style="height:400px; width:100%; background-color: grey; text-align:center;">
				<h2><u> Delete Post: </u></h2>
				<form action="Admin Panel.php">
				
					<!-- <input style="width:400px; height:50px;" type="search" name="id" placeholder="Enter Post Id...."><br><br> -->
					<input style="width:400px; height:50px;" type="search" name="title" placeholder="Enter Post Title..."><br><br>
					<input style="width:400px; height:50px;" type="search" name="date" placeholder="Enter Post Date..."><br><br>
					<input style="width:400px; height:50px;" type="search" name="time" placeholder="Enter Post Time..."><br><br>
					<input style="width:80px; height:50px;" type="submit" value="delete" name="del1"><br><br>
				</form>
			</div>
			
			<?php
					include("include/conn.php");
					if(isset($_REQUEST['del1']))
					{
						
						
						
						//$id=$_REQUEST['id'];
						$title=$_REQUEST['title'];
						$date=$_REQUEST['date'];
						$time=$_REQUEST['time'];
						$f=0;
						//echo $name;
						//echo $id;
						$search="select * from job_posts where (title='$title' AND date='$date' AND time='$time')";
						$resul=mysqli_query($conn,$search);
						$f=mysqli_num_rows($resul);
						//echo $f;
						if($f > 0){
							$sql="DELETE FROM job_posts WHERE (title='$title' AND date='$date' AND time='$time')";
							mysqli_query($conn,$sql);
							echo "<script type='text/javascript'>alert(\"Post successfully Deleted!!\");</script>";
						}
					}
					?>
					
		</div>
		
		
		
	
	
	</body>
	


</html>