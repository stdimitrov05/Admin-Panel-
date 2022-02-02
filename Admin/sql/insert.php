<?php

session_start();
require('config.php');
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $city_name = $_POST['city_name'];
	 $email = $_POST['email'];
	 $text =$_POST['text'];
	 $sql = "INSERT INTO employee (first_name,last_name,city_name,email,text)
	 VALUES ('$first_name','$last_name','$city_name','$email','$text')";
	 if (mysqli_query($con, $sql)) {
        header("Location:../../index.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}