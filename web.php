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
    background-image:url(https://s3.envato.com/files/243754334/primag.jpg);
	 background-repeat:no-repeat;
	 background-size:cover;
	 width:100%;
	 height:100vh;
	 overflow:auto;
}

.table {
   margin: auto;
   width: 50% !important; 
}

.btn-group{
  padding-left: 5px;
  width: 0px;
  margin-left: 550px;
  
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
  background-image: linear-gradient(to bottom, #b3b1b1, #FFB900);
  padding: .7em 3.5em;
  float: left;
  text-decoration: none;
  color: #000000;
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
  background-image: linear-gradient(to bottom, #ffb300, #ffdd00);
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
 
  
  padding: 1em;
 
  position: relative;
  z-index: 3;
  border-radius: 0 5px 5px 5px;
 
  
}
.btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
	background:#5900a6;
	color:#fff;
 
	transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;
	
}	 

.btn{
  width: 170px;
  
}

  th {
    background-color:#FFB900;
    
} 

td {
    background-color:white;
    
} 

h1{
  color:white;
  text-align: center;
}

</style>
</head>

<body>
<?php
require('db.php');
?>
<center><font style="font-family:Arial;color:orange;font-size:30px;text-align:center;">
BHAN Apartment </font></center>

<ul id="tabs">
    <li><a href="#" name="tab1">Announcements</a></li>
    <li><a href="#" name="tab2">Occupants</a></li>
    <li><a href="#" name="tab8">Moved Out</a></li>
    <li><a href="#" name="tab9">Debth</a></li>
    <li><a href="#" name="tab7">Flat</a></li>
    <li><a href="#" name="tab3">Apartment Budget</a></li>
    <li><a href="#" name="tab4">Staff</a></li>
    <li><a href="#" name="tab5">Registeration</a></li>
    <li><a href="#" name="tab6">Other Years' Apartment Budget</a></li>
</ul>

<div id="content">
    <div id="tab1">
    <h1>Announcements</h1>
    <table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th scope="col">Date</th>
              <th scope="col">Announcement</th>
              
            </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM announcement ORDER BY annDate DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {


        echo '<tr>
                  <td scope="row">' . $row["annDate"]. '</td>
                  <td> '.$row["ann"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table>
<br>
<div style="text-align:center;">
       <a href="viewAnn.php" class="btn btn-warning" style="text-align: center";>EDIT</a>
       <a class="btn btn-warning" href="login.php">LOGOUT</a>
       </div>

</div> 

<div id="content">
    <div id="tab2">    <h1>Occupants</h1> 
    <table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">ID</th>
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  style="width: 2%" scope="col">Flat Number</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">E-Mail</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM occupants";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["occID"]. '</td>
                  <td>' . $row["Name"] .'</td>
                  <td>' . $row["Surname"] .'</td>
                  <td> '.$row["doorNumber"] .'</td>
                  <td> '.$row["phoneNo"] .'</td>
                  <td> '.$row["eMail"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table>
<br>   
        <div style="text-align:center;">
       <a href="view.php" class="btn btn-warning">EDIT</a>
       <a class="btn btn-warning" href="login.php">LOGOUT</a>
       </div>
        
 </div>

 <div id="content">	
    <div id="tab8">	
    <h1>Moved Out</h1> 	
    <table  class="table table-bordered w-50 p-3 ">                     	
     <thead>	
            <tr >	
              <th  scope="col">Name</th>	
              <th  scope="col">Surname</th>	
              <th  scope="col">Phone Number</th>	
              <th  scope="col">E-Mail</th>	
              <th  scope="col">Debth</th>	
              <th  scope="col">Move Out Date</th>	
             </tr>	
        </thead>	
        <tbody>	
<?php 	

$sql = "SELECT * FROM occupants WHERE moveOutDate!=0000-00-00";	
$result = $conn->query($sql);	
if ($result->num_rows > 0) {	


    while($row = $result->fetch_assoc()) {	

                echo '<tr>	
                  <td scope="row">' . $row["Name"]. '</td>	
                  <td>' . $row["Surname"] .'</td>	
                  <td> '.$row["phoneNo"] .'</td>	
                  <td> '.$row["eMail"] .'</td>	
                  <td> '.$row["feeDebth"] .'</td>	
                  <td> '.$row["moveOutDate"] .'</td>	
                </tr>'; }	
} else {	
    echo "0 results";	
} 	
?>	
       </tbody>	
    </div>	
</table>	
<br>   	
        <div style="text-align:center;">	
       <a href="view.php" class="btn btn-warning">EDIT</a>	
       <a class="btn btn-warning" href="login.php">LOGOUT</a>	
       </div>	

 </div>
 

 <div id="content">
    <div id="tab9">
    <h1>Debth</h1> 
    <table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  style="width: 2%" scope="col">Flat Number</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">E-Mail</th>
              <th  scope="col">Fee Debth</th>
              <th  scope="col">Last Payment</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM occupants WHERE feeDebth!=0";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Surname"] .'</td>
                  <td> '.$row["doorNumber"] .'</td>
                  <td> '.$row["phoneNo"] .'</td>
                  <td> '.$row["eMail"] .'</td>
                  <td> '.$row["feeDebth"] .'</td>
                  <td> '.$row["lastPayment"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table>
<br>   
        <div style="text-align:center;">
       <a href="view.php" class="btn btn-warning">EDIT</a>
       <a class="btn btn-warning" href="login.php">LOGOUT</a>
       </div>
        
 </div>

    
    <div id="tab3"> 
       <h1>Apartment Budget</h1> 
      <table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th scope="col">Utility</th>
              <th scope="col">Price</th>
            
              
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM budget WHERE year=2021  ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["budName"]. '</td>
                  <td>' . $row["budPrice"] .'</td>
                  
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table>
<br>     

<div class="btn-group" style="margin-left: 800px;width:170px">	

  <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	
    Total	
  </button>	
  <div class="dropdown">	
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">	
    <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     	
     <thead>	
            <tr >	
              <th  scope="col">Total</th>	

             </tr>	
        </thead>	
        <tbody>	
<?php 	

$sql = "SELECT SUM(budPrice) FROM budget WHERE year=2021";	
$result = $conn->query($sql);	
if ($result->num_rows > 0) {	

    while($row = $result->fetch_assoc()) {	

                echo '<tr>	
                  <td scope="row">' . $row["SUM(budPrice)"]. '</td>	
                	
                </tr>'; }	
} else {	
    echo "0 results";	
} 	
?>	
       </tbody>	
    </div>	
</table></a>	

  </div>	
  </div>
  </div>
<br>
<br>


        <div style="text-align:center;">
       <a href="viewBudget.php" class="btn btn-warning">EDIT</a>
       <a class="btn btn-warning" href="login.php">LOGOUT</a>
       </div>
        
 </div>
  
    <div id="tab4"> 
    <h1>Staff</h1>
    <table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  scope="col">Role</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">Salary</th>
            
              
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM staff";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Surname"] .'</td>
                  <td>' . $row["Role"] .'</td>
                  <td>' . $row["phoneNo"] .'</td>
                  <td>' . $row["Salary"] .'</td>
                  
                  
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table>
<br>  
        <div style="text-align:center;">
       <a href="viewStaff.php" class="btn btn-warning">EDIT</a>
       <a class="btn btn-warning" href="login.php">LOGOUT</a>
       </div>
        
 </div>
     

    <div id="tab5">
    <h1>Registered Users</h1> 
    <table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  scope="col">Username</th>
              <th  scope="col">E-Mail</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">Flat Number</th>
            
              
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Surname"] .'</td>
                  <td>' . $row["userName"] .'</td>
                  <td>' . $row["eMail"] .'</td>
                  <td>' . $row["phoneNo"] .'</td>
                  <td>' . $row["doorNumber"] .'</td>
                  
                  
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table>
<br>
        
    <div style="text-align:center;">
    <a class="btn btn-warning" href="register.php">Register New User</a>
    
    <a class="btn btn-warning" href="viewUser.php">Delete a User</a>

    <a class="btn btn-warning" href="login.php">LOGOUT</a>
    
        </div>
   

    </div>

    <div id="tab6">
   
    <form method="POST" action='' >
    <div class="btn-group" style="width:500px;height:100px;font-size:large">
    
  <button  class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Apartment Budget  of Year 2020
  </button>
  <div class="dropdown" >
  <div class="dropdown-menu"  aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Utility</th>
              <th  scope="col">Price</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM budget WHERE year=2020";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["budName"]. '</td>
                  <td>' . $row["budPrice"] .'</td>
                 
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
    <div class="btn-group" style="margin-left: 800px;width:170px">	

<button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	
  
</button>	
<div class="dropdown">	
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">	
  <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     	
   <thead>	
          <tr >	
            <th  scope="col">Total</th>	

           </tr>	
      </thead>	
      <tbody>	
<?php 	

$sql = "SELECT SUM(budPrice) FROM budget WHERE year=2020";	
$result = $conn->query($sql);	
if ($result->num_rows > 0) {	

  while($row = $result->fetch_assoc()) {	

              echo '<tr>	
                <td scope="row">' . $row["SUM(budPrice)"]. '</td>	
                
              </tr>'; }	
} else {	
  echo "0 results";	
} 	
?>	
     </tbody>	
  </div>	
</table></a>	

</div>	
</div> 
</table></a>

  </div>
  </form>
  
  <br>
    <div class="btn-group" style="width:500px;height:100px;font-size:large">
    
  <button class="btn btn-warning" style="width:250px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Apartment Budget of Year 2019
  </button>
  <div class="dropdown">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Utility</th>
              <th  scope="col">Price</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM budget WHERE year=2019";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["budName"]. '</td>
                  <td>' . $row["budPrice"] .'</td>
                 
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
    <div class="btn-group" style="margin-left: 800px;width:170px">	

<button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	
 
</button>	
<div class="dropdown">	
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">	
  <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     	
   <thead>	
          <tr >	
            <th  scope="col">Total</th>	

           </tr>	
      </thead>	
      <tbody>	
<?php 	

$sql = "SELECT SUM(budPrice) FROM budget WHERE year=2019";	
$result = $conn->query($sql);	
if ($result->num_rows > 0) {	

  while($row = $result->fetch_assoc()) {	

              echo '<tr>	
                <td scope="row">' . $row["SUM(budPrice)"]. '</td>	
                
              </tr>'; }	
} else {	
  echo "0 results";	
} 	
?>	
     </tbody>	
  </div>	
</table></a>	

</div>	
</div> 
</table></a>

  </div>
  
  </div>
  </form>
  </div>
</div>

    
    
    <div id="tab7">
   
    <form method="POST" action='' >
    <div class="btn-group">
    
  <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Flat 1
  </button>
  <div class="dropdown">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  style="width: 2%" scope="col">Door Number</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">E-Mail</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM occupants WHERE doorNumber=1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Surname"] .'</td>
                  <td> '.$row["doorNumber"] .'</td>
                  <td> '.$row["phoneNo"] .'</td>
                  <td> '.$row["eMail"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table></a>
    
  </div>
  </div>
  

  
  <div class="btn-group">
    
  <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Flat 2
  </button>
  <div class="dropdown">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  style="width: 2%" scope="col">Door Number</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">E-Mail</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM occupants WHERE doorNumber=2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Surname"] .'</td>
                  <td> '.$row["doorNumber"] .'</td>
                  <td> '.$row["phoneNo"] .'</td>
                  <td> '.$row["eMail"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table></a>
    
  </div>
  </div>

     
  <div class="btn-group">
    
  <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Flat 3
  </button>
  <div class="dropdown">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  style="width: 2%" scope="col">Door Number</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">E-Mail</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM occupants WHERE doorNumber=3";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Surname"] .'</td>
                  <td> '.$row["doorNumber"] .'</td>
                  <td> '.$row["phoneNo"] .'</td>
                  <td> '.$row["eMail"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table></a>
    
  </div>
  </div>
      
  <div class="btn-group">
    
  <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Flat 4
  </button>
  <div class="dropdown">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  style="width: 2%" scope="col">Door Number</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">E-Mail</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM occupants WHERE doorNumber=4";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Surname"] .'</td>
                  <td> '.$row["doorNumber"] .'</td>
                  <td> '.$row["phoneNo"] .'</td>
                  <td> '.$row["eMail"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table></a>
    
  </div>
  </div>
     
  <div class="btn-group">
    
  <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Flat 5
  </button>
  <div class="dropdown">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  style="width: 2%" scope="col">Door Number</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">E-Mail</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM occupants WHERE doorNumber=5";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Surname"] .'</td>
                  <td> '.$row["doorNumber"] .'</td>
                  <td> '.$row["phoneNo"] .'</td>
                  <td> '.$row["eMail"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table></a>
    
  </div>
  </div>
     
  <div class="btn-group">
    
  <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Flat 6
  </button>
  <div class="dropdown">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  style="width: 2%" scope="col">Door Number</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">E-Mail</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM occupants WHERE doorNumber=6";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Surname"] .'</td>
                  <td> '.$row["doorNumber"] .'</td>
                  <td> '.$row["phoneNo"] .'</td>
                  <td> '.$row["eMail"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table></a>
    
  </div>
  </div>
      
  <div class="btn-group">
    
  <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Flat 7
  </button>
  <div class="dropdown">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  style="width: 2%" scope="col">Door Number</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">E-Mail</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM occupants WHERE doorNumber=7";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Surname"] .'</td>
                  <td> '.$row["doorNumber"] .'</td>
                  <td> '.$row["phoneNo"] .'</td>
                  <td> '.$row["eMail"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table></a>
    
  </div>
  </div>
     
  <div class="btn-group">
    
  <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Flat 8
  </button>
  <div class="dropdown">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  style="width: 2%" scope="col">Door Number</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">E-Mail</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM occupants WHERE doorNumber=8";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Surname"] .'</td>
                  <td> '.$row["doorNumber"] .'</td>
                  <td> '.$row["phoneNo"] .'</td>
                  <td> '.$row["eMail"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table></a>
    
  </div>
  </div>
    
  <div class="btn-group">
    
  <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Flat 9
  </button>
  <div class="dropdown">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  style="width: 2%" scope="col">Door Number</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">E-Mail</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM occupants WHERE doorNumber=9";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Surname"] .'</td>
                  <td> '.$row["doorNumber"] .'</td>
                  <td> '.$row["phoneNo"] .'</td>
                  <td> '.$row["eMail"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table></a>
    
  </div>
  </div>
     
  <div class="btn-group">
    
  <button class="btn btn-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Flat 10
  </button>
  <div class="dropdown">
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"><table  class="table table-bordered w-50 p-3 ">                     
     <thead>
            <tr >
              <th  scope="col">Name</th>
              <th  scope="col">Surname</th>
              <th  style="width: 2%" scope="col">Door Number</th>
              <th  scope="col">Phone Number</th>
              <th  scope="col">E-Mail</th>
             </tr>
        </thead>
        <tbody>
<?php 

$sql = "SELECT * FROM occupants WHERE doorNumber=10";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {

                echo '<tr>
                  <td scope="row">' . $row["Name"]. '</td>
                  <td>' . $row["Surname"] .'</td>
                  <td> '.$row["doorNumber"] .'</td>
                  <td> '.$row["phoneNo"] .'</td>
                  <td> '.$row["eMail"] .'</td>
                </tr>'; }
} else {
    echo "0 results";
} 
?>
       </tbody>
    </div>
</table></a>
    
  </div>
  </div>
  
    </form>
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
