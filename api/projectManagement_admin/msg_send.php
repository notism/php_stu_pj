<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database


	// ADD USER
	if (isset($_POST['send_msg'])) {
		// receive all input values from the form
    $msg_topic = mysqli_real_escape_string($db, $_POST['msg_topic']);
    $msg_detail = mysqli_real_escape_string($db, $_POST['msg_detail']);
    $msg_topic_l = mysqli_real_escape_string($db, $_POST['msg_topic_l']);



		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$UpdateBy = $_SESSION['userlogin']["Id"];
			$query2 = "INSERT INTO `feedback_msg`(msg_detail,msg_topic,msg_by)  VALUES ('$msg_detail','$msg_topic','$UpdateBy')";
			mysqli_query($db, $query2);



			header('location: ../../webAdmin/feedback_topicByid.php?fb_id='.$msg_topic.'&fb_topic='.$msg_topic_l.'');
		}else{
      header('location: ../../webAdmin/feedback_topicByid.php?fb_id='.$msg_topic.'&fb_topic='.$msg_topic_l.'');
    }

	}

?>
