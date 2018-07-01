<!DOCTYPE html>
<html>
    <head>
		<title>Home</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css"/>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="icon" href="images/blood2.png">
    </head>
    <body>
		<div id="bg">
			<div id="outer">
				<div id="header">
					<div id="logo">
						<h1>
							<a href="#">Comilla University Blood Bank</a>
						</h1>
				</div>
					<div id="nav">
						<ul>
							
							<li class="first active">
								<a href="admin_home.php">Home</a>
							</li>
							<li>
								<a href="admin_about.php">About</a>
							</li>
							<li>
								<a href="admin_camp.php">Camp</a>
							</li>
							<li>
								<a href="admin_search.php">Search Donor</a>
							</li>
							<li>
								<a href="admin_home.php">Settings</a>
								<ul>
									<li><a href="users.php">User's Information</a></li>
									<li><a href="admin_home.php">Personal Information</a></li>
									<li><a href="admin_update_information.php">Update Information</a></li>
									<li><a href="delete_account.php">Delete Account</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</li>
							
						</ul>
					</div>
					
				</div>
				<div  id="main">
					<center>
						<h2>Hi, <?php session_start(); $user=$_SESSION['userName'];if($user)echo"$user"."!";else header("Location: index.php");;?></h2>
					<h3>You are now logged in!</h3>
					<br>
					<br>
					<h2>Your information</h2>
					</center>
					<?php include_once"admin_show_information.php"; ?>
				</div>
				<div style="margin-top:260px" id="footer">
					<div id="footerContent">
						<span>Kotbari,Comilla</span><br>
						<span>+8801869201018</span><br>
						<span>comillauniversitybloodbank@gmail.com</span><br>
					</div>
						<br/>
						
						<h2 style="font-weight:normal">&copy; Comilla University Blood Bank,2016</h2>
					
					<br class="clear" />
				</div>
			</div>
			
		</div>
		
    </body>
</html>