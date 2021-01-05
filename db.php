<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "web programming";

$conn = mysqli_connect($servername, $username, $password, $dbName);


if (!$conn) {
  echo "Connection failed!";
}
echo "";
?>