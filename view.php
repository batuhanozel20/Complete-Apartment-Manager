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
th {
    background-color:#FFB900;
    
} 

  h2{
   color:white 
  }

  .btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
	background:#5900a6;
	color:#fff;
 
	transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;
	
}	 

.btn{
  width: 163px;
  background-color: orange;
  color:black;
}
  

</style>
<meta charset="utf-8">
<title> Occupants</title>
<link rel="stylesheet" href="css/gui.css" />
</head>
<body>
<div class="form">

<h2 style= text-align:center>Occupants</h2>
<table style="background-color:#fff" border="1" align="center" width="500" >
<thead>
<tr>
<th><strong>Occupant ID</strong></th>
<th><strong>Name</strong></th>
<th><strong>Surname</strong></th>
<th><strong>Username</strong></th>
<th><strong>Door Number</strong></th>
<th><strong>FeeDebth</strong></th>
<th><strong>Phone Number</strong></th>
<th><strong>E-Mail</strong></th>
<th><strong>Move In Date</strong></th>
<th><strong>Move Out Date</strong></th>
<th><strong>Last Payment</strong></th>

</tr>
</thead>
<tbody>

<?php
$count=1;
$sel_query="SELECT * FROM occupants ORDER BY occID ASC;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["Name"]; ?></td>
<td align="center"><?php echo $row["Surname"]; ?></td>
<td align="center"><?php echo $row["userName"]; ?></td>
<td align="center"><?php echo $row["doorNumber"]; ?></td>
<td align="center"><?php echo $row["feeDebth"]; ?></td>
<td align="center"><?php echo $row["phoneNo"]; ?></td>
<td align="center"><?php echo $row["eMail"]; ?></td>
<td align="center"><?php echo $row["moveInDate"]; ?></td>
<td align="center"><?php echo $row["moveOutDate"]; ?></td>
<td align="center"><?php echo $row["lastPayment"]; ?></td>

<td align="center">
<a href="update.php?id=<?php echo $row["occID"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["occID"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
<br>
<div style="text-align:center;">
<p><a href="web.php" class="btn btn-warning">Website</a> 
 <a href="add.php" class="btn btn-warning">Add New</a> 
 <a href="login.php" class="btn btn-warning">Logout</a></p>
</div>
</div>
</body>
</html>
