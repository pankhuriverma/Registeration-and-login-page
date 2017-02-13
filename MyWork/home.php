<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		.msg{
			height: 30px;
			width: 100%;
			float: left;
		}

		.main{
			height: 300px;
			width: 300px;
			border:1px solid black;
			/*margin: 20% auto;*/
			float: left;
			margin-left:500px;
			margin-top:10%;
		}
		.profile{
			height: 150px;
			width: 150px;
			/*background-color: red;*/
			border-radius: 50%;
			margin-left: 8px;
		}

		.frm{
			height: 100px;
			width: 100px;
			/*background-color: red;*/
			border-radius: 50%;
			margin-left:50px;
			margin-top: 0px;

		}

		.frm input{
			width: 200px;
			margin-top: 8px;
		}
		.main p{
			text-align: center;
		}

		.profile img{
			width: 100%;
			margin-left: 50%;
		}
	</style>

</head>
<body>

<!-- <?php

if(isset($_GET['msg']))
{

	?>

	<script type="text/javascript">
		alert("Wrong Username or password");
	</script>
	<?php
}

?>

 -->

<div class="msg">
	<p>Welcome user</p>
	<p>You are successfully Logged in...</p>
</div>





<script type="text/javascript">
	function openfile()
	{
		document.getElementById('open').click();
	}

</script>
	<div class="main">
		<p>UPLOAD YOUR PROFILE PICTURE</p>
		<div onclick="openfile()" class="profile">
			<img src="Photo-icon.png">
		</div>
		<div class="frm">
			<form method="post" action="file.php" enctype="multipart/form-data">
			<!-- <input type="text" name="name" placeholder="name"> -->
			<br>

			<input style="visibility: hidden;" type="file" name="file" id="open" />
			<br>

			<input type="submit" name="btn">
		</form>
		</div>
		

	</div>

</body>
</html>