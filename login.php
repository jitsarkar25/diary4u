<?php

  session_start();
  if ($_GET["logout"]==1 AND $_SESSION['id']) { session_destroy();
		
			$message="You have been logged out. Have a nice day!";
		
		}
  $link=mysqli_connect("localhost","cl17-logindata","mK.hBFw3k","cl17-logindata");
if($_POST['submit']){
	
	if(!$_POST['email']) $error.="<br> Please enter your email address";
	else if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))  $error.="<br> Please enter a proper email address";
	
	if(!$_POST['password']) $error.="<br> Please enter a password";
	else{
		if(strlen($_POST['password'])<8) $error.="<br> Please enter a password with at least 8 characters";
		if(!preg_match('`[A-Z]`',$_POST['password']))  $error.="<br> Please enter a password with at least 1 capital letter";
	}
	
	if ($error)
		$error= "There were error(s) in your sign up details".$error;
	else{
	$link=mysqli_connect("localhost","cl17-logindata","mK.hBFw3k","cl17-logindata");
	//$query="SELECT * FROM `logindetails` WHERE email='jit.sarkar25@gmail.com'";
  $query="SELECT * FROM `logindetails` WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."'";	
	$result = mysqli_query($link,$query);
	$results = mysqli_num_rows($result);
	if($results)  $error= "The email address is already registered. Do you want to Log in?" ;
	else{
		$query = "INSERT INTO `logindetails` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
	     mysqli_query($link,$query);
		 echo "You have been successfully signed up!!!";
		 $_SESSION['id']=mysqli_insert_id($link);
		 
		header("Location:mainpage.php");
	}
	}
}
if($_POST['login']){
	 $query="SELECT * FROM `logindetails` WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password ='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";
	 $result=mysqli_query($link,$query);
     $row=mysqli_fetch_array($result);
	if($row){
		
		 $_SESSION['id']=$row['id'];
		 header("Location:mainpage.php");
	}else{
		$error= "invalid credentials";
	}
	
	 }
?>