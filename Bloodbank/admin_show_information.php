					<?php
						$userName=$_SESSION['userName'];
						$password=$_SESSION['password'];
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
						?>
						<table  style="margin-left:155px; align:center" width="70%" align="center" border="2">
						<?php 
						$data = mysqli_fetch_row($result);?>
								<tr align="center"><td style="font-weight:bold" >User Name</td><td><?php echo $data[1]; ?></td></tr>
								<tr align="center"><td style="font-weight:bold">Password</td><td><?php echo $data[2]; ?></td></tr>
								<tr align="center"><td style="font-weight:bold">Email Address</td><td><?php echo $data[3]; ?></td></tr>
								<tr align="center"><td style="font-weight:bold">Contact Number</td><td><?php echo $data[4]; ?></td></tr>
								
							</table >
						<?php
						mysqli_free_result($result);
						mysqli_close($con);
						?>

