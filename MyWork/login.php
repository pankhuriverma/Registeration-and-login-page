<?php

session_start();

$email=$_POST['email'];
$password=sha1($_POST['password']);

// echo "MD 5 ".md5("12345")."<br>";
// echo "SHA1 ".sha1("12345");

$con=mysqli_connect("localhost","root","","pankhuri");

$count="select * from register where email='$email' and password='$password'";

$run=mysqli_query($con,$count);


if($run==true)
{
	$c=mysqli_num_rows($run);

	// echo $data[0];
	$data=mysqli_fetch_row($run);

	if($c<1)
	{
			header('location:FileForm.php?msg=1');


	}
	else
	{
		// echo "Login";
			header('location:profile.php');
			$_SESSION['userid']=$data[0];
			$_SESSION['username']=$data[1];

	}

}
else
{
	echo "Error in query";
}


?>