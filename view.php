<?php
require('db.php');
include("authenticate.php");
?>
<!DOCTYPE html>
<html>
<head>
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
  padding: 15px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
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
<th><strong>User ID</strong></th>
<th><strong>Name</strong></th>
<th><strong>Surname</strong></th>
<th><strong>Username</strong></th>
<th><strong>Door Number</strong></th>
<th><strong>FeeDebth</strong></th>
<th><strong>Phone Number</strong></th>
<th><strong>E-Mail</strong></th>
<th><strong>Move In Date</strong></th>
<th><strong>Move Out Date</strong></th>

</tr>
</thead>
<tbody>

<?php
$count=1;
$sel_query="SELECT * FROM occupants ORDER BY userID DESC;";
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

<td align="center">
<a href="update.php?id=<?php echo $row["userID"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["userID"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>

<div style="text-align:center;">
<p><a href="web.php" class="button">Website</a> 
 <a href="add.php" class="button">Add New</a> 
 <a href="login.php" class="button">Logout</a></p>
</div>
</div>
</body>
</html>