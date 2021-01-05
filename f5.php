
<h1>Flat 5</h1> 
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
  padding: 15px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }

</style>
</head>
    <?php
    require('db.php'); 
     $sql = "SELECT * FROM occupants WHERE doorNumber=5";
     $result = $conn->query($sql);
     echo "<table style=background-color:white border='1'>
     <tr>
     <th>ID</th>
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
        echo "<td>" . $row['userID'] . "</td>";
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
       <a href="web.php" class="button">Website</a>
       </div>  
    </div>