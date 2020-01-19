<?php
	session_start();

	if (isset($_POST['send_msg'])) {
		// receive all input values from the form
    $msg_topic = $_POST['msg_topic'];
    $msg_detail = $_POST['msg_detail'];
    $msg_topic_l = $_POST['msg_topic_l'];



    include('../config/connect.php');
			$UpdateBy = $_SESSION['userlogin']["Id"];
			$query2 = "INSERT INTO `feedback_msg`(msg_detail,msg_topic,msg_by)  VALUES ('$msg_detail','$msg_topic','$UpdateBy')";
			if($db->query($query2) === TRUE){

			header('location: feedback.php?fb_id='.$msg_topic.'&fb_topic='.$msg_topic_l.'');
		}else{
      header('location: feedback.php?fb_id='.$msg_topic.'&fb_topic='.$msg_topic_l.'');
    }

	}

?>
