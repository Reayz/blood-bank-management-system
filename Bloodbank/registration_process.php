<!doctype html>
<html>
	<head>
		<title>Registration Process</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css"/>	
	</head>
	<body>
		<div class="fix main">
			<div class="fix header">
				<img src="images/BLOOD-BANK.gif" alt=""/>	
			</div>
			<div class="fix maincontent">
				<div class="fix content">
					<?php
						$userName=$_POST['user_name'];
						$formalName=$_POST['formal_name'];
						$emailAddress=$_POST['email_address'];
						$gender=$_POST['gender'];
						$location=$_POST['location'];
						$bloodGroup=$_POST['blood_group'];
						$contactNumber=$_POST['contact_number'];
						$password=$_POST['password'];
						$cpassword =$_POST['confirm_password'];
						$age=$_POST['age'];
						$lastDonateDate=$_POST['last_donate_date'];
						if($userName && $emailAddress && $gender&& $location && $bloodGroup && $contactNumber && $password && $cpassword)
						{
							if(strlen($password)>3)
							{
								if($password==$cpassword)
								{
									$con=mysqli_connect("localhost","root","") or die("we cant connect");
									mysqli_select_db($con,"bloodbank");
									$usernames = mysqli_query($con,"SELECT user_name FROM users where user_name='$userName'");
									$count = mysqli_num_rows($usernames);				
									if($count!=0)
									{ 
										echo "This name already exist.Please type another name";
									}
									else
									{
										mysqli_query($con,"INSERT INTO users(user_name,password,formal_name,gender,email_address,blood_group,contact_number,age,location,last_donate_date) VALUES('$userName','$password','$formalName','$gender','$emailAddress','$bloodGroup','$contactNumber','$age','$location','$lastDonateDate')");
										$registered = mysqli_affected_rows($con);
										if($registered==1)
										{
											session_start();
											$_SESSION['userName']=$userName;
											$_SESSION['password']=$password;
											mysqli_close($con);
											header("Location: home.php");
										}
										else
										{
											echo "Your registration process is failed! Try again!";
											mysqli_close($con);
										}
									}
								}
								else
								{
									echo "Your password does not match!";
								}
							} 
							else 
							{
								echo "Your Password too short";
								
							}
						}						
						else
						{
							header("Location:registration.php");	
						}
						include"links.php";
					?>
				</div>
			</div>
			<div class="fix footer">
				<p>&copy; Comilla University Blood Bank,2016</p>
			</div>
		</div>
		
	</body>
</html>