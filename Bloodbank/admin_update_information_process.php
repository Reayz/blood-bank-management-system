				<?php
					if($_POST)
					{
						session_start();
						$loginName=$_SESSION['userName'];
						$loginPassword=$_SESSION['password'];
						$name=$_POST['name'];
						$emailAddress=$_POST['email_address'];
						$contactNumber=$_POST['contact_number'];
						$password=$_POST['password'];
						$cpassword=$_POST['confirm_password'];
								if($password==$cpassword||$loginPassword==$password)
								{
									if(strlen($password)>3)
									{
										$con=mysqli_connect("localhost","root","") or die("we cant connect");
										mysqli_select_db($con,"bloodbank");
										$usernames = mysqli_query($con,"SELECT name FROM admin where name='$name'");				
										$data = mysqli_fetch_row($usernames);
										
										$query="UPDATE admin SET name='$name',password='$password',email_address='$emailAddress',contact_number='$contactNumber' where name='$loginName'";
							
										if(mysqli_query($con,$query))
										{		
												header("Location:admin_home.php");
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
					}
					else
					{
						header("Location: update_process.php");
					}

?>	</body>
</html>