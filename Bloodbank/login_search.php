<!DOCTYPE html>
<html>
    <head>
		<title>Search Blood Donor</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css"/>
		<link rel="stylesheet" type="text/css" href="style.css" />
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
								<a href="home.php">Home</a>
							</li>
							<li>
								<a href="login_about.php">About</a>
							</li>
							<li>
								<a href="login_camp.php">Camp</a>
							</li>
							<li>
								<a href="login_search.php">Search Donor</a>
							</li>
							<li>
								<a href="home.php">Settings</a>
								<ul>
									<li><a href="home.php">Show Information</a></li>
									<li><a href="update_information.php">Update Information</a></li>
									<li><a href="delete_account.php">Delete Account</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</li>
							
						</ul>
					</div>
				</div>
				<div style="overflow:hidden" id="main">
					<center>
						
					<form method="GET" action="login_search.php">
						<tr>
						<td> Blood Group </td>
                    <td>
						<select name="search">
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
						
						<input type="submit" name="submit" value="Search Blood Donor">

					</form>
					</center>
					
					<hr />
					<u>Results:</u>&nbsp
					

					<?php

						if(isset($_REQUEST['submit'])){

						$search = $_GET['search'];
						$terms = explode(" ", $search);
						$query = "SELECT * FROM users WHERE ";

						$i=0;

						foreach($terms as $each)
						{

							$i++;
							if($i==1){
							
							$query .= "blood_group LIKE '%$each%' ";
							
							}else{
							
							$query .="OR blood_group LIKE '%$each%' ";
							}

						}
							$con=mysqli_connect("localhost","root","") or die("we cant connect");
							mysqli_select_db($con,"bloodbank");
							
							$query = mysqli_query($con,$query);
							$num=mysqli_num_rows($query);
							
							if($num>0 && $search!=""){
							
								echo "$num result(s) founds for <b>$search</b>!";
							
								while($row = mysqli_fetch_assoc($query)){
								$name=$row['formal_name'];
								$email=$row['email_address'];
								$bloodGroup=$row['blood_group'];
								$contactNumber=$row['contact_number'];
								$age=$row['age'];
								$location=$row['location'];
								$lastDonateDate=$row['last_donate_date'];
								
								echo "<br /><h3>name: $name</h3>Email Address : $email<br />Blood Group : $bloodGroup<br />Contact Number : $contactNumber<br />Age : $age<br />Location : $location<br />Last Donate Date : $lastDonateDate<br />Location : $location<br />";
								}
							
							} else{
							echo "No result found.";
							}
							
							
							mysqli_close($con);

						} else
						{

						echo "Please type any word.";

						}

						echo "<hr />";

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
