<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "project_adam";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
//-----------------select Inspector
// mysql select inspector query
$Inspectorquery = "SELECT * FROM `EMPLOYEE` WHERE Employee_kind = 'Inspector';";

$result2 = mysqli_query($connect, $Inspectorquery);

$options2 = "";

while ($row2 = mysqli_fetch_array($result2)) {
    $options2 = $options2 . "<option>$row2[1]</option>";
}
//---------------- select Engineer
$Engineerquery = "SELECT * FROM `EMPLOYEE` WHERE Employee_kind = 'Engineer';";

// for method 2

$result3 = mysqli_query($connect, $Engineerquery);

$options3 = "";

while ($row3 = mysqli_fetch_array($result3)) {
    $options3 = $options3 . "<option>$row3[1]</option>";
}

?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <!--Important to make the site responsive-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Admin - ATLAS ANCHOR SYSTEMS</title>
    <script src="script.js" defer></script>
    <link href="Style.css" rel="stylesheet">
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
        <h1 class="text-center">CREATE A PROJECT</h1>
        <div class="box-4">
            <table>
                <form action="">
                    <!--button/filter section start here-->
                    <div class="box-5">
                        <div class="box-1">
                            <a href="#"><input type="button" value="SAVE PROJECT"></a>

                        </div>


                        <br>
                    </div>
                    <!--button/filter section Ends here-->
                    <tr>
                        <th>Project Name</th>
                        <th> <input type="text" id="ProjectName" name="Project_Name"></th>
                        <th>Project Building No</th>
                        <th> <input type="text" id="lname" name="Project_BuildingNo"></th>
                        <th>Project Province</th>
                        <th> <input type="text" name="Project_Prov"></th>
                    </tr>
                    <tr>
                        <th>Project Address</th>
                        <th> <input type="text" name="Project_StreetAdd"></th>
                        <th>Project Postal Code</th>
                        <th> <input type="text" name="Project_PCode"></th>
                        <th>Project Status</th>
                        <th> <select name="Project_stat">
                                <option value="ACTIVE">ACTIVE</option>
                                <option value="INACTIVE">INACTIVE</option>

                            </select></th>
                    </tr>
                    <tr>
                        <th>Contact Name</th>
                        <th><input type="text" name="Contact_FName"></th>
                        <th>Contact Email</th>
                        <th> <input type="text" name="Contact_Email"></th>
                        <th>Contact Phone Number</th>
                        <th> <input type="text" name="Contact_CellNo"></th>
                    </tr>
                    <tr>
                        <th>Contact Type</th>
                        <th> <input type="text" name="Contact_JobTitle"></th>
                        <th>Project Inspector</th>
                        <th> <select><?php echo $options2; ?></select></th>
                        <th>Project Engineer</th>
                        <th> <select><?php echo $options3; ?></select></th>
                    </tr>

                    <!-- </form> -->

            </table>
        </div>
        <div>
            <div class="clearfix"></div>
        </Div>





        <!--Tab start here-->
        <div class="box-4">

            <div>
                <div class="clearfix"></div>
            </Div>
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
                            <th> <input type="date" name="Project_Datefrom"></th>
                            <th>Project Date To</th>
                            <th> <input type="date" name="Project_Dateto"></th>
                            <th>Last Inspection Date</th>
                            <th> <input type="date" name="Date"></th>
                        </tr>
                        <tr>
                            <th>Anchor Type </th>
                            <th> <input type="text" placeholder="Address" name="Anchor_Name"></th>
                            <th>Anchor Type</th>
                            <th> <input type="text" placeholder="Weather" name="weather"></th>
                            <th>Anchor Type</th>
                            <th> <input type="text" placeholder="Weather" name="weather"></th>
                        </tr>
                        <tr>
                            <th>Anchor Type</th>
                            <th><input type="text" placeholder=Raep name="Rep"></th>
                            <th>Anchor Type</th>
                            <th> <input type="text" placeholder="" name="timein"></th>
                            <th>Anchor Type</th>
                            <th> <input type="text" placeholder="" name="timein"></th>
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

                        <!--    </form> -->
                    </table>
                </div>
                <!--Project Tab Ends here-->

                <!--Inspection Tab starts here-->
                <div id="inspection" data-tab-content>
                    <table>
                        <!--  <form action=""> -->
                        <tr>
                            <th>Inspection Date</th>
                            <th> <input type="text" id="ProjectName" name="ProjectName"></th>
                            <th>Inspection By</th>
                            <th> <input type="text" id="lname" name="ProjectID"></th>
                            <th>Inspection Engineer</th>
                            <th> <input class="input-field" type="text" placeholder="Date" name="Date"></th>
                        </tr>
                        <tr>
                            <th>Inspection Status</th>
                            <th> <input class="input-field" type="text" placeholder="Address" name="Address"></th>
                            <th>Engineer Pass</th>
                            <th><input class="input-field" type="text" placeholder=Raep name="Rep"></th>
                            <th>Pre-Reports</th>
                            <th><input class="input-field" type="text" placeholder=Raep name="Rep"></th>
                        </tr>
                        <tr>
                            <th>System Passed</th>
                            <th> <input class="input-field" type="text" placeholder="Address" name="Address"></th>
                            <th>Visible Roof Plan</th>
                            <th> <input class="input-field" type="text" placeholder="Weather" name="weather"></th>
                            <th>Logbook Pass</th>
                            <th> <input class="input-field" type="text" placeholder="Weather" name="weather"></th>
                        </tr>
                        <tr>
                            <th>Observation:</th>
                            <th>
                                <textarea name="comments" name="timeout"></textarea>
                            </th>
                            <th>Perfomance:</th>
                            <th>
                                <textarea name="comments" name="timeout"></textarea>
                            </th>
                            <th>Recommendation:</th>
                            <th>
                                <textarea name="comments" name="timeout"></textarea>
                            </th>
                        </tr>
                        <tr>

                            <th>Obligations:</th>
                            <th>
                                <textarea name="comments" name="timeout"></textarea>
                            </th>
                            <th>Direction:</th>
                            <th>
                                <textarea name="comments" name="timeout"></textarea>
                            </th>
                            <th>Conclusion:</th>
                            <th>
                                <textarea name="comments" name="timeout"></textarea>
                            </th>
                        <tr>

                        </tr>
                        </tr>

                        <!--    </form> -->
                    </table>
                </div>
                <!--Inspection Tab Ends here-->
                <!--Anchors Tab start here-->
                <div id="Anchors" data-tab-content>

                    <p>Some information on pricing</p>
                </div>
                <!--Anchors Tab Ends here-->
                <!--Beams Tab start here-->
                <div id="Beams" data-tab-content>

                    <p>Some information on pricing</p>
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