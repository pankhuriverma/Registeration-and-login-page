<?php 

	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$mobile=$_POST['mobile'];
	print_r($_POST);

	$password=sha1($password);

	echo "<br>".$password;

	// print_r($_FILES);


	$con=mysqli_connect("localhost","root","","pankhuri");

	if($con==true)
	{
		echo "connected";
		$query="insert into register(name,email,password,mobile) values('".$name."','".$email."','".$password."','".$mobile."')";
		$query2="select * from register where email='$email'";
		$run2=mysqli_query($con,$query2);
		
		if($run2==true)
		{
					$data=mysqli_num_rows($run2);
					if($data>0)
					{
						echo "Enter another email id";

					}
					else
					{
					
						$run=mysqli_query($con,$query);
						if($run==true)
						{
							// echo " Thank you.Data inserted successfully.";
							header('location:register.php');
						}
						else
						{
								echo "<br>Error";
								die(mysqli_error($con));
						}
					}
		}
		else
		{
			echo "error";
			
		}
		

	}
	else
	{
		echo "error in connection";
	}

	

?>