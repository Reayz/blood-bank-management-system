<!DOCTYPE html>
<html>
    <head>
		<title>User Login</title>
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
						$conn = mysqli_connect("localhost", "root", "");
						if (!$conn) {
							die('Connection Failed');
						}
						if (!mysqli_select_db($conn, 'bloodbank')) {
							die('Database not found');
						}
						$result = mysqli_query($conn, 'SELECT * FROM users');
						if (!$result) {
							die("Query to show fields from table failed");
						}
						?>

					<table width="100%" align="center" border=2>
						<thead bgcolor="#B0C4DE" >
							<tr>
								<th>ID</th>
								<th>User Name</th>
								<th>Blood Group</th>
								<th>Last Donate Date</th>
								<th>Email Address</th>
								<th>Contact Number</th>
								<th>Want to Delete?</th>
							</tr>
					</thead>
					<tbody>
				<?php
				for ($i = 0; $i < mysqli_num_rows($result); $i++) {
					$data = mysqli_fetch_row($result);
				?>
					<tr align="center">
						<td><?php echo $data[0]; ?></td>
						<td><?php echo $data[1]; ?></td>
						<td><?php echo $data[6]; ?></td>
						<td><?php echo $data[10]; ?></td>
						<td><?php echo $data[5]; ?></td>
						<td><?php echo $data[7]; ?></td>
						<center><td><form method="POST" action="users_delete.php"><input type="hidden" name="user_name" value="<?php echo $data[1]; ?>"><a><input type="submit" value="delete"></form></a></td></center>
					</tr>
				<?php
				}
				?>
					</tbody>
				</table>

				<?php
				mysqli_free_result($result);
				mysqli_close($conn);
				?>
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
