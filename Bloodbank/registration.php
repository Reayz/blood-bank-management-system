<!DOCTYPE html>
<html>
    <head>
		<title>Registration</title>
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
								<a href="about.php">About</a>
							</li>
							<li>
								<a href="camp.php">Camp</a>
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
				<div id="main">
				<center>
					<h2>Registration Form :</h2>
					<p>(Please fill up all * field)</p>
					<form method="post" action="registration_process.php">
						<table border="0" width="60%">
							<tbody>
								<tr>
									<td>User Name *</td>
									<td><input type="text" placeholder="user name" name="user_name" value=""></td>
								</tr>
								<tr>
									<td>Password *</td>
									<td><input type="password" placeholder="password" name="password" value=""></td>
								</tr>
								<tr>
									<td>Confirm Password *</td>
									<td><input type="password" placeholder="comfirm password" name="confirm_password" value=""></td>
								</tr>
								<tr>
									<td>Formal Name *</td>
									<td><input type="text" placeholder="formal name" name="formal_name" value=""></td>
								</tr>
								<tr>   
									<td>Gender *</td>
									<td> <input type='radio' name='gender' value='male' > Male <input type='radio' name='gender' value='female' >Female</td>
								</tr>
								<tr>
									<td> Blood Group *</td>
									<td>
										<select name="blood_group">
											<option> A+ </option>
											<option> A- </option>
											<option> B+ </option>
											<option> B- </option>
											<option> O+ </option>
											<option> O-</option>
											<option> AB+ </option>
											<option> AB- </option>
										</select>
									</td>
								</tr>
								<tr>
						<td> Age * </td>
                    <td>
						<select name="age">
                            <option> 18 </option>
                            <option> 19 </option>
                            <option> 20 </option>
                            <option> 21 </option>
                            <option> 22 </option>
                            <option> 23 </option>
                            <option> 24 </option>
                            <option> 25 </option>
                            <option> 26 </option>
                            <option> 27 </option>
                            <option> 28 </option>
                            <option> 29 </option>
                            <option> 30 </option>
                            <option> 31 </option>
                            <option> 32 </option>
                            <option> 33 </option>
                            <option> 34 </option>
                            <option> 35 </option>
                            <option> 36 </option>
                            <option> 37 </option>
                            <option> 38 </option>
                            <option> 39 </option>
                            <option> 40 </option>
                            <option> 41 </option>
                            <option> 42 </option>
                            <option> 43 </option>
                            <option> 44 </option>
                            <option> 45 </option>
                            <option> 46 </option>
                            <option> 47 </option>
                            <option> 48 </option>
                            <option> 49 </option>
                            <option> 50 </option>
                        </select>
                    </td>
                   </tr>
				   <tr>
						<td>Contact Number *</td>
						<td><input type="text"  placeholder=" contact number" name="contact_number" value=""></td>
					</tr>
								<tr>
									<td>Email Address *</td>
									<td><input type="text" placeholder="email address" name="email_address" value=""></td>
								</tr>
								<tr>
									<td>Location *</td>
									<td><input type="text" placeholder="location" name="location" value=""></td>
								</tr><tr>
									<td>Last Donate date  *</td>
									<td><input type="text" placeholder="Last Donate Date" name="last_donate_date" value=""></td>
								</tr>
								<tr></tr>
								<tr>
									<td colspan="2" align="center">
										<button type="submit">Submit</button>
									</td>
								</tr>
							</tbody>
						</table>
					</form>
					</center>
				</div>
				<div id="footer">
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
