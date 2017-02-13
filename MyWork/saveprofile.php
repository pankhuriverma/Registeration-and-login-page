<?php

echo "<pre>";

// print_r($_POST);

// print_r($_FILES);

echo "</pre>";

$name=$_POST['name'];

$filename=$_FILES['file']['name'];


$tmp_path=$_FILES['file']['tmp_name'];

$ext=pathinfo($filename,PATHINFO_EXTENSION);

$destination="uploads/".$filename;



if(file_exists($destination))
{
	echo "Already exists";


	$base=basename($filename,$ext);

	echo "filename:$filename";
	echo "base name :".$base;
	echo "<br>extension :".$ext;
	$current_time=time();

	$file_newname=$base.$current_time.".".$ext;

	echo "<br><br>Newname :".$file_newname;

	$new_destination="uploads/".$file_newname;

	$filename=$file_newname;

	$move=move_uploaded_file($tmp_path, $new_destination);
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

	$move=move_uploaded_file($tmp_path, $destination);
	if($move==true)
	{
		echo "uploaded";
	}
	else
	{
		echo "Error in uploading 2";
	}

}

$con=mysqli_connect("localhost","root","","pankhuri");
if($con==true)
{

	$insert="insert into account(name,profilepic) values('$name','$filename')";
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
	echo "Error in connection ";
}


?>