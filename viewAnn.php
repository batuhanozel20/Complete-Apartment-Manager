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
<title> Announcements</title>
<link rel="stylesheet" href="css/gui.css" />
</head>
<body>
<div class="form">

<h2 style= text-align:center>Announcements</h2>
<table style="background-color:#fff" border="1" align="center" width="500" >
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>DATE</strong></th>
<th><strong>ANNOUNCEMENT</strong></th>


</tr>
</thead>
<tbody>

<?php
$count=1;
$sel_query="SELECT * FROM announcement ORDER BY annID DESC;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["annDate"]; ?></td>
<td align="center"><?php echo $row["ann"]; ?></td>


<td align="center">
<a href="deleteAnn.php?id=<?php echo $row["annID"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>

<div style="text-align:center;">
<p><a href="web.php" class="button">Website</a> 
 <a href="addAnn.php" class="button">Add New</a> 
 <a href="login.php" class="button">Logout</a></p>
</div>
</div>
</body>
</html>