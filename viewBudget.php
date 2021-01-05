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
<title> Apartment Budget</title>
<link rel="stylesheet" href="css/gui.css" />
</head>
<body>
<div class="form">

<h2 style= text-align:center> Apartment Budget</h2>
<table style="background-color:#fff" border="1" align="center" width="500" >
<thead>
<tr>
<th><strong>ID</strong></th>
<th><strong>Garden Expense</strong></th>
<th><strong>Electric Bİll</strong></th>
<th><strong>Generator Fuel</strong></th>
<th><strong>Generator Maintance</strong></th>
<th><strong>Water Bill</strong></th>
<th><strong>Staff Salary</strong></th>
<th><strong>Staff Insurance</strong></th>
<th><strong>Staff Brief</strong></th>
<th><strong>Security Expense</strong></th>
<th><strong>Cleaning Expense</strong></th>
<th><strong>Pool Expense</strong></th>
<th><strong>Central Heating Expense</strong></th>
<th><strong>Other Expenses</strong></th>

</tr>
</thead>
<tbody>

<?php
$count=1;
$sel_query="SELECT * FROM budget ORDER BY id DESC;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["GardenExpense"]; ?></td>
<td align="center"><?php echo $row["ElectricBill"]; ?></td>
<td align="center"><?php echo $row["GeneratorFuel"]; ?></td>
<td align="center"><?php echo $row["GeneratorMaintance"]; ?></td>
<td align="center"><?php echo $row["WaterBill"]; ?></td>
<td align="center"><?php echo $row["StaffSalary"]; ?></td>
<td align="center"><?php echo $row["StaffInsurance"]; ?></td>
<td align="center"><?php echo $row["StaffBrief"]; ?></td>
<td align="center"><?php echo $row["SecurityExpense"]; ?></td>
<td align="center"><?php echo $row["CleaningExpense"]; ?></td>
<td align="center"><?php echo $row["PoolExpense"]; ?></td>
<td align="center"><?php echo $row["CentralHeatingExpense"]; ?></td>
<td align="center"><?php echo $row["OtherExpenses"]; ?></td>

<td align="center">
<a href="updateBudget.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>

</tr>
<?php $count++; } ?>
</tbody>
</table>

<div style="text-align:center;">
<p><a href="web.php" class="button">Website</a> 
 <a href="login.php" class="button">Logout</a></p>
</div>
</div>
</body>
</html>