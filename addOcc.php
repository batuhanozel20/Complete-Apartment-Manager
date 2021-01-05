<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
   
    <link rel="stylesheet" href="gui.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  body{ 
  background-image:url('b.jpg');
  background-repeat:no-repeat;
  background-size: cover;
}
table{background-color: #fff;

}
</style>
</head>
<body>
<table border="1" align="center" width="80%">
<tr>
<td>Name</td>
<td>Surname</td>
<td>Username</td>
<td>Door Number</td>
<td>Fee Debth</td>
<td>Phone Number</td>
<td>E-Mail</td>
<td>Move in Date</td>
<td>Move out Date</td>
</tr>
<?php
    require('db.php');
    $result=mysqli_query($conn,"SELECT * FROM occupants");
    
    while($row=mysqli_fetch_array($result)){
        echo'<tr>';
        echo '<td>'.$row['Name'].'</td>';
        echo '<td>'.$row['Surname'].'</td>';
        echo '<td>'.$row['userName'].'</td>';
        echo '<td>'.$row['doorNumber'];
        echo '<td>'.$row['feeDebth'];
        echo '<td>' .$row['phoneNo'].'</td>';
        echo '<td>'.$row['eMail'].'</td>';
        echo '<td>'.$row['moveInDate'].'</td>';
        echo '<td>'.$row['moveOutDate'].'</td>';
        echo "<br>";
        echo '</tr>';}
?>
</body>
</html>
