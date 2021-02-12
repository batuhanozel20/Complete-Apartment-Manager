<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="utf-8"/>
    <title>Login</title>
   
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
.header{
	 text-decoration:bold;
	 text-align : center;
	 font-size:30px;
	 color:#F96;
	 padding-top:10px;
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
     height: 370px;
     margin-top: 166px;
}
.annDate{
	 margin-left: 1px;
     font-family: sans-serif;
     font-size: 18px;
     color: white;
     margin-top: 5px;
}

.ann{
	 color: white;
   
     margin-top: 9px;
     font-size: 18px;
     font-family: sans-serif;
     margin-left: 3px;
     margin-top: 9px;
     padding-left: 16px;
}

.btn{
  width: 170px;
}
  
.btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
	background:#5900a6;
	color:#fff;
 
	transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;
	
}	 
h1 {
  color: white;
}
</style>
<?php
require('db.php');
include("authenticate.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    
    $annDate =$_REQUEST['annDate'];
    $ann = $_REQUEST['ann'];
  

    
    $add="INSERT INTO announcement
    (`annDate`,`ann`)values('$annDate','$ann')";
    mysqli_query($conn,$add);
    $status = header('Location:viewAnn.php');
}
?>

<meta charset="utf-8">
<title>Add</title>
</head>
<body>
<div class="container">
<div class="form">
<p>
 <a href="viewAnn.php" class="btn btn-warning">View </a> 
| <a href="login.php" class="btn btn-warning">Logout</a></p>
<div>
<form name="form" method="post" action=""> 
<h1 class="header">Add New Announcement</h1>
<input type="hidden" name="new" value="1" />

<label class="annDate">Announcement Date: </label>
<input type="date" name="annDate" placeholder="Enter Date" required /></p>

<p>
<label class="ann">Announcement: </label>
<input type="text" name="ann" placeholder="Enter Announcement" required /></p>



<p><input name="submit" type="submit" value="Submit" class="btn btn-warning"/></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
