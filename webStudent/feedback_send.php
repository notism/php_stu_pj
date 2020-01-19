<?php
	session_start();
    if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
	}

    include('../config/connect.php');
            $topic = $_POST['topic'];
            $detail = $_POST['detail'];
			$UpdateBy = $_SESSION['userlogin']["Id"];
			$query2 = "INSERT INTO `feedback_topic`(fb_topic,fb_detail,fb_createdBy,fb_status)  VALUES ('$topic','$detail','$UpdateBy','กำลังตรวจสอบ')";
			// mysqli_query($db, $query2);

			if ($db->query($query2) === TRUE) {
				header('location: feedback_topic.php?res="success"');
			}else {
                header('location: feedback_topic.php?res="fail"');
				
			}
		

	


?>
