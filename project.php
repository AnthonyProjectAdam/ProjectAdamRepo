<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <!--Important to make the site responsive-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Admin - ATLAS ANCHOR SYSTEMS</title>

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
          <!--
        <li>
          <a href="employee.php">EMPLOYEE PORTAL</a>
        </li>
       
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

    <div class="box-1">
      <a href="createproject.php"><input type="button" value="CREATE PROJECT"></a>
    </div>

    <div class="box-1">
      <a href="editproject.php"><input type="button" value="EDIT PROJECT"></a>
    </div>
    <div>
      <div class="clearfix"></div>
    </Div>



    <!-- Begining of button section  -->


    <!-- Begining of button section  -->

    <div class="box-4">
      <!-- Begining of button section  -->

      <table border solid="2">
        <form action="" method="POST">
          <div class="box-5">
            <label for="fname">Project ID</label>
            <input type="hidden" name="Project_Name">
            <input style="height:50px;width:150px" type="text" name="Project_ID">

            <label for="Employee_kind" name="Employee_kind">Employee Role</label>
            <select style="height:50px;width:150px" name="Employee_kind">
              <option value="">...</option>
              <option value="Admin">Admin</option>
              <option value="Inspector">Inspector</option>
              <option value="Engineer">Engineer</option>
            </select>
            <label for="fname">Project Employee Name</label>
            <input style="height:50px;width:150px" type="text" name="Employee_FName">

            <label for="Project_stat">Project status</label>

            <select style="height:50px;width:150px" name="Project_stat">
              <option value="">...</option>
              <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
            <br><br>
            <label for="Project_date">Project Date From</label>
            <input type="date" name="Project_Datefrom">
            <label for="Project_date">Project Date To</label>
            <input type="date" name="Project_Dateto"><br><br>

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
              <th>Project ID</th>
              <th>Project Name</th>
              <th>Project Status</th>
              <th>Project Date from</th>
              <th>Project Date to</th>

              <th>Project Employee</th>
              <th>Project Employee Role</th>
              <th>Project Edit</th>
            </tr>
          </thead>
          <?php
          $conn = mysqli_connect("localhost", "root", "", "Project_adam");
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          } else {

            if (isset($_POST['sort'])) {
              $project_ID = $_POST['Project_ID'];
              $project_name = $_POST['Project_Name'];
              $project_stat = $_POST['Project_stat'];
              $project_datefrom = $_POST['Project_Datefrom'];
              $project_dateto = $_POST['Project_Dateto'];
              $project_employeename = $_POST['Employee_FName'];
              $project_employeetype = $_POST['Employee_kind'];

              $query = "SELECT * FROM project A join project_employee B on A.project_id = B.Project_ID
              join employee C on C.employee_id = B.Employee_ID  WHERE A.Project_ID='$project_ID' OR
                      A.Project_Name='$project_name' OR A.Project_Datefrom='$project_datefrom' OR A.Project_Dateto='$project_dateto' OR A.Project_stat='$project_stat' OR C.Employee_FName='$project_employeename' OR C.Employee_kind='$project_employeetype'";

              $data = mysqli_query($conn, $query) or die('QUERY ERROR');


              if ($project_ID != "" || $project_name != "" || $project_stat != "" || $project_datefrom != "" || $project_dateto != "" || $project_employeename != "" || $project_employeetype != "") {

                if (mysqli_num_rows($data) > 0) {
                  while ($row = mysqli_fetch_assoc($data)) {
                    $project_ID = $row['Project_ID'];
                    $project_name = $row['Project_Name'];
                    $project_stat = $row['Project_stat'];
                    $project_datefrom = $row['Project_Datefrom'];
                    $project_dateto = $row['Project_Dateto'];
                    $project_employeename = $row['Employee_FName'];
                    $project_employeetype = $row['Employee_kind'];
                    echo "<tr><td>" . $row["Project_ID"] . "</td><td>" . $row["Project_Name"] . "</td><td>" . $row["Project_stat"] . "</td><td>"
                      . $row["Project_Datefrom"] . "</td><td>" . $row["Project_Dateto"] . "</td><td>" . $row["Employee_FName"] . "</td><td>" . $row["Employee_kind"] . "</td</tr>";
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
              $sql = "SELECT A.Project_ID, A.Project_Name, A.Project_Datefrom , A.Project_Dateto, A.Project_stat, A.Project_Prov, C.Employee_FName, C.Employee_kind FROM project A join project_employee B on A.project_id = B.Project_ID join employee C on C.employee_id = B.Employee_ID";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                  echo "<tr><td>" . $row["Project_ID"] . "</td><td>" . $row["Project_Name"] . "</td><td>" . $row["Project_stat"] . "</td><td>"
                    . $row["Project_Datefrom"] . "</td><td>" . $row["Project_Dateto"] . "</td><td>" . $row["Employee_FName"] . "</td><td>" . $row["Employee_kind"] . "</td</tr>";
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
      <br>
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