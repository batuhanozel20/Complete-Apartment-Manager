<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
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
  padding: 12px 50px;
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
    session_start();
 
    if (isset($_POST['userName'])) {
        $userName = stripslashes($_REQUEST['userName']);    
        $userName = mysqli_real_escape_string($conn, $userName);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
       
        $query    = "SELECT * FROM `usertable` WHERE userName='$userName'
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
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="userName" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="register.php" class="button">New Registration</a></p>
        <div style="text-align:center;">
        <br>
       
<button type="button" onclick="func()">Forgot Password</button>
<p class="link"><a href="webNormal.php" class="button">User Point of View</a></p>
  </form>

  <script>
function func() {
  alert("Your password has been sent to your E-Mail");
}
</script>
<?php
    }
?>

</body>
</html>
