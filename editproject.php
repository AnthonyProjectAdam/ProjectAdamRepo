<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <!--Important to make the site responsive-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Webpage  title-->
  <title>Admin - ATLAS ANCHOR SYSTEMS</title>

  <!--Webpage  call scripts-->
  <script src="script.js" defer></script>
  <link href="Style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

          <li>
            <a href="administrator.php">ADMINISTRATOR</a>
          </li>
          <li>
            <a href="project.php">PROJECT PORTAL</a>
          </li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
  <!--Navbar Ends here-->

  <!--Body starts here-->
  <section class="mainbody2">
    <h1 class="text-center">EDIT A PROJECT</h1>
    <div>
      <div class="box-4">
        <table>
          <form action="">
            <!--button to save or edit project section start here-->
            <div class="box-5">
              <div class="box-1">
                <a href="#"><input type="button" value="SAVE PROJECT EDIT"></a>

              </div>
              <br>
            </div>
            <!--button/filter section Ends here-->
            <tr>
              <th>Project Name</th>
              <th> <input type="text" id="ProjectName" name="ProjectName"></th>
              <th>Project Building No</th>
              <th> <input type="text" id="lname" name="ProjectID"></th>
              <th>Project Province</th>
              <th> <input class="input-field" type="text" placeholder="Date" name="Date"></th>
            </tr>
            <tr>
              <th>Project Address</th>
              <th> <input class="input-field" type="text" placeholder="Address" name="Address"></th>
              <th>Project Postal Code</th>
              <th> <input class="input-field" type="text" placeholder="Weather" name="weather"></th>
              <th>Project Status</th>
              <th> <input class="input-field" type="text" placeholder="Weather" name="weather"></th>
            </tr>
            <tr>
              <th>Contact Name</th>
              <th><input class="input-field" type="text" placeholder=Raep name="Rep"></th>
              <th>Contact Email</th>
              <th> <input class="input-field" type="text" placeholder="" name="timein"></th>
              <th>Contact Phone Number</th>
              <th> <input class="input-field" type="text" placeholder="" name="timein"></th>
            </tr>
            <tr>
              <th>Contact Type</th>
              <th> <input class="input-field" type="text" placeholder="Contact" name="contact"></th>
              <th>Project Inspector</th>
              <th> <input class="input-field" type="text" placeholder="" name="timeout"></th>
              <th>Project Engineer</th>
              <th> <input class="input-field" type="text" placeholder="" name="timeout"></th>
            </tr>
        </table>
      </div>

      <div class="clearfix"></div>

      <!--....................................Tab start here........................-->
      <div class="box-4">

        <div class="clearfix"></div>

        <ul class="tabs">
          <li data-tab-target="#project" class="active tab">Project</li>
          <li data-tab-target="#inspection" class="tab">Inspections</li>
          <li data-tab-target="#Anchors" class="tab">Anchors</li>
          <li data-tab-target="#Beams" class="tab">Beams</li>
          <li data-tab-target="#additionalinfo" class="tab">Additional details</li>
          <li data-tab-target="#quote" class="tab">Quote</li>
          <li data-tab-target="#call" class="tab">Call History</li>
        </ul>
        <!--Project Tab starts here-->
        <div class="tab-content">
          <div id="project" data-tab-content class="active">
            <table>
              <!--  <form action=""> -->
              <tr>
                <th>Project Date From</th>
                <th> <input type="text" id="ProjectName" name="ProjectName"></th>
                <th>Project Date To</th>
                <th> <input type="text" id="lname" name="ProjectID"></th>
                <th>Last Inspection Date</th>
                <th> <input class="input-field" type="text" placeholder="Date" name="Date"></th>
              </tr>
              <tr>
                <th>Direction Note:</th>
                <th>
                  <textarea name="comments" name="timeout"></textarea>
                </th>
                <th>Note:</th>
                <th>
                  <textarea name="comments" name="timeout"></textarea>
                </th>
              </tr>


            </table>
          </div>
          <!--Project Tab Ends here-->

          <!--Inspection Tab starts here-->
          <div id="inspection" data-tab-content>
            <div class="box-1"> <a href="createinspection.php"><input type="button" value="CREATE INSPECTION"></a>
            </div>
            <br><br>
            <table id="customers" border solid="2">
              <tr>

                <th>INSPECTION ID</th>
                <th>INSPECTION DATE</th>
                <th>INSPECTION STATUS</th>
                <th>SYSTEM PASS</th>
                <th>ROOF PLAN PASS</th>
                <th>LOGBOOK PASS</th>
                <th>ENGINEER PASS</th>
                <th>VIEW INSPECTION</th>

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
                $conn = mysqli_connect("localhost", "root", "", "project_adam");
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM INSPECTION";
                //the query is to call the inspection perculiar to the project
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  // output data of each row
                  while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Inspection_ID"] . "</td><td>" . $row["Inspection_Stat"] . "</td><td>" . $row["Inspection_Stat"]  . "</td><td>" . $row["Inspection_Syspass"]  . "</td><td>" . $row["Inspection_Roofplan"]  . "</td><td>" . $row["Inspection_Logbook"]  . "</td><td>" . $row["Inspection_Engineerpass"]  . "</td><tr>";
                  }
                  echo "</table>";
                } else {
                  echo "0 results";
                }
                $conn->close();
              }
              ?>
            </table>
            <br>
          </div>
          <!--Inspection Tab Ends here-->
          <!--Anchors Tab start here-->
          <div id="Anchors" data-tab-content>
            <br>

            <form name="add_name" id="add_name">
              <table class="table table-bordered table-hover" id="dynamic_field">
                <tr>
                  <td><input type="text" name="Anchor_type[]" placeholder="Enter Anchor Name" class="form-control name_list" /></td>
                  <td><input type="text" name="Project_ID[]" placeholder="Enter project ID" class="form-control name_email" /></td>
                  <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>
                </tr>
              </table>
              <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit">
            </form>

            <div>
              <br>
              <table id="customers" border solid="2">
                <tr>
                  <th>ANCHOR ID</th>
                  <th>ANCHOR TYPE</th>
                  <th>PROJECT ID</th>
                  <th>PROJECT NAME</th>
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
                  $conn = mysqli_connect("localhost", "root", "", "project_adam");
                  // Check connection
                  if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                  }
                  $sql = "SELECT anchor.Anchor_ID, anchor.Anchor_type,project.Project_ID, project.Project_Name FROM anchor RIGHT JOIN project ON anchor.Anchor_ID = project.Project_ID";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["Anchor_ID"]  . "</td><td>" . $row["Anchor_type"]  . "</td><td>" . $row["Project_ID"]  . "</td><td>" . $row["Project_Name"]  . "</td><tr>";
                    }
                    echo "</table>";
                  } else {
                    echo "0 results";
                  }
                  $conn->close();
                }
                ?>
              </table>
              <!--end of sort anchor filter-->
              <br>
            </div>

          </div>
          <!--Anchors Tab Ends here-->

          <!--Beams Tab start here-->
          <div id="Beams" data-tab-content>
            <br>
            <form name="add_name" id="add_name">
              <table class="table table-bordered table-hover" id="dynamic_field">
                <tr>
                  <td><input type="text" name="anchor_name[]" placeholder="Enter Anchor Name" class="form-control name_list" /></td>
                  <td><input type="text" name="email[]" placeholder="Enter inspection number" class="form-control name_email" /></td>
                  <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>
                </tr>
              </table>
              <input style="height:50px;width:85px" type="submit" class="btn btn-success" name="submit" id="submit" value="Submit">
            </form>
            <div>
              <br>
              <table id="customers" border solid="2">
                <tr>
                  <th>BEAM ID</th>
                  <th>BEAM SERIAL NUMBER</th>
                  <th>PROJECT ID</th>
                  <th>PROJECT NAME</th>
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
                  $conn = mysqli_connect("localhost", "root", "", "project_adam");
                  // Check connection
                  if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                  }
                  $sql = "SELECT beam.Beam_ID, beam.Beam_SerialNo,project.Project_ID, project.Project_Name FROM beam RIGHT JOIN project ON beam.Beam_ID = project.Project_ID";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["Beam_ID"]  . "</td><td>" . $row["Beam_SerialNo"]  . "</td><td>" . $row["Project_ID"]  . "</td><td>" . $row["Project_Name"]  . "</td><tr>";
                    }
                    echo "</table>";
                  } else {
                    echo "0 results";
                  }
                  $conn->close();
                }
                ?>
              </table>
              <!--end of sort anchor filter-->
              <br>
            </div>
          </div>

          <!--Beams Tab Ends here-->
          <!--Quote Tab starts here-->
          <div id="quote" data-tab-content>

            <p>Under Review</p>
          </div>
          <!--Quote Tab Ends here-->

          <!--Call history Tab starts here-->
          <div id="call" data-tab-content>

            <p>Under Review</p>
          </div>

          <!--Call history Tab Ends here-->

          <!--Addtional Tab Starts here-->
          <div id="additionalinfo" data-tab-content>

            <p>Let me tell you about me</p>
          </div>

          <!--Addtional Tab Ends here-->
        </div>


      </div>
      </form>
      <!-- Tab Ends here-->

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<script type="text/javascript">
  $(document).ready(function() {

    var i = 1;

    $("#add").click(function() {
      i++;
      $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="Anchor_type[]" placeholder="Enter Anchor Name" class="form-control name_list"/></td><td><input type="text" name="Project_ID[]" placeholder="Enter inspection number" class="form-control name_email"/></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
    });

    $(document).on('click', '.btn_remove', function() {
      var button_id = $(this).attr("id");
      $('#row' + button_id + '').remove();
    });

    $("#submit").on('click', function() {
      var formdata = $("#add_name").serialize();
      $.ajax({
        url: "action.php",
        type: "POST",
        data: formdata,
        cache: false,
        success: function(result) {
          alert(result);
          $("#add_name")[0].reset();
        }
      });
    });
  });
</script>