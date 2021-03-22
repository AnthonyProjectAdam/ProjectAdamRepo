<?php

include_once('connection.php');

$userData = count($_POST["Anchor_type"]);

if ($userData > 0) {
	for ($i = 0; $i < $userData; $i++) {
		if (trim($_POST['Anchor_type'] != '') && trim($_POST['Project_ID'] != '')) {
			$Anchor_type  = $_POST["Anchor_type"][$i];
			$Project_ID = $_POST["Project_ID"][$i];
			$query  = "INSERT INTO anchor (Anchor_type) VALUES ('$Anchor_type','$Project_ID' )";

			$result = mysqli_query($con, $query);
		}
	}
	echo "Data inserted successfully";
} else {
	echo "Please Enter user name";
}
