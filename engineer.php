<?php
session_start();

if (!isset($_SESSION['Employee_Email']) || $_SESSION['Employee_kind'] !== 'Engineer') {
  header("location:index.php");
}


?>
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
        <a href="index.php">
          <img src="images/AtlasImage.png" alt="Atlas Anchor Systems logo" class="img-responsive"></a>
      </Div>
      <div class="menu text-right">
        <ul>
          <!-- <li>
            <a href="index.php">Home</a>
          </li>
          
          <li>
            <a href="login.php">Administrators</a>
          </li>
          <li>
            <a href="inspector.php">Inspectors</a>
          </li>
          <li>
            <a class="current" href="engineer.php">Engineer</a>
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
    <h1 class="text-center">ENGINEER</h1>
    <div class="box-2" width="100%">

      <table border="3" style=" width:100%">
        <tr>
          <th>Email</th>
          <td><?= "$_SESSION[Employee_Email]" ?></td>
        </tr>

        <tr>
          <th>Employe Type</th>
          <td><?= "$_SESSION[Employee_kind]" ?></td>
        </tr>
      </table>
    </div>
    <div class="box-1">

      <a href="editprofile.html"><input type="button" value="EDIT MY PROFILE"></a>
      <a href="logout.php"><input type="button" value="LOG OUT"></a>

    </div>
    <div>
      <div class="clearfix"></div>
    </Div>



    <!-- Begining of button section  -->


    <!-- Begining of button section  -->

    <div class="box-4">
      <div class="box-5">
        <p> bttons and filter</p>
      </div>
      <div>
        <div class="clearfix"></div>
      </Div>
      <div class="card">
        <p> PHP TABLE</p>
      </div>
    </div>

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