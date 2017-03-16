<? include("login.php"); ?>



<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Secret Dairy</title>
 <!-- Bootstrap -->
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"rel="stylesheet">
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
 <style >

#brandname{
font-size:1.4em;
padding-right:30px;
padding-left:5px;
font-family: "Times New Roman", Georgia, Serif;
color:#dddcd7;
}
#brandname:hover{

color:#fcdd41;
cursor:pointer;
}
#backcontainer{
position:relative;
background-position:center;
background-image:url("pics.png");
background-size:cover;
width:100%;
opacity:0.8;
}
#toprow{
margin-top:140px;
text-align:center;
}
#toprow h1{
color:#3C1506;
font-size:3.5em;
font-weight:bold;
font-family: helvetica, cursive, sans-serif;
}
#toprow p{
color:black;
font-size:1.4em;
}
label{
	font-size:1.2em;
}
.alead{
font-size:1.5em !important;
}
.btnsub{
 text-align: center;
 margin-top:10px;
}
 .awesome{
 margin-top:70px;
 font-size:170%;
 text-align:center;
 }
 .center{
  text-align:center;
 }
 .center2{
margin-top:-30px;
text-decoration:underline;
 text-align:center;
 }
 .grey{
 color:#494949;
 }
 h2{
 text-align:center;
 }
#searchimg{
padding-top:15px;
width:275px;
}
#interest{
	font-size:1.3em;
	}
.wood{
	background-image:url("http://www.leoguizzetti.it/images/background-wood.jpg");
	border-radius:10px;
	
}
#logo{
	position:relative;
	top:-10px;
}

 </style>
 </head>
 <body data-spy="scroll" data-target=".navbar-collapse">
 <div class="navbar navbar-inverse wood navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<Button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</Button>
			<a class="navbar-brand" ><span id="brandname"><img id="logo" src="logo.png"/></span></a>
			</div>
			<div method="post" class="collapse navbar-collapse">
				
				<form class="navbar-form navbar-right" method="post" >
				   <div class="form-group">
						<input type="email" name="loginemail" placeholder="Email" class="form-control"/>
				   </div>
				     <div class="form-group">
						<input type="password" name="loginpassword" placeholder="Password" class="form-control"/>
				   </div>
				   <div class="form-group">
						<input class="btn btn-success" type="submit" name="login" value="Log in"/>
				   </div>
				  </form>
			</div>
		</div>
		</div>
		<div class="container contentcontainer" id="backcontainer" >
			<div class="row">
				<div class="col-md-6 col-md-offset-3" id="toprow">
					<h1> Secret Diary </h1>
					<p class="lead alead">Your own private diary, with you where ever you go...</p>
					<?php
					 
					 if($error){
						 echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
					 }
					  if($message){
						 echo '<div class="alert alert-success">'.addslashes($message).'</div>';
					 }
					
					?>
					<p id="interest"><strong> Interested? Sign Up Now!....</strong></p>
					<form method="post">
						<div class="form-group">
							<label for="email">Email address</label>
							<input type="email" name="email"class="form-control" placeholder="Your email" value="<? echo addslashes($_POST['email']); ?>"/>
						</div>	
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control" placeholder="Password" value="<? echo addslashes($_POST['password']); ?>"/>
						</div>	
						
							<input type="submit" name="submit" value="Sign up!" class="btn btn-success btnsub btn-lg"/>
					</form>		
				</div>
			</div>
		
		</div>
		 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(".contentcontainer").css("min-height",$(window).height());

</script>
	</body>
</html>	
		