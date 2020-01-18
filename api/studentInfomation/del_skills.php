

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
	if (isset($_POST['del3'])) {
		// receive all input values from the form
    $Id = mysqli_real_escape_string($db, $_POST['Id3']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {
      $query = "DELETE FROM skills WHERE Id = $Id";

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
