<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="utf-8"/>
    <title>Registration</title>
    
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
p {
  color: white;
}
.Name{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 0px;
   
}

.price{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 3px;
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
   height: 380px;
   margin-top: 166px;
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
</style>
<?php
require('db.php');
include("authenticate.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    
    $budName =$_REQUEST['budName'];
    $budPrice = $_REQUEST['budPrice'];
    $year = $_REQUEST['year'];
  

    
    $add="INSERT INTO budget
    (`budName`,`budPrice`,`year`)values('$budName','$budPrice','$year')";
    mysqli_query($conn,$add);
    $status = header('Location:viewBudget.php');
}
?>

<meta charset="utf-8">
<title>Add</title>
</head>
<body>
<div class="container">
<div class="form">
<p>
 <a href="viewBudget.php" class="btn btn-warning">View </a> 
<a href="login.php" class="btn btn-warning">Logout</a></p>
<div>
<h1 class="header">Add New Utlility</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />

<p><label class="Name">Name: </label>
<input type="text" name="budName" placeholder="Enter Budget Name" required /></p>

<p><label class="price">Price: </label>
<input type="number" name="budPrice" placeholder="Enter Budget Price" required /></p>

<p><label class="price">Year: </label>
<input type="number" name="year" placeholder="Enter Year" required /></p>



<p><input name="submit" type="submit" value="Submit" class="btn btn-warning" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
