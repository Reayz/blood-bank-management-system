<!DOCTYPE html>
<html>
    <head>
		<title>User Login</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css"/>
		<link rel="stylesheet" type="text/css" href="style2.css" />
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
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="index.php">About</a>
							</li>
							<li>
								<a href="index.php">Camp</a>
							</li>
							<li>
								<a href="registration.php">Registration</a>
							</li>
							<li>
								<a href="search.php">Search Blood Donor</a>
							</li>
							<li>
								<a href="login.php">User Login</a>
							</li>
							<li>
								<a href="AdminLogin.php">Admin Login</a>
							</li>
						</ul>
					</div>
				</div>
				<div  id="main">
					<center>
						<form method="post" action="login_process.php">
							<h2 style="color:green;text-decoration:underline">User Login:</h2><br>
							<table >
								<tr><td><h3>User name : </td></h3><td><h3> 
								<input type="text" placeholder="user name" name="user_name" value="" ></h3></td></tr>
								<tr><td><h3>Password :  </td></h3><td><h3>
								<input type="password" placeholder="password" name="password" value="" > </h3></td></tr>
								<tr>
									<td colspan="2" align="right">
										<button type="submit">Submit</button>
									</td>
								</tr>
							</table>
						</form>
					</center>
				</div>
				<div style="margin-top:260px" id="footer">
					<div id="footerContent">
						<span>Kotbari,Comilla</span><br>
						<span>+8801869201018</span><br>
						<span>comillauniversitybloodbank@gmail.com</span><br>
					</div>
						<br/>
						
						<h2 style="font-weight:normal">&copy; Comilla Univerity Blood Bank,2016</h2>
					
					<br class="clear" />
				</div>
			</div>
			
		</div>
		
    </body>
</html>
