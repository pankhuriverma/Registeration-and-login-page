<?php 
 	echo "Successful login";
 	session_start();
 	$id=$_SESSION['userid'];
 	$username=$_SESSION['username'];
 	echo "<br>UserId"."&nbsp".$id;
 	echo "<br>Welcome"."&nbsp".$username."<br>";
 	include 'connect.php';
 	if($con==true)
 	{
 		$query="select * from register where id=$id";
 		$run=mysqli_query($con,$query);
 		if($run==true)
 		{
 			$fetch=mysqli_fetch_array($run);

 			print_r($run);
 		}
 		else
 		{
 			echo "error";

 		}
 	}
 	else{
 		echo "error in connection";
 	}