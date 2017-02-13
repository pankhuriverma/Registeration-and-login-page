<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
		.main{
			height: 600px;
			width: 100%;
			float: left;
			background-color: grey;
		}

		.header{
			height: 100px;
			width: 100%;
			background-color: black;
			float: left;
		}

		.nav
		{
			height: 60px;
			width: 60%;
			float: left;
			margin-top: 20px;
			margin-left: 40px;
			/*background: red;*/
		}

		.nav ul li
		{
			list-style-type: none;
			float: left;
			/*background: green;*/
			height: 60px;
			padding-left:30px;
			padding-right:30px;
			line-height: 60px;
			font-family: calibri;
			text-transform: uppercase;
			font-size: 18px; 
			color: white;
			cursor: pointer;
			transition: .2s;
			margin-left: 30px;
			color: white;
		}

		.nav ul li:hover
		{
			background: white;
			color: black;

		}

		.head{
			height: 100px;
			width: 100%;
			float: left;
			background-color: black;
			font-size: 60px;
			font-family: calibri;
			color:white;
		}

		.head p{
			margin-left:35%;
		}

		.output{
			color: black;
			font-family: calibri;
			font-size: 30px;
		}
	</style>
</head>
<body>
	<div class="main">
		<div class="head">
			<p>Fr!e/\/DsBooK</p>
		</div>



		<div class="header">
			<div class="nav">
				<ul>
					<!-- <a href="home.php"> -->
					<li>
						HOME
					</li>
					</a>
					<a href="profile.php">
					<li>
						
						PROFILE
					</li>
					</a>
					<li>FRIENDS</li>
					<a href="logout.php">
						<li>
						LOGOUT
						</li>
					</a>
				</ul>
			</div>
		</div>
		<div class="output">
			<p>
				<?php
					// include 'checksession.php';

					$id=$_SESSION['userid'];
					$name=$_SESSION['username'];

					// echo $id;

					include 'connect.php';

					// include 'nav.php';


					if($con==true)
					{
						$query="select * from register where id=$id";
						$run=mysqli_query($con,$query);
						$fetch=mysqli_fetch_array($run);

						// print_r($fetch);
						echo "Logged in as  $fetch[1]";

					}
					else
					{
						echo "error in connection";
					}










				 ?>
			</p>

		</div>
	</div>

</body>
</html>