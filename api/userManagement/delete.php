

<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$email    = "";
  $role    = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database


	// ADD USER
	if (isset($_POST['delete_user'])) {
		// receive all input values from the form
    $userId = mysqli_real_escape_string($db, $_POST['userId']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {
      $query = "DELETE FROM users WHERE Id = $userId";

			mysqli_query($db, $query);			
			header('location: ../../webAdmin/userManagement.php?del="success"');
		}else{
      header('location: ../../webAdmin/userManagement.php?del="fail"');
    }

	}

?>
