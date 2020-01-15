<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database


	// ADD USER
	if (isset($_POST['feedback_send'])) {
		// receive all input values from the form
    $topic = mysqli_real_escape_string($db, $_POST['topic']);
    $detail = mysqli_real_escape_string($db, $_POST['detail']);



		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$UpdateBy = $_SESSION['userlogin']["Id"];
			$query2 = "INSERT INTO `feedback_topic`(fb_topic,fb_detail,fb_createdBy,fb_status)  VALUES ('$topic','$detail','$UpdateBy','กำลังตรวจสอบ')";
			mysqli_query($db, $query2);

			$_SESSION['success'] = "success";
			header('location: ../../webAdvisor/feedback_topic.php?res="success"');
		}else{
      $_SESSION['success'] = "fail";
      header('location: ../../webAdvisor/feedback_topic.php?res="fail"');
    }

	}

?>
