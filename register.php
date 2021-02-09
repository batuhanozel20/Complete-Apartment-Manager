<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="utf-8"/>
    <title>Registration</title>
    
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
   padding-left: 0px;
   
}

.pass{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 3px;
}

.name{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 34px;
   
}

.sName{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 9px;
   
}

.uID{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 21px;
   
}

.mail{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 30px;
   
}

.phone{
	 margin-left: 1px;
   font-family: sans-serif;
   font-size: 18px;
   color: white;
   margin-top: 5px;
   padding-left: 1px;
   
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
   height: 620px;
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
            <h1 class="header">Registration</h1>
            
            <label class="uName">Username: </label>
            <input type="text" name="userName" placeholder="Username" required />
            <br>
            <label class="pass">Password:</label>
            <input type="password" class="login-input" name="password" placeholder="Password" required/>
            <br>
            <label class="name">Name: </label>
            <input type="text" class="login-input" name="Name" placeholder="Name" required />
            <br>
            <label class="sName">Surname:</label>
            <input type="text" class="login-input" name="Surname" placeholder="Surname" required/>
            <br>
            <label class="uID">User ID:</label>
            <input type="password" class="login-input" name="userID" placeholder="UserID" required/>
            <br>
            <label class="mail">E-Mail:</label>
            <input type="email" class="login-input" name="eMail" placeholder="example@hotmail.com" required />
            <br>
            <label class="phone">Phone No:</label>
            <input type="number" class="login-input" name="phoneNo" placeholder="Phone Number" required/>
             <br>  <br>
            <form>
            <label for= "doorNumber"style="color:white;font-family: sans-serif">Flat Number</label>
        
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
            <label for= "isAdmin" style="color:white;font-family: sans-serif">Is Admin(1 for YES 0 for NO)</label>
        
             <select id = "isAdmin" name="isAdmin">
               <option value = "1">1</option>
               <option value = "0">0</option>
               </select>
               <br>
             <br> 
             <div style="text-align:center;">
             <input type="submit" value="Register" name="submit" class="btn btn-warning"/>
             <br> <br> 
             <p><a href="login.php" class="btn btn-warning">Click to Login</a></p>
             </div>
    </form>
    </form>
    </form>
       
    
<?php
    }
?>
</body>
</html>
