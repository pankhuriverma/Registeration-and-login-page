<?php

$name=$_FILES['file']['name'];
$temp_path=$_FILES['file']['tmp_name'];
// print_r($_FILES);

$destination="uploads/".$name;
$extension=pathinfo($name,PATHINFO_EXTENSION);
if(file_exists($destination))
{
	echo "file already exists";
	$base=basename($filename,$text);
	$current_time=time();
	$file_newname=$base.$current_time.".".$text;
	$new_destination="uploads/".$file_newname;
	$filename=$file_newname;
	$move=move_uploaded_file($tmp_path,$destination);
	if($move==true)
	{
		echo "uploaded file with same name is handled";
	}
	else
	{

		echo "Error in uploading.";
	}
	


}
else
{
	
	
		$move=move_uploaded_file($temp_path,$destination);
		if($move==true)
		{
			echo "<br>File uploaded successfully.";
		}
		else
		{
			echo "<br>Error in uploading";
		}
	
	
}


$con=mysqli_connect("localhost","root","","pankhuri");
if($con==true)
{
	$insert="insert into account(email,profilepic) values('$email','$filename')";
	$run=mysqli_query($con,$insert);
	if($run==true)
	{
		echo "inserted";
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