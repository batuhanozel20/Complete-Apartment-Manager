<?php
require('db.php');
include("authenticate.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body{ 
    background-image:url(https://s3.envato.com/files/243754334/primag.jpg);
	 background-repeat:no-repeat;
	 background-size:cover;
	 width:100%;
	 height:100vh;
	 overflow:auto;
}
.btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
	background:#5900a6;
	color:#fff;
 
	transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;
	
}	 

.btn{
  width: 170px;
  
}
.container{
	font-family:Roboto,sans-serif;
	  background-image:url(https://image.freepik.com/free-vector/dark-blue-blurred-background_1034-589.jpg) ;
    
     border-style: px solid grey;
     margin: 0 auto;
     text-align: center;
     opacity: 0.8;
     margin-top: 67px;
   box-shadow: 2px 5px 5px 0px #eee;
     max-width: 500px;
     padding-top: 10px;
     height: 250px;
     margin-top: 166px;
}
</style>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/a.css" />
</head>
<body>
<div class="container">
<div class="form">
<p style="font-size:30px;color:white">Welcome to Dashboard.</p>
<p><a href="web.php" class="btn btn-warning">Website</a><p>
<p><a href="webNormal.php" class="btn btn-warning">User Point of View</a></p>
<p><a href="login.php" class="btn btn-warning">Logout</a></p>
</div>
</body>
</html>
