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
h3 {
  color: white;
}

 p {
  color: white;
}

.header{
	 text-decoration:bold;
	 text-align : center;
	 font-size:30px;
	 color:#F96;
	 padding-top:10px;
}
.uName{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 0px;
   
}
.Name{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 34px;
   
}

.dNum{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-right: 28px;
   
}
.feed{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-right: 3px;
   
}
.sName{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 9px;
   
}
.mail{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 30px;
   
}

.phone{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 1px;
   
}
.mid{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 13px;
   padding-right: 5px;
   
}
.mod{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-right: 4px;
 
   
}
.lpd{
	 
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
  
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
   height: 850px;
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
    
    $Name =$_REQUEST['Name'];
    $Surname = $_REQUEST['Surname'];
    $userName = $_REQUEST['userName'];
    $doorNumber = $_REQUEST['doorNumber'];
    $feeDebth = $_REQUEST['feeDebth'];
    $phoneNo = $_REQUEST['phoneNo'];
    $eMail = $_REQUEST['eMail'];
    $moveInDate = $_REQUEST['moveInDate'];
    $moveOutDate = $_REQUEST['moveOutDate'];
    $lastPayment = $_REQUEST['lastPayment'];

    
    $add="INSERT INTO occupants
    (`Name`,`Surname`,`userName`,`doorNumber`,`feeDebth`,`phoneNo`,`eMail`,`moveInDate`,`moveOutDate`,`lastPayment`)values
    ('$Name','$Surname','$userName','$doorNumber','$feeDebth','$phoneNo','$eMail','$moveInDate','$moveOutDate','$lastPayment')";
    mysqli_query($conn,$add);
    $status = header('Location:view.php');
}
?>

<meta charset="utf-8">
<title>Add</title>
</head>
<body>
<div class="container">
<div class="form">
<p>
 <a href="view.php" class="btn btn-warning">View </a> 
 <a href="login.php" class="btn btn-warning">Logout</a></p>
<div>
<h1 class="header">Add New Occupant </h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />

<p><label class="Name"><b>Name:</b>
<input type="text" name="Name" placeholder="Enter Name" required /></p>

<p><label class="sName"><b>Surname:</b>
<input type="text" name="Surname" placeholder="Enter Surname" required /></p>

<p><label class="uName"><b>Username:</b>
<input type="text" name="userName" placeholder="Enter User Name" required /></p>

<p><label class="dNum"><b>Door Number:</b>
<input type="number" name="doorNumber" placeholder="Enter Door Number" required /></p>

<p><label class="feed"><b>Fee Debth:</b>
<input type="number" name="feeDebth" placeholder="Enter Fee Debth" ></p>

<p><label class="phone"><b>Phone No:</b>
<input type="number" name="phoneNo" placeholder="Enter Phone No" ></p>

<p><label class="mail"><b>E-Mail:</b>
<input type="email" name="eMail" placeholder="Enter E-Mail" ></p>

<p><label class="mid"><b>Move In Date:</b></label>
<input type="date" name="moveInDate" placeholder="Enter Move In Date" required /></p>

<p><label class="mod"><b>Move Out Date:</b></label>
<input type="date" name="moveOutDate" placeholder="Enter Move Out Date" ></p>

<p><label class="lpd"><b>Last Payment Date:</b></label>
<input type="date" name="lastPayment" placeholder="lastPayment" ></p>


<p><input name="submit" type="submit" value="Submit" class="btn btn-warning"/></p>
</form>
<p style="color=white; "><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
