<!doctype html>
<html>
	<head>
		<title>Delete Account</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css"/>	
	</head>
	<body>
		<div class="fix main">
			
			<div class="fix maincontent">
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
					$result = mysqli_query($con, "DELETE FROM users WHERE user_name='$userName'");
					mysqli_close($con);
					header("Location:index.php");

				?>

			</div>
			<div class="fix footer">
				<p>&copy; Comilla University Blood Bank,2016 </p>
			</div>
		</div>
		
	</body>
</html>