<?php
 require('db.php');
$delID= $_GET['id'];
 
$result=mysqli_query($conn,"DELETE FROM staff
WHERE id=".$delID);
 
if($result>0){
echo "Deleted Successfully";
header( "refresh:1;url=viewStaff.php" ); ?>

<?php }
else
echo "There is a problem it cannot be deleted ";
 
?>