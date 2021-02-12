<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="utf-8"/>
    <title>Login</title>
   
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

h3 {
    color: white;
  }

  p {
    color: white;
  }

.header{
	 text-decoration:bold;
	 text-align : center;
	 font-size:30px;
	 color:#F96;
	 padding-top:10px;
}

.uName{
	 margin-left: 1px;
     font-family: sans-serif;
     font-size: 18px;
     color: white;
     margin-top: 5px;
}

.pw{
	 color: white;
   
     margin-top: 9px;
     font-size: 18px;
     font-family: sans-serif;
     margin-left: 3px;
     margin-top: 9px;
}

.container{
	font-family:Roboto,sans-serif;
	  background-image:url(https://image.freepik.com/free-vector/dark-blue-blurred-background_1034-589.jpg) ;
    
     border-style: px solid grey;
     margin: 0 auto;
     text-align: center;
     opacity: 0.8;
     margin-top: 67px;
   box-shadow: 2px 5px 5px 0px #eee;
     max-width: 500px;
     padding-top: 10px;
     height: 500px;
     margin-top: 166px;
}

.btn{
  width: 170px;
}
  
.btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
	background:#5900a6;
	color:#fff;
 
	transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;
	
}	 
</style>    
</head>
<body>
<div class="container">

<?php


    require('db.php');
    session_start();
 
    if (isset($_POST['userName'])) {
        $userName = stripslashes($_REQUEST['userName']);    
        $userName = mysqli_real_escape_string($conn, $userName);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
       
        $query    = "SELECT * FROM `users` WHERE userName='$userName'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['userName'] = $userName;
            
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="header">Login</h1>
        <br>

        <label class="uName">Username:  </label>
        <input type="text" name="userName" placeholder="Enter Your Username"/>
         <br>  
        <label class="pw">Password:</label>
        <input type="password"  name="password" placeholder="Enter Your Password"/>
        <br> <br>
        <input type="submit" value="Login" name="submit" class="btn btn-warning"/>
         <br> <br>
        <p><a href="register.php" class="btn btn-warning">New Registration</a></p>
        <div style="text-align:center;">
        
 <p><a href="webNormal.php" class="btn btn-warning">User Point of View</a></p>
      
 <p class="btn btn-warning" onclick="func()">Forgot Password


  </form>

  <script>
function func() {
  alert("Your password has been sent to your E-Mail");
}
</script>
</div>
<?php
    }
?>

</body>
</html>
