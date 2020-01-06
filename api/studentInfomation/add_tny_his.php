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
			mysqli_query($db, $query);

			$_SESSION['success'] = "success";
			header('location: ../../webStudent/stdInfo.php');
		}else{
      $_SESSION['success'] = "fail";
      header('location: ../../webStudent/stdInfo.php');
    }

	}

?>
