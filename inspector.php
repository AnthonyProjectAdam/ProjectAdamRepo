<?php
session_start();

if (!isset($_SESSION['Employee_Email']) || $_SESSION['Employee_kind'] !== 'Inspector') {
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
            <a href="administrator.php">Administrators</a>
          </li>
          
          <li>
            <a class="current" href="inspector.php">Inspectors</a>
          </li>
          
          <li>
            <a href="engineer.php">Engineer</a>
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
    <h1 class="text-center">INSPECTOR</h1>
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
      <table border solid="2">
        <form action="employee.php" method="POST">
          <div class="box-5">

            <label for="fname">Project Status</label>
            <input style="height:50px;width:150px" type="text" name="Employee_FName">
            <!-- <label for="fname">Employee Last Name</label> -->
            <input style="height:50px;width:150px" type="hidden" name="Employee_LName">

            <input style="height:50px;width:150px" type="hidden" name="Employee_Email">

            <label for="Employee_kind">Select Employee Role:</label>
            <select style="height:50px;width:150px" name="Employee_kind">
              <option value="">...</option>
              <option value="Admin">Admin</option>
              <option value="Inspector">Inspector</option>
              <option value="Engineer">Engineer</option>
            </select>
            <br>

            <input type="submit" name="sort" value="SORT">

            <input type="submit" name="refresh" value="REFRESH"><br><br>

          </div>
        </form>
      </table>
      <!-- End of button section  -->
      <div>
        <div class="clearfix"></div>
      </Div>
      <div class="card">
        <table id="customers" border solid="2">
          <thead>
            <tr>
              <th>Employee First Name</th>
              <th>Employee Last Name</th>
              <th>Employee Email</th>
              <th>Employee Role</th>
              <th>Employee Edit</th>
            </tr>
          </thead>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "project_adam";
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          $password_err = "";
          //submit button is clicked
          $conn = mysqli_connect("localhost", "root", "", "project_adam");
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          } else {
            if (isset($_POST['sort'])) {
              $employee_fname = $_POST['Employee_FName'];
              $employee_lname = $_POST['Employee_LName'];
              $employee_email = $_POST['Employee_Email'];
              $employee_role = $_POST['Employee_kind'];
              $query = "SELECT * FROM employee WHERE Employee_FName='$employee_fname' OR Employee_LName='$employee_lname' or Employee_Email='$employee_email' OR Employee_kind='$employee_role'LIMIT 0, 15";

              $data = mysqli_query($conn, $query) or die('error');


              if ($employee_fname != "" || $employee_lname != "" || $employee_email != "" || $employee_role != "") {

                if (mysqli_num_rows($data) > 0) {
                  while ($row = mysqli_fetch_assoc($data)) {
                    $employee_fname = $row['Employee_FName'];
                    $employee_lname = $row['Employee_LName'];
                    $employee_email = $row['Employee_Email'];
                    $employee_role = $row['Employee_kind'];
                    // $project_province = $row['Project_Prov'];

                    echo "<tr><td>" . $row["Employee_FName"] . "</td><td>" . $row["Employee_LName"] . "</td><td>"
                      . $row["Employee_Email"] . "</td><td>" . $row["Employee_kind"] . "</td><td>";
                  }
                } else {
                  echo "<tr><td>" . "Record not found" . "<tr><td>";
                }
              }
            } else {
              $conn = mysqli_connect("localhost", "root", "", "project_adam");
              // Check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
              $sql = "SELECT * FROM EMPLOYEE";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                  echo "<tr><td>" . $row["Employee_FName"] . "</td><td>" . $row["Employee_LName"] . "</td><td>"
                    . $row["Employee_Email"] . "</td><td>" . $row["Employee_kind"] . "</td><td>";
                }
                echo "</table>";
              } else {
                echo "0 results";
              }
              $conn->close();
            }
          }


          ?>

        </table>
      </div>
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