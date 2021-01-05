<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
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
    
    if (isset($_REQUEST['userID'])) {
        
       
        
       $userName = stripslashes($_REQUEST['userName']);
        $userName = mysqli_real_escape_string($conn, $userName);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

        $Name = stripslashes($_REQUEST['Name']);
        $Name = mysqli_real_escape_string($conn, $Name);

        $Surname = stripslashes($_REQUEST['Surname']);
        $Surname = mysqli_real_escape_string($conn, $Surname);
        
        $userID = stripslashes($_REQUEST['userID']);
        $userID = mysqli_real_escape_string($conn, $userID);

        $eMail = stripslashes($_REQUEST['eMail']);
        $eMail = mysqli_real_escape_string($conn, $eMail);

        $phoneNo = stripslashes($_REQUEST['phoneNo']);
        $phoneNo = mysqli_real_escape_string($conn, $phoneNo);
        
        $doorNumber = stripslashes($_REQUEST['doorNumber']);
        $doorNumber = mysqli_real_escape_string($conn, $doorNumber);
       
        $isAdmin = stripslashes($_REQUEST['isAdmin']);
        $isAdmin = mysqli_real_escape_string($conn, $isAdmin);
        
  
        $query= "INSERT INTO `usertable` (`userID`, `password`, `Name`, `Surname`, `userName`, `eMail`, `phoneNo`, `doorNumber`,`isAdmin` )
                     VALUES ('$userID', '" . md5($password) . "', '$Name', '$Surname', '$userName' , '$eMail', '$phoneNo', '$doorNumber','$isAdmin')";
        $result= mysqli_query($conn, $query);

       

        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click to <a href='login.php'>Login</a></p>
                  </div>";
        } 

         
        else {
            echo "<div class='form'>
                  <h3>UserID / E-Mail / Phone Number is in use</h3><br/>
                  <p class='link'><a href='register.php'>Click to Register Again</a></p>
                  </div>";
        }
  
    } 
        else {
?>
   
            <form class="form" action="" method="post">
            <h1 class="login-title">Registration</h1>
            <input type="text" class="login-input" name="userName" placeholder="Username" required />
            <input type="password" class="login-input" name="password" placeholder="Password" required/>
            <input type="text" class="login-input" name="Name" placeholder="Name" required />
            <input type="text" class="login-input" name="Surname" placeholder="Surname" required/>
            <input type="password" class="login-input" name="userID" placeholder="UserID" required/>
            <input type="email" class="login-input" name="eMail" placeholder="example@hotmail.com" required />
            <input type="number" class="login-input" name="phoneNo" placeholder="Phone Number" required/>
       
            <form>
            <label for= "doorNumber">Flat Number</label>
        
             <select id = "doorNumber" name="doorNumber">
               <option value = "0">0</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
               <option value = "6">6</option>
               <option value = "7">7</option>
               <option value = "8">8</option> 
               <option value = "9">9</option>
               <option value = "10">10</option>
              </select>
             <br>
             <br>
             <form>
            <label for= "isAdmin">Is Admin(1 for YES 0 for NO)</label>
        
             <select id = "isAdmin" name="isAdmin">
               <option value = "1">1</option>
               <option value = "0">0</option>
               </select>
               <br>
             <br> 
             <div style="text-align:center;">
             <input type="submit" class="button" value="Register">
             
             <p class="submit"><a href="login.php">Click to Login</a></p>
             </div>
    </form>
    </form>
    </form>
       
    
<?php
    }
?>
</body>
</html>
