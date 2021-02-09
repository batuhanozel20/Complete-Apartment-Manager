<!DOCTYPE html>
<html>
<?php  include('db.php'); 

?>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body{ 
  background-image:url('b.jpg');
  background-repeat:no-repeat;
  background-size: cover;
}

#tabs {
  overflow: hidden;
  width: 100%;
  margin: 30px;
  padding: 0;
  list-style: none;
}

#tabs li {
  float: left;
  margin: 0 .5em 0 0;
}

#tabs a {
  position: relative;
  background: #6e6e6e;
  background-image: linear-gradient(to bottom, #fff, #6e6e6e);
  padding: .7em 3.5em;
  float: left;
  text-decoration: none;
  color: #444;
  border-radius: 5px 0 0 0;
  box-shadow: 0 2px 2px rgba(0,0,0,.4);
}

#tabs a:hover,
#tabs a:hover::after,
#tabs a:focus,
#tabs a:focus::after {
  background: #fff;
}

#tabs a:focus {
  outline: 0;
}

#tabs a::after {
  content:'';
  position:absolute;
  z-index: 1;
  top: 0;
  right: -.5em;
  bottom: 0;
  width: 1em;
  background: #6e6e6e;
  background-image: linear-gradient(to bottom, #fff, #6e6e6e);
  box-shadow: 2px 2px 2px rgba(0,0,0,.4);
  transform: skew(10deg);
  border-radius: 0 5px 0 0;
}

#tabs #current a,
#tabs #current a::after {
  background: #fff;
  z-index: 3;
  
}

#content {
 
  background: #fff;
  padding: 1em;
 
  position: relative;
  z-index: 3;
  border-radius: 0 5px 5px 5px;
  box-shadow: 0 -2px 3px -2px rgba(0, 0, 0, .5);
  
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
</head>

<body>
<?php
require('db.php');
?>
<center><font style="font-family:Arial;font-size:30px;text-align:center;border-width:5px; border-style:solid;">
BHAN Apartment </font></center>

<ul id="tabs">
    <li><a href="#" name="tab1">Announcements</a></li>
    <li><a href="#" name="tab2">Occupants</a></li>
    <li><a href="#" name="tab7">Flat</a></li>
    <li><a href="#" name="tab8">Debths</a></li>
    <li><a href="#" name="tab3">Apartment Budget</a></li>
    <li><a href="#" name="tab4">Staff</a></li>
    <li><a href="#" name="tab5">Registeration</a></li>
    <li><a href="#" name="tab6">Logout</a></li>
</ul>

