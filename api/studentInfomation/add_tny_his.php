<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database



	if (isset($_POST['add_tny_his'])) {
		// receive all input values from the form
		$Header = mysqli_real_escape_string($db, $_POST['Header']);
		$Organize = mysqli_real_escape_string($db, $_POST['Organize']);
		$Time = mysqli_real_escape_string($db, $_POST['Time']);

		if (count($errors) == 0) {
      $createdBy = $_SESSION['userlogin']["Id"];

      $query = "INSERT INTO `trianninghistory`(Header,Organize,Time,CreatedBy)  VALUES
       ('$Header','$Organize','$Time','$createdBy')";
			 if (!mysqli_query($db, $query)) {
	 				header('location: ../../webStudent/stdInfo.php?res="fail"');
	 		}else {
	 			header('location: ../../webStudent/stdInfo.php?res="success"');
	 		}
	 	}else{
	 		header('location: ../../webStudent/stdInfo.php?res="fail"');
	 	}

	}

?>
