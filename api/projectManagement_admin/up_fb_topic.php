<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database


	// ADD USER
	if (isset($_POST['update_topic'])) {
		// receive all input values from the form
    $projectId = mysqli_real_escape_string($db, $_POST['projectId']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {
      $query = "UPDATE feedback_topic SET fb_status='ดำเนินการแล้ว' WHERE fb_id='$projectId'";

			if (!mysqli_query($db, $query)) {
				header('location: ../../webAdmin/feedback_topic.php?res="fail"');
			}else {
				header('location: ../../webAdmin/feedback_topic.php?res="success"');
			}
		}else{
      header('location: ../../webAdmin/feedback_topic.php?res="fail"');
    }

	}

?>
