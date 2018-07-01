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
						$result = mysqli_query($con, "SELECT * FROM users WHERE user_name='$userName'");
						if (!$result) {
							die("Query to show fields from table failed");
						}
						?>
						<table  style="margin-left:155px; align:center" width="70%" align="center" border="2">
						<?php $data = mysqli_fetch_row($result);?>
								<tr align="center"><td style="font-weight:bold" >User Name</td><td><?php echo $data[1]; ?></td></tr>
								<tr align="center"><td style="font-weight:bold">Password</td><td><?php echo $data[2]; ?></td></tr>
								<tr align="center"><td style="font-weight:bold">Formal Name</td><td><?php echo $data[3]; ?></td></tr>
								<tr align="center"><td style="font-weight:bold">Gender</td><td><?php echo $data[4]; ?></td></tr>
								<tr align="center"><td style="font-weight:bold">Email Address</td><td width="40%"><?php echo $data[5]; ?></td></tr>
								<tr align="center"><td style="font-weight:bold">Blood Group</td><td><?php echo $data[6]; ?></td></tr>
								<tr align="center"><td style="font-weight:bold">Contact Number</td><td><?php echo $data[7]; ?></td></tr>
								<tr align="center"><td style="font-weight:bold">Age</td><td><?php echo $data[8]; ?></td></tr>
								<tr align="center"><td style="font-weight:bold">Location</td><td><?php echo $data[9]; ?></td></tr>
								<tr align="center"><td style="font-weight:bold">Last Donate Date</td><td><?php echo $data[10]; ?></td></tr>
								
							</table >
						<?php
						mysqli_free_result($result);
						mysqli_close($con);
						?>
