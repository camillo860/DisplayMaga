<?php
include('../utility.php');

 $user='';
 $psw='';
if (isset($_POST['user']) && (isset($_POST['psw'])))  {
    $user=$_POST['user'];
    $psw=$_POST['psw'];
   echo $user;
   echo $psw;

loginCheck($user,$psw);
  
}
?>
<html>
    <head>
        <title> DISPLAY
</title>
<link rel="stylesheet" href="styleAdmin.css" /> 
</head>
<body class="backgroundPage">
  
    <div class="loginBox border">
    <h3> Autenticazione </h3>
    <form action="login.php"  class="center" method="POST">
       <div class="rowLoginBox"> Username:  <i class="login__icon fas fa-user"></i>
        <input type="TEXT" name="user" placeholder="Username" ></div>
        <br>    <div class="rowLoginBox">
       Password:  	<i class="login__icon fas fa-lock"></i><input type="PASSWORD" name="psw"> </div>
      <br> <br> <input type="submit" name="LOGIN">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="RESET" >
</form>
</div>


</body>
</html>