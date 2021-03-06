<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <!--Important to make the site responsive-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Admin - ATLAS ANCHOR SYSTEMS</title>

  <link href="style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>

  <!--Navbar starts here-->

  <section class="Navbar">
    <Div class="container">
      <Div class="logo">
        <img src="images/AtlasImage.png" alt="Atlas Anchor Systems logo" class="img-responsive">
      </Div>
      <div class="menu text-right">
        <ul>
          <!--
          <li>
            <a href="index.html">Home</a>
          </li>
-->
          <li>
            <a href="administrator.php">ADMINISTRATOR</a>
          </li>
          <li>
            <a href="employee.php">EMPLOYEE PORTAL</a>
          </li>
          <!--
          <li>
            <a href="inspectorsignin.html">Inspectors</a>
          </li>

          <li>
            <a href="engineer.html">Engineer</a>
          </li>
          <li>
            <a href="http://atlas-anchor.com/faq/">FAQ</a>
          </li>
          -->
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
  <!--Navbar Ends here-->

  <!--Body starts here-->
  <section class="mainbody2">

    <div class="box-2">
      <form action="/action_page.php" medthod="POST">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname">
        <br>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname">
        <br>
        <label for="phonenumber">Phone Number</label>
        <input type="tel" id="phone" name="phonenumber">
        <br>
        <label for="Employee_kind">Choose Employee Role:</label>
        <select name="Employee_kind">
          <option value="Admin">Admin</option>
          <option value="Inspector">Inspector</option>
          <option value="Engineer">Engineer</option>
        </select>
        <br>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">Employee Password</label>
        <input type="password" id="password" name="password">
        <br>
        <div class="box-1">

          <a href="#"><input type="button" value="CREATE PROFILE"></a>

        </div>
      </form>
    </div>


    <div>
      <div class="clearfix"></div>
    </Div>



    <!-- Begining of button section  -->


    <!-- Begining of button section  -->



    <div>
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