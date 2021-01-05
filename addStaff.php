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
    
    $Name =$_REQUEST['Name'];
    $Surname = $_REQUEST['Surname'];
    $Role = $_REQUEST['Role'];
    $phoneNo = $_REQUEST['phoneNo'];
    $Salary = $_REQUEST['Salary'];
   

    
    $add="INSERT INTO staff
    (`Name`,`Surname`,`Role`,`phoneNo`,`Salary`)values
    ('$Name','$Surname','$Role','$phoneNo','$Salary')";
    mysqli_query($conn,$add);
    $status = "Added Successfully.
    </br></br><a href='viewStaff.php'>View Added</a>";
}
?>

<meta charset="utf-8">
<title>Add</title>
</head>
<body>
<div class="form">
<p>
 <a href="viewStaff.php">View </a> 
| <a href="login.php">Logout</a></p>
<div>
<h1>Add New </h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="Name" placeholder="Enter Name" required /></p>
<p><input type="text" name="Surname" placeholder="Enter Surname" required /></p>
<p><input type="text" name="Role" placeholder="Enter Role" required /></p>
<p><input type="number" name="phoneNo" placeholder="Enter Phone No" ></p>
<p><input type="number" name="Salary" placeholder="Enter Salary" ></p>


<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>