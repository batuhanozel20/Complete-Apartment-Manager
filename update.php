<?php
require('db.php');
include("authenticate.php");
$userID=$_REQUEST['id'];
$query = "SELECT * FROM occupants where userID='".$userID."'"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
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
<meta charset="utf-8">

<link rel="stylesheet" href="css/gui.css" />
</head>
<body>
<div class="form">
<p> <a href="dashboard.php">Dashboard</a> 
|<a href="add.php">Add New</a> 
|<a href="login.php">Logout</a></p>

<?php
$status = "";

if(isset($_REQUEST['userID']) )
{
    

    $Name = stripslashes($_REQUEST['Name']);
    $Name = mysqli_real_escape_string($conn, $Name);
    
    $Surname = stripslashes($_REQUEST['Surname']);
    $Surname = mysqli_real_escape_string($conn, $Surname);
    
    $userName = stripslashes($_REQUEST['userName']);
    $userName = mysqli_real_escape_string($conn, $userName);
    
    $doorNumber = stripslashes($_REQUEST['doorNumber']);
    $doorNumber = mysqli_real_escape_string($conn, $doorNumber);
    
    $feeDebth = stripslashes($_REQUEST['feeDebth']);
    $feeDebth = mysqli_real_escape_string($conn, $feeDebth);

    $phoneNo = stripslashes($_REQUEST['phoneNo']);
    $phoneNo = mysqli_real_escape_string($conn, $phoneNo);
  
    $eMail = stripslashes($_REQUEST['eMail']);
    $eMail = mysqli_real_escape_string($conn, $eMail); 
  
    $moveInDate = stripslashes($_REQUEST['moveInDate']);
    $moveInDate = mysqli_real_escape_string($conn, $moveInDate);

    $moveOutDate = stripslashes($_REQUEST['moveOutDate']);
    $moveOutDate = mysqli_real_escape_string($conn, $moveOutDate);

    

$upd="UPDATE occupants SET `Name`='$Name', `Surname`='$Surname', `userName`='$userName',`doorNumber`='$doorNumber',`feeDebth`='$feeDebth',`phoneNo`='$phoneNo',`eMail`='$eMail',`moveInDate`='$moveInDate',`moveOutDate`='$moveOutDate'
 where userID='$userID'";
mysqli_query($conn, $upd);
$status = "Updated Successfully. </br></br>
<a href='view.php'>Occupants</a>";
echo '<p style="color: red;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 

<input type="hidden" name="new" value="1" />
<input name="userID" type="hidden" value="<?php echo $row['userID'];?>" />

<p><input type="text" name="Name" placeholder="Enter Name" 
 value="<?php echo $row['Name'];?>" /></p>

<p><input type="text" name="Surname" placeholder="Enter Surname" 
 value="<?php echo $row['Surname'];?>" /></p>

<p><input type="text" name="userName" placeholder="Enter User Name" 
 value="<?php echo $row['userName'];?>" /></p>

<p><input type="number" name="doorNumber" placeholder="Enter Door Number" 
 value="<?php echo $row['doorNumber'];?>" /></p>

<p><input type="number" name="feeDebth" placeholder="Enter Fee Debth" 
 value="<?php echo $row['feeDebth'];?>" /></p>

<p><input type="number" name="phoneNo" placeholder="Enter Phone Number" 
 value="<?php echo $row['phoneNo'];?>" /></p>

<p><input type="email" name="eMail" placeholder="Enter E-Mail" 
 value="<?php echo $row['eMail'];?>" /></p>

<p><input type="date" name="moveInDate" placeholder="Enter Move In Date" 
 value="<?php echo $row['moveInDate'];?>" /></p>

<p><input type="date" name="moveOutDate" placeholder="Enter Move Out Date" 
 value="<?php echo $row['moveOutDate'];?>" /></p>



<p><input name="submitOcc" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>