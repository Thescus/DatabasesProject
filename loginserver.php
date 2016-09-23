<?php

$loginError='';
$createAccountError='';

//login
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnLogIn']))
{
	//if username field is blank
	if(empty($_POST['username']))
	{
		$loginError = "You must enter a username";
	}
	//if password field is blank
	if(empty($_POST['password']))
	{
		$loginError = "You must enter a password";
	}
	//username and password fields not empty
	else
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//connect to and select database
		$con = mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($con, "udata");
		
		//verify information with database
		$query = mysqli_query($con, "SELECT * FROM `user information` WHERE Password='$password' AND Username='$username'");
		$rows = mysqli_num_rows($query);
		
		//if the user inputs correct login information
		if($rows == 1)
		{
			//redirect user to another page
			header("Location: AnotherPage.php");
		}
		//if login info does not match any database info
		else
		{
			$loginError = "Invalid login information";
		}
		
		//close the connection
		mysqli_close($con);
	}
}
	
//create account
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnCreateAccount']))
{
	//if username field is blank
	if(empty($_POST['username']))
	{
		$createAccountError = "You must enter a username";
	}
	//if a password field is blank
	else if(empty($_POST['password']) || empty($_POST['repeatpassword']))
	{
		$createAccountError = "You must enter a password";
	}
	//if the passwords do not match
	else if($_POST['password'] != $_POST['repeatpassword'])
	{
		$createAccountError = "Passwords do not match";
	}
	//all good
	else
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//connect to and select database
		$con = mysqli_connect("localhost", "root", "");
		$db = mysqli_select_db($con, "udata");
		
		//verify the username is not in use
		$query = mysqli_query($con, "SELECT * FROM `user information` WHERE Username='$username'");
		$rows = mysqli_num_rows($query);
		if($rows == 1)
		{
			$createAccountError = "Username already in use";
		}
		//if username not in use, add information to database
		else
		{
			$query = mysqli_query($con, "INSERT INTO `user information` (`UID`, `Username`, `Password`) VALUES (NULL, '$username', '$password')");
			
			//redirect user to another page
			header("Location: AnotherPage.php");
		}
		
		//close the connection
		mysqli_close($con);
	}
}
?>