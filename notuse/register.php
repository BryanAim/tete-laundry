<!DOCTYPE html>
<html>
  <head>
    <title>ITS351_PROJECT</title>
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
        <a href="signin.php">Log in</a>
        <a href="register.php">Sign up</a>
        <a href="management.php">Home</a>
      </div>
    </div>

  </div>
  <body>

    <div class="registerContent">
      <div class="registerDiv">
        <h1>Sign Up</h1>
        <hr>
        <br>
        <form action="">

          <input type="checkbox" name="Staff" value="staff">
          <label for="type">Staff</label>
          <input type="checkbox" name="Member" value="member">
          <label for="type">Member</label>
          <br><br>

          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">

          <label for="mail">Email</label>
          <input type="text" id="mail" name="email" placeholder="Your Email">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Your password">

          <label for="repassword">Retype Password</label>
          <input type="password" id="repassword" name="repassword" placeholder="Your password">


          <input type="submit" value="Submit">
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
