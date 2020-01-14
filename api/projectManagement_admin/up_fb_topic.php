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

			mysqli_query($db, $query);
			$_SESSION['success'] = "success";
			header('location: ../../webAdmin/feedback_topic.php');
		}else{
      $_SESSION['success'] = "fail";
      header('location: ../../webAdmin/feedback_topic.php');
    }

	}

?>
