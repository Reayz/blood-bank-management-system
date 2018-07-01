<?php
					if($_POST)
					{
						session_start();
						$loginName=$_SESSION['userName'];
						$loginPassword=$_SESSION['password'];
						$formalName=$_POST['formal_name'];
						$gender=$_POST['gender'];
						$emailAddress=$_POST['email_address'];
						$bloodGroup=$_POST['blood_group'];
						$contactNumber=$_POST['contact_number'];
						$password=$_POST['password'];
						$cpassword =$_POST['confirm_password'];
						$age=$_POST['age'];
						$location=$_POST['location'];
						$lastDonateDate=$_POST['last_donate_date'];
						
								if($password==$cpassword||$loginPassword==$password)
								{
									if(strlen($password)>3)
									{
										$con=mysqli_connect("localhost","root","") or die("we cant connect");
										mysqli_select_db($con,"bloodbank");
										$usernames = mysqli_query($con,"SELECT user_name FROM users where user_name='$userName'");				
										$data = mysqli_fetch_row($usernames);
										
										$query="UPDATE users SET password='$password',formal_name='$formalName',gender='$gender',email_address='$emailAddress',blood_group='$bloodGroup',contact_number='$contactNumber',age='$age',last_donate_date='$lastDonateDate' where user_name='$loginName'";
							
										if(mysqli_query($con,$query))
										{		
												header("Location: home.php");
										}
										else
										{
												echo "Not Updated!";
												mysqli_close($con);
										}
									}
									else
									{
										echo "Your Password too short";
										mysqli_close($con);
									}
								}
								
								else
								{
									echo"your passwword and confirm password do not match!.try again!";
								}
							include"links.php";
					}
					else
					{
						header("Location: update_process.php");
					}

?>