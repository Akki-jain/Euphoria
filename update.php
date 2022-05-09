<?php
	include 'connect.php';
?>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="script.js" defer></script>
</head>
<body>
	<div class="form-container sign-in-container">
		<form action="update.php" method="POST">
			<h1>Change Password</h1>
		    <input type="text" placeholder="Username" name="username" />
			<input type="password" placeholder="Password" name="password" />
			<input type="password" placeholder="Confirm Password" name="cpassword" />
			<input type="submit" name="forget" value="Submit" class="btn btn-primary" style="border-radius: 30px; border: 1px solid #20dbc2; background-color: #20dbc2; color: white; font-size: 12px; font-weight: bold; padding: 14px 20px; letter-spacing: 1px; text-transform: uppercase;transition: transform 80ms ease-in; width: 142px;">
		</form>
		<?php
		if(isset($_POST['username']))
		{
			$user=$_POST['username'];
			$pass=$_POST['password'];
			$cpass=$_POST['cpassword'];
			if($pass==$cpass)
			{
				$sql="UPDATE user_details SET password='$pass' WHERE username= '$user'";
				$result=mysqli_query($con,$sql);
				echo "<script> alert('Password has been Successfully Changed'); </script>";
			}
			else
			{
				echo "<script> alert('The Confirm Password and Password should be the Same'); </script>";
			}
		}
	?>
	</div>
</body>