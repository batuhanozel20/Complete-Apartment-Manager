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
    
    $GardenExpense =$_REQUEST['Garden Expense'];
    $ElectricBİll = $_REQUEST['Electric Bill'];
    $GeneratorFuel = $_REQUEST['Generator Fuel'];
    $WaterBill = $_REQUEST['Water Bill'];
    $StaffSalary = $_REQUEST['Staff Salary'];
    $StaffInsurance = $_REQUEST['Staff Insurance'];
    $StaffBrief = $_REQUEST['Staff Brief'];
    $SecurityExpense = $_REQUEST['Security Expense'];
    $CleaningExpense = $_REQUEST['Cleaning Expense'];
    $PoolExpense = $_REQUEST['Pool Expense'];
    $CentralHeatingExpense = $_REQUEST['Central Heating Expense'];
    $OtherExpenses = $_REQUEST['Other Expenses'];

    
    $add="INSERT INTO budget
    (`Garden Expense`,`Electric Bill`,`Generator Fuel`,`Water Bill`,`Staff Salary`,`Staff Insurance`,`Staff Brief`,`Security Expense`,`Cleaning Expense`,`Pool Expense`,`Central Heating Expense`,`Other Expenses`)values
    ('$GardenExpense','$ElectricBİll','$GeneratorFuel','$WaterBill','$StaffSalary','$StaffInsurance','$StaffBrief','$SecurityExpense','$CleaningExpense','$PoolExpense','$CentralHeatingExpense','$OtherExpenses')";
    mysqli_query($conn,$add);
    $status = "Added Successfully.
    </br></br><a href='viewBudget.php'>View Added</a>";
}
?>

<meta charset="utf-8">
<title>Add</title>
</head>
<body>
<div class="form">
<p>
 <a href="view.php">View </a> 
| <a href="login.php">Logout</a></p>
<div>
<h1>Add New </h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="number" name="Name" placeholder="Enter Name" required /></p>
<p><input type="text" name="Surname" placeholder="Enter Surname" required /></p>
<p><input type="text" name="userName" placeholder="Enter User Name" required /></p>
<p><input type="number" name="doorNumber" placeholder="Enter Door Number" required /></p>
<p><input type="number" name="feeDebth" placeholder="Enter Fee Debth" ></p>
<p><input type="number" name="phoneNo" placeholder="Enter Phone No" ></p>
<p><input type="email" name="eMail" placeholder="Enter E-Mail" ></p>
<p><input type="date" name="moveInDate" placeholder="Enter Move In Date" required /></p>
<p><input type="date" name="moveOutDate" placeholder="Enter Move Out Date" ></p>


<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>