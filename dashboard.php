<?php
require('db.php');
include("authenticate.php");
?>
<!DOCTYPE html>
<html>
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
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/a.css" />
</head>
<body>
<div class="form">
<p style="font-size:30px">Welcome to Dashboard.</p>
<p><a href="web.php" class="button">Website</a><p>
<p><a href="login.php" class="button">Logout</a></p>
</div>
</body>
</html>