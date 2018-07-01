<!doctype html>
<html>
	<head>
		<title>Login</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css"/>	
	</head>
	<body>
		<div class="fix main">
			<div class="fix header">
				<img src="images/BLOOD-BANK.gif" alt=""/>	
			</div>
			<div class="fix maincontent">
				<?php
					if($_POST)
					{
						session_start();
						$userName=$_POST['user_name'];
						$password=$_POST['password'];
						$con = mysqli_connect("localhost", "root", "");
						if (!$con) {
							die('Connection Failed');
						}
						if (!mysqli_select_db($con, 'bloodbank')) {
							die('Database not found');
						}
						$result = mysqli_query($con, "SELECT * FROM users WHERE user_name='$userName'");
						$count = mysqli_num_rows($result);				
						if($count==0)
						{ 
							echo "This username does not exist.";
							include"links.php";
							exit();

						}
						for ($i = 0; $i < mysqli_num_rows($result); $i++) {
							$data = mysqli_fetch_row($result);
						}
						if($data[1]==$userName&&$data[2]==$password)
						{
							$_SESSION['userName']=$_POST['user_name'];
							$_SESSION['password']=$_POST['password'];
							header("Location: home.php");
						}
						else{
							
							echo"user name and password does not match!";
						}
						include"links.php";
					}
					else
					{
						header("Location: index.php");
					}
				?>
			</div>
			<div class="fix footer">
				<p>&copy; Comilla University Blood Bank, 2016</p>
			</div>
		</div>
		
	</body>
</html>