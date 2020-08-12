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
        <h1>Sign In</h1>
        <hr>
        <br>
        <form action="">
          <input type="checkbox" name="Staff" value="staff">
          <label for="type">Admin</label>
          <input type="checkbox" name="Staff" value="staff">
          <label for="type">Staff</label>
          <input type="checkbox" name="Member" value="member">
          <label for="type">Member</label>
          <br><br>

          <label for="mail">Email</label>
          <input type="text" id="mail" name="email" placeholder="Your Email">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Your password">



          <input type="submit" value="SignIn">
        </form>
      </div>
</div>

<footer class="footer">
      <h4>Copyright Godfrey Kipng'eno &copy; 2020</h4>
  </footer>

</body>

</html>
