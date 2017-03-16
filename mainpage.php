<? 

	session_start();
	if(!$_SESSION['id']){
		header("Location:index.php");
	}
	include("connection.php");
	
	$query="SELECT diary FROM logindetails WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	$result = mysqli_query($link,$query);
	
	$row = mysqli_fetch_array($result);
	
	$diary=$row['diary'];
	
	$querya="SELECT last FROM logindetails WHERE id='".$_SESSION['id']."' LIMIT 1";
	$resulta = mysqli_query($link,$querya);
	
	$rowa = mysqli_fetch_array($resulta);
	if($rowa['last'])
	$last=$rowa['last']." (India Standard Time)";
    else
	$last="Its your first time here, Welcome !"	
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Secret Diary</title>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"rel="stylesheet">
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
   <style>
   
   		.navbar-brand{
   			font-size:1.8em;
   			
   		}
   		
   		#topContainer{
   			background-image:url("picsmain.jpg");
   			height:400px;
   			width:100%;
   			background-size:cover;	
   		}
   		
   		#topRow {
   			margin-top:80px;
   			text-align:center;	
   		}
   
   		#topRow h1{
   			font-size:300%;
   
   		}
   		
   		.bold{
   			font-weight:bold;
   		}
   
   		.marginTop{
   			margin-top:30px;
   		
   		}
   		
   		.center{
   			text-align:center;
   		
   		}
   		
   		.title {
   			margin-top:100px;
   			font-size:300%;
   			
   		}
   		
   		#footer{
   			background-color: #B0D1FB;
   			padding-top:70px;
   			width:100%;
   		}
   		
   		,marginBottom{
   			margin-bottom:30px;
   			
   		}
   		
   		.appstoreImage{
   			width:250px;
   		
   		}
		#test{
			padding:25px;
			font-style:italic;
			cursor:url("http://iconbug.com/data/df/32/fd69b06dc718b5c3707a0d4df316621f.png"),auto;
			border:none;
			font-weight:bold;
			font-size:1.8em;
			color:#664604;
			background-image:url("http://previews.123rf.com/images/happydancing/happydancing1201/happydancing120100002/11809788-old-grunge-paper-background-with-vintage-victorian-style--Stock-Photo.jpg");
		}
		.wood{
	background-image:url("http://www.leoguizzetti.it/images/background-wood.jpg");
	border-radius:10px;
	
}
#logo{
	position:relative;
	top:-10px;
}
#now{
	
	float:left;
	padding-bottom:8px;
}

   </style>
    
  </head>
  
<body data-spy="scroll" data-target=".navbar-collapse">

  <div class="navbar navbar-inverse wood navbar-fixed-top">
  
  	<div class="container">
  	
  		<div class="navbar-header pull-left">
  		
  			
  			
  			<a class="navbar-brand" ><span id="brandname"><img id="logo" src="logo.png"/></span></a>
  			
  		</div>
  		
  		<div class="pull-right">
		
  			<ul class= "navbar-nav nav">
  				<li><a href="index.php?logout=1">Log Out</a></li>
  			
  			
  		</div>
  		
  	</div>	
  	
  </div>
  
  
 <div class="container contentContainer" id="topContainer">
  		<div class="row">
  		
  			<div class="col-md-6 col-md-offset-3" id="topRow">
 			 <div class="alert alert-success"id="now"><strong>Last Updated:</strong><?php echo $last; ?> </div>
			 <div id="last"></div>
 			 <textarea id="test" class="form-control"><?php echo $diary; ?></textarea>
 			 </div>
 		 
		</div>
		
  </div>
  
	
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="js/bootstrap.min.js"></script>
    
    <script>
   /* var d = new Date();
     document.getElementById("now").innerHTML ="Time="+Date();*/
    
		$(".contentContainer").css("min-height",$(window).height());
    
    	$("textarea").css("height",$(window).height()-140);
    	
    	$("textarea").keyup(function() {
    	
    		$.post("update.php", {diary:$("textarea").val()} );
    	
    	});
    	
    	
    	
    </script>
    
  </body>
</html>