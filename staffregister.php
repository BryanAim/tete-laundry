<?php 	require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Online Laundry</title>
    <link rel="stylesheet" type="text/css" href="stylesBackup1.css">
    <style>
    .navactive {
        color: white;
        background-color: #bcb562;
    }
    </style>
  </head>
  <div class="header">
    <div class="logoWrapper">
      <img class="logo" src="BNN.png" border="0" />
      <div class="topNav">
        <a href="staffsignin.php">Log in</a>
        <a href="staffregister.php">Sign up</a>
        <a href="management.php">Home</a>
      </div>
    </div>

  </div>
  <body>

    <div class="registerContent">
      <div class="registerDiv">
        <h1>Sign Up Here</h1>
        <hr>
        <br>
        <form action="finishregister.php" method="post">
          

          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstName" placeholder="Your name..">

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastName" placeholder="Your last name..">

          <label for="status">Gender</label>
          <select class="statusSelect" name="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>
          
          <label for="citizenNo">Member Number</label>
          <input type="text" id="citizenNo" name="citizenNumber" placeholder="Ex.1">

          <label for="dob">Date of birth</label>
          <input type="date" id="dob" name="dateOfBirth" placeholder=""><br>

          <label for="mobileNo">Mobile Number</label>
          <input type="text" id="mobileNo" name="mobileNumber" placeholder="Ex. 07123453213">

          <label for="address">Address</label>
          <input type="address" id="address" name="address" placeholder="Nakuru, Shabab">

          <label for="mail">Email</label>
          <input type="text" id="mail" name="email" placeholder="Your Email">

          <label for="userid">ID for this website</label>
          <input type="text" id="userid" name="userId" placeholder="Your ID">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Your password">

          <label for="rePassword">Retype Password</label>
          <input type="password" id="rePassword" name="rePassword" placeholder="Your password">


          <input type="submit" name="staffRegisterSubmit"value="Submit">
        </form>
      </div>
    </div>
      <div class="regisImageWrapper">
        <img src="regis.jpg" alt="">
      </div>

      <footer class="footer">
      <h4>Copyright Godfrey Kipng'eno &copy; 2020</h4>
  </footer>

  </body>

</html>
