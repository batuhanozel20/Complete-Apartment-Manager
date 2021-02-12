<?php
 require('db.php');
$delID= $_GET['id'];
 
$result=mysqli_query($conn,"DELETE FROM occupants
WHERE occID=".$delID);
 
if($result>0){
echo "Deleted Successfully";
header( "refresh:1;url=view.php" ); ?>

<?php }
else
echo "There is a problem it cannot be deleted ";
 
?>
