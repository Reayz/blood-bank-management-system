<!DOCTYPE html>
<html>
    <head>
		<title>Update Information</title>
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
					<?php
						session_start();
						$userName=$_SESSION['userName'];
						$con = mysqli_connect("localhost", "root", "");
						if (!$con) {
							die('Connection Failed');
						}
						if (!mysqli_select_db($con, 'bloodbank')) {
							die('Database not found');
						}
						$result = mysqli_query($con, "SELECT * FROM admin WHERE name='$userName'");
						if (!$result) {
							die("Query to show fields from table failed");
						}
						$data = mysqli_fetch_row($result);
					?>
							
						<form method="post" action="admin_update_information_process.php">
							<center><h2>Update information : </h2></center>
							<table  style="margin-left:25px" width="99%" align="center" border="2">
								<tr align="center"><td>Name</td><td><input type="text" name="name" value="<?php echo $data[1];?>"></td></tr>
								<tr align="center"><td>Password</td><td><input type="text" name="password" value="<?php echo $data[2];?>"></td></tr>
								<tr align="center"><td>Confirm Password</td><td><input type="text" name="confirm_password" value=""></td></tr>
								<tr align="center"><td>Email Address</td><td><input type="text" name="email_address" value="<?php echo $data[3];?>"></td></tr>
								<tr align="center"><td>Contact Number</td><td><input type="text" name="contact_number" value="<?php echo $data[4];?>"></td></tr>
								<tr align="center">
									<td colspan="2" >
										<button type="submit">Submit</button>
									</td>
								</tr>
							</table >
							
						</form>
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