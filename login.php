<?php
// Initialize the session
session_start();
// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_adam";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$password_err  = "";
//submit button is clicked 
if (!$conn) {
  echo "Unable to establish connection" . mysqli_error($conn);
} else {


  if (isset($_POST['submit'])) {
    //check for Error

    $Employee_Email = $_POST['Employee_Email'];
    $Employee_Password = $_POST['Employee_Password'];
    $Employee_Password = sha1($Employee_Password);
    $Employee_kind = $_POST['Employee_kind'];

    //sql query
    $sql =
      "SELECT * FROM EMPLOYEE WHERE Employee_Email=? AND Employee_Password=? AND Employee_kind=?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $Employee_Email, $Employee_Password, $Employee_kind);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    session_regenerate_id();
    if ($result->num_rows < 1) {
      $password_err = "Oops! Something went wrong.";
    } elseif ($row) {
      $_SESSION['Employee_Password'] = $row['Employee_Password'];
      $_SESSION['Employee_Email'] = $row['Employee_Email'];
      $_SESSION['Employee_kind'] = $row['Employee_kind'];
      session_write_close();
      if ($result->num_rows == 1 && $_SESSION['Employee_kind'] == 'Admin') {
        header("Location: administrator.php");
      } else if ($result->num_rows == 1 && $_SESSION['Employee_kind'] == 'Inspector') {
        header("Location: inspector.php");
      } else if ($result->num_rows == 1 && $_SESSION['Employee_kind'] == 'Engineer') {
        header("Location: engineer.php");
      }
    } else {
      $password_err = "INCORRECT EMAIL OR PASSWORD";
    }
  }
  $conn->close();
}
