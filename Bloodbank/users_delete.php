				<?php
					$userName=$_POST['user_name'];
					$con = mysqli_connect("localhost", "root", "");
					if (!$con) {
						die('Connection Failed');
					}
					if (!mysqli_select_db($con, 'bloodbank')) {
						die('Database not found');
					}
					$result = mysqli_query($con, "DELETE FROM users WHERE user_name='$userName'");
					mysqli_close($con);
					header("Location:users.php");

				?>

