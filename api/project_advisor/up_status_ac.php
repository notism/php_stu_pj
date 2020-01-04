<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database


	// ADD USER
	if (isset($_POST['update_status2'])) {
		// receive all input values from the form
    $projectId = mysqli_real_escape_string($db, $_POST['projectId2']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {
      $query = "UPDATE projectinfo SET Status='ไม่อนุมัติ' WHERE Id='$projectId'";
			mysqli_query($db, $query);

			$UpdateBy = $_SESSION['userlogin']["Id"];
			$query2 = "INSERT INTO `project_update_history`(ProjectId,UpdateBy,Status_update)  VALUES ('$projectId','$UpdateBy','ไม่อนุมัติ')";
			mysqli_query($db, $query2);

			$_SESSION['success'] = "success";
			header('location: ../../webAdvisor/my_project2.php');
		}else{
      $_SESSION['success'] = "fail";
      header('location: ../../webAdvisor/my_project2.php');
    }

	}

?>
