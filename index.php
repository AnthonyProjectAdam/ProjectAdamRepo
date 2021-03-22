<?php
include "login.php";
?>
<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <!--Important to make the site responsive-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>home - Atlas Anchor Systems</title>
  <link href="Style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>

  <!--Navbar starts here-->
  <section class="Navbar">
    <Div class="container">
      <Div class="logo">
        <a href="index.php">
          <img src="images/AtlasImage.png" alt="Atlas Anchor Systems logo" class="img-responsive"></a>
      </Div>

      <div class="menu text-right ">
        <ul>

          <li>
            <a href="http://atlas-anchor.com/faq/">FAQ</a>
          </li>

        </ul>
      </div>

      <div class="clearfix"></div>
    </Div>
  </section>
  <!--Navbar Ends here-->

  <!--Body starts here-->
  <section class="mainbody">

    <Div class="container">
      <h1 class="text-center">ATLAS ANCHOR SYSTEMS</h1>
      <div class="box-2">
        <form action="index.php" method="POST">
          <h2 class="text-center">SIGN-IN</h2>
          <label for="employee_Email">E-mail</label>
          <input type="email" name="Employee_Email" placeholder="Your email.." required>
          <br>
          <label for="Employee_Password">Password</label>
          <input type="password" name="Employee_Password" placeholder="enter password.." required>
          <div>
            <a class="forgotpassword" href="Webpage">Forgot Password?</a>
            <span style="color:red;font-size:20px;"><?php echo $password_err; ?></span>
          </div>
          <br>
          <br>
          <!--
          <input type="hidden" name="Employee_kind">
          -->
          <label for="Employee_kind">Select Employee Role:</label>

          <select type="hidden" name="Employee_kind">
            <option value="Admin">Admin</option>
            <option value="Inspector">Inspector</option>
            <option value="Engineer">Engineer</option>
          </select>

          <br>
          <br>
          <input type="submit" name="submit" value="Sign in">

        </form>
      </div>

      <div class="clearfix"></div>
    </Div>
  </section>
  <!--Body Ends here-->

  <!--Social starts here-->
  <section class="social">
    <Div class="container text-center">
      <ul>
        <li>
          <a href="Webpage"><img src="https://img.icons8.com/fluent/48/000000/home.png" /></a>
        </li>
        <li>
          <a href="Socialmedia"><img src="https://img.icons8.com/fluent/48/000000/linkedin.png" /></a>
        </li>
        <li>
          <a href="Socialmedia"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" /></a>
        </li>
      </ul>
    </Div>
  </section>
  <!--Social Ends here-->

  <!--footer starts here-->
  <section class="footer">
    <Div class="container text-center">
      <p>All rights reserved Designed by <a href="">PrestigeSolutions</a></p>
    </Div>
  </section>
  <!--footer Ends here-->


</body>

</html>