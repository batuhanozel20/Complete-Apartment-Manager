<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="a.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
 body{ 
  background-image:url('b.jpg');
  background-repeat:no-repeat;
  background-size: cover;
}
.button {
  background-color: #949292; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
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
    $status = "Added Successfully.
    </br></br><a href='viewAnn.php'>View Added</a>";
}
?>

<meta charset="utf-8">
<title>Add</title>
</head>
<body>
<div class="form">
<p>
 <a href="viewAnn.php">View </a> 
| <a href="login.php">Logout</a></p>
<div>
<h1>Add New </h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="date" name="annDate" placeholder="Enter Date" required /></p>
<p><input type="text" name="ann" placeholder="Enter Announcement" required /></p>



<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>