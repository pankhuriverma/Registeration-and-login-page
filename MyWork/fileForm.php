<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="fileForm.css">
	<script type="text/javascript" src="fileForm.js"></script>
</head>
<body>
<?php

if(isset($_GET['msg']))
{

	?>

	<script type="text/javascript">
		alert("Wrong Username or password");
	</script>
	<?php
}

?>



	<div class="main">
		<p>WELCOME</p>
		<input type="button" name="register" value="Register" onclick="disp1()" id="bt1">
	
		<input type="button" name="login" value="Login" onclick="disp2()" id="bt2">
		<div class="back">

			<div class="form_top1">
				<div class="cross">
					<img src="cross.png" onclick="hide1()">
				</div>
				<div class="photo">
					<img src="Photo-icon.png">
				</div>
				<div class="form1">
					<form method="post" action="fileUp.php" enctype="multipart/form-data">
						<table>
							<tr>	
								<td>Username:</td>
							</tr>
							<tr>
								<td><input type="text" name="name" required="" placeholder="Username"></td>
							</tr>
							<tr>
								<td>Email:</td>
							</tr>
							<tr>
								<td><input type="email" name="email" required="" placeholder="Email"></td>
							</tr>
							<tr>
								<td>Password:</td>
							</tr>
							<tr>
								<td><input type="password" name="password" required="" placeholder="Password"></td>
							</tr>
							<tr>
								<td>Mobile No.</td>
							</tr>
							<tr>
								<td><input type="number" name="mobile" required="" placeholder="Mobile Number"></td>
							</tr>
							<!-- <tr>
								<td><input type="file" name="file" required="" placeholder="Profile pic"></td>
							</tr> -->
							<tr>
								<td><input type="submit" name="btn" value="Register" class="reg"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
			<div class="form_top2">
				<div class="cross">
					<img src="cross.png" onclick="hide2()">
				</div>
				<div class="photo">
					<img src="Photo-icon.png">
				</div>
				<div class="form2">
					<form method="post" action="login.php" enctype="multipart/form-data">
						<table>
							<tr>	
								<td>Email:</td>
							</tr>
							<tr>
							
							<tr>
								<td><input type="text" name="email" required="" placeholder="Enter  email"></td>
							</tr>
							<tr>	
								<td>Password:</td>
							</tr>
							<tr>
							<tr>
								<td><input type="password" name="password" required="" placeholder="Password"></td>
							</tr>
							<tr>
								<td>Forgot Password?</td>
							</tr>
							<tr>
							
								<td><input type="submit" name="log" value="Login" class="reg" ></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>