<div id="content">
    <div id="tab1">

    <table class="table table-bordered w-50 p-3">                     
     <thead>
            <tr >
              <th scope="col">ID</th>
              <th scope="col">Date</th>
              <th scope="col">Announcement</th>
              
            </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM announcement";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["annID"]. '</td>
                  <td>' . $row["annDate"] .'</td>
                  <td> '.$row["ann"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table>
   

    <div id="tab2">
    <h1>Occupants</h1> 
    <?php 
     $sql = "SELECT * FROM occupants";
     $result = $conn->query($sql);
     echo "<table border='1'>
     <tr>
     <th>Name</th>
     <th>Surname</th>
     <th>Username</th> 
     <th>Flat Number</th>
     <th>Fee Debth</th>
     <th>Phone Number</th>
     <th>E-Mail</th>
     <th>Move in Date</th>
     <th>Move out Date</th>
     </tr>";
    
 
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Surname'] . "</td>";
        echo "<td>" . $row['userName'] . "</td>";
        echo "<td>" . $row['doorNumber'] . "</td>"; 
        echo "<td>" . $row['feeDebth'] . "</td>";
        echo "<td>" . $row['phoneNo'] . "</td>";
        echo "<td>" . $row['eMail'] . "</td>";
        echo "<td>" . $row['moveInDate'] . "</td>";
        echo "<td>" . $row['moveOutDate'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
        ?>
        <br>
        <br>
        <div style="text-align:center;">
       <a href="view.php" class="button">EDIT</a>
       </div>
        
    </div>

    
    <div id="tab3"> 
       <h1>Apartment Budget</h1> 
       <?php 
     $sql = "SELECT * FROM budget";
     $result = $conn->query($sql);
     echo "<table border='1'>
     <tr>
     <th>Garden Expense</th>
     <th>Electric Bill</th>
     <th>Generator Fuel</th>
     <th>Generator Maintance</th>
     <th>Water Bill</th>
     <th>Staff Salary</th>
     <th>Staff Insurance</th>
     <th>Staff Brief</th>
     <th>Security Expsense</th>
     <th>Cleaning Expense</th>
     <th>Pool Expense</th>
     <th>Central Heating Expense</th>
     <th>Other Expenses</th>
     </tr>";
    
 
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['GardenExpense'] . "</td>";
        echo "<td>" . $row['ElectricBill'] . "</td>";
        echo "<td>" . $row['GeneratorFuel'] . "</td>";
        echo "<td>" . $row['GeneratorMaintance'] . "</td>";
        echo "<td>" . $row['WaterBill'] . "</td>";
        echo "<td>" . $row['StaffSalary'] . "</td>";
        echo "<td>" . $row['StaffInsurance'] . "</td>";
        echo "<td>" . $row['StaffBrief'] . "</td>";
        echo "<td>" . $row['SecurityExpense'] . "</td>";
        echo "<td>" . $row['CleaningExpense'] . "</td>";
        echo "<td>" . $row['PoolExpense'] . "</td>";
        echo "<td>" . $row['CentralHeatingExpense'] . "</td>";
        echo "<td>" . $row['OtherExpenses'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
        ?>
        <br>
        <br>
        
        <div style="text-align:center;">
        <a href="viewBudget.php" class="button">EDIT</a>
        </div>
        </div>
  
    <div id="tab4"> 
    <h1>Staff</h1>
    <?php 
     $sql = "SELECT * FROM staff";
     $result = $conn->query($sql);

     echo "<table border='1'>
     <tr>
     <th>Name</th>
     <th>Surname</th>
     <th>Role</th>
     <th>Phone Number</th>
     <th>Salary</th>
     </tr>";

     while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['Name'] . "</td>";
      echo "<td>" . $row['Surname'] . "</td>";
      echo "<td>" . $row['Role'] . "</td>";
      echo "<td>" . $row['phoneNo'] . "</td>";
      echo "<td>" . $row['Salary'] . "</td>";
      echo "</tr>";
    }
      echo "</table>";
      
      ?>
      <br>
      <br>
      
      <a href="viewStaff.php" class="button">EDIT</a>
      </div>
     

    <div id="tab5">
    <h1>Registered Users</h1> 
    <?php 
     $sql = "SELECT * FROM usertable";
     $result = $conn->query($sql);
     echo "<table border='1'>
     <tr>
     <th>User ID</th>
     <th>Name</th>
     <th>Surname</th> 
     <th>User Name</th>
     <th>E-Mail</th>
     <th>Phone Number</th>
     <th>Door Number</th>
     <th>Is Admin?(0 for NO and 1 for YES)</th>
     </tr>";
    
 
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['userID'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Surname'] . "</td>";
        echo "<td>" . $row['userName'] . "</td>"; 
        echo "<td>" . $row['eMail'] . "</td>";
        echo "<td>" . $row['phoneNo'] . "</td>";
        echo "<td>" . $row['doorNumber'] . "</td>";
        echo "<td>" . $row['isAdmin'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
        $conn->close();
        ?>
        <br>
        <br>
    <a class="button" href="register.php">Register New User</a>
    
    <a class="button" href="viewUser.php">Delete a User</a>


    </div>

    <div id="tab6">
    <a class="link" href="login.php">Logout</a><br/>
    </div>
    
    <div id="tab7">
    
    <form method="POST" action='' >
    <a href="f1.php" class="button">Flat 01</a>
      </form>
      <br>
     
      <form method="POST" action='' >
    <a href="f2.php" class="button">Flat 02</a>
      </form>
      <br>

      <form method="POST" action='' >
    <a href="f3.php" class="button">Flat 03</a>
      </form>
      <br>

      <form method="POST" action='' >
    <a href="f4.php" class="button">Flat 04</a>
      </form>
      <br>

      <form method="POST" action='' >
    <a href="f5.php" class="button">Flat 05</a>
      </form>
      <br>

      <form method="POST" action='' >
    <a href="f6.php" class="button">Flat 06</a>
      </form>
      <br>

      <form method="POST" action='' >
    <a href="f7.php" class="button">Flat 07</a>
      </form>
      <br>

      <form method="POST" action='' >
    <a href="f8.php" class="button">Flat 08</a>
      </form>
      <br>

      <form method="POST" action='' >
    <a href="f9.php" class="button">Flat 09</a>
      </form>
      <br>

      <form method="POST" action='' >
    <a href="f10.php" class="button">Flat 10</a>
      </form>
       <br>


    </div>

    <div id="tab8">
    <a href="debth.php" class="button">View Who Has Debth></a>
    </div>
</div>

    

<script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
<script>
$(document).ready(function() {
    $("#content").find("[id^='tab']").hide(); 
    $("#tabs li:first").attr("id","current"); 
    $("#content #tab1").fadeIn(); 

    $(".link").click(function(){
        var elemId = $(this).attr('href')
        $(elemId).find('a:first').click();
    });


    $('#tabs a').click(function(e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "current"){ 
         return;
        }
        else{
          $("#content").find("[id^='tab']").hide();
          $("#tabs li").attr("id",""); 
          $(this).parent().attr("id","current");
          $('#' + $(this).attr('name')).fadeIn(); 
        }
    });
});
</script>
</body>
</html>
<?php  if(isset($_POST['Flat1'])) {
$q =("SELECT*FROM occupants WHERE doorNumber=1");
if($q) {
echo ".";
}else {
echo "error";
}
}?>
