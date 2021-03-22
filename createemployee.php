<?php

// Starting the session, necessary 
// for using session variables 
session_start();

// Declaring and hoisting the variables 
$firstname = "";
$lastname = "";
$phonenumber = "";
$employeetype = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";

// DBMS connection code -> hostname, 
// username, password, database name 
$db = mysqli_connect('localhost', 'root', '', 'project_adam');

$user_check_query = "SELECT * FROM employee WHERE Employee_LName='$lastname' OR Employee_Email='$email' LIMIT 1";

// Create user code 
if (isset($_POST['create_user'])) {

  // Receiving the values entered and storing 
  // in the variables 
  // Data sanitization is done to prevent 
  // SQL injections 
  $firstname = mysqli_real_escape_string($db, $_POST['Employee_FName']);
  $lastname = mysqli_real_escape_string($db, $_POST['Employee_LName']);
  $phonenumber = mysqli_real_escape_string($db, $_POST['Employee_TelNo']);
  $employeetype = mysqli_real_escape_string($db, $_POST['Employee_kind']);
  $email = mysqli_real_escape_string($db, $_POST['Employee_Email']);
  $employeepassword = mysqli_real_escape_string($db, $_POST['Employee_Password']);

  // Ensuring that the user has not left any input field blank 
  // error messages will be displayed for every blank input 
  if (empty($firstname)) {
    array_push($errors, "firstname is required");
  }
  if (empty($lastname)) {
    array_push($errors, "lastname is required");
  }
  if (empty($phonenumber)) {
    array_push($errors, "phonenumber is required");
  }
  if (empty($employeetype)) {
    array_push($errors, "employeetype is required");
  }
  if (empty($email)) {
    array_push($errors, "email is required");
  }
  if (empty($employeepassword)) {
    array_push($errors, "password is required");
  }

  //if (!= $employeepassword) { 
  //    array_push($errors, "incorrect password"); 
  // Checking if the password is correct 
  // } 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM employee WHERE Employee_LName='$lastname' OR Employee_Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['Employee_LName'] === $username) {
      array_push($errors, "Username already exists");
    }
    if ($user['Employee_Email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  // If the form is error free, then create the user 
  if (count($errors) == 0) {

    // Password encryption to increase data security 
    $password = md5($employeepassword);

    // Inserting data into table 
    $query = "INSERT INTO employee (Employee_FName, Employee_LName, Employee_TelNo, Employee_kind, Employee_Email, Employee_Password)  
                  VALUES('$firstname', '$lastname', '$phonenumber', '$employeetype', '$email', '$password')";

    mysqli_query($db, $query);

    // Storing username of the created user, 
    // in the session variable 
    $_SESSION['Employee_FName'] = $firstname;
    $_SESSION['Employee_LName'] = $lastname;
    $_SESSION['Employee_kind'] = $employeetype;

    // Welcome message 
    $_SESSION['success'] = "You have successfully created a new profile";

    // Page on which the user will be  
    // redirected after logging in 
    header('location: createemployee.php');
  }
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
      <form action="createemployee.php" method="POST">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="Employee_FName" value="<?php echo $firstname; ?>">
        <br>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="Employee_LName">
        <br>
        <label for="phonenumber">Phone Number</label>
        <input type="tel" id="phone" name="Employee_TelNo">
        <br>
        <label for="Employee_kind">Choose Employee Role:</label>
        <select name="Employee_kind">
          <option value="Admin">Admin</option>
          <option value="Inspector">Inspector</option>
          <option value="Engineer">Engineer</option>
        </select>
        <br>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="Employee_Email">
        <br>
        <label for="password">Employee Password</label>
        <input type="password" id="password" name="Employee_Password">
        <br>
        <div class="box-1">

          <!-- <button><button type="submit" class="btn" name="create_user">CREATE PROFILE</button></button> -->
          <input type="submit" name="create_user" value="CREATE PROFILE">

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