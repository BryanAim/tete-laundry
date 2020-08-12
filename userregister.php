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
        <a href="userSignIn.php">Log in</a>
        <a href="userRegister.php">Sign up</a>
        <a href="index.php">Home</a>
      </div>
    </div>

  </div>
  <body>

    <div class="registerContent">
      <div class="registerDiv">
        <h1>Sign Up (USER)</h1>
        <hr>
        <br>
        <form action="userfinishregister.php" method="post">


          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstName" placeholder="Your name..">

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastName" placeholder="Your last name..">


          <label for="status">Gender</label>
          <select class="statusSelect" name="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>

          <label for="mobileNo">Mobile number</label>
          <input type="text" id="mobileNo" name="mobileNo" placeholder="Your mobileNo..">

          <label for="address">Address</label>
          <input type="address" id="address" name="address" placeholder="Nakuru, Shabab">

          <label for="mail">Email</label>
          <input type="text" id="mail" name="email" placeholder="Your Email">

          <label for="userId">User id</label>
          <input type="text" id="userId" name="userId" placeholder="Your userId">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Your password">

          <label for="rePassword">Retype Password</label>
          <input type="password" id="rePassword" name="rePassword" placeholder="Your password">


          <input type="submit" name="userRegisterSubmit" value="Submit">
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
