<?php
// connect to the database
include('connect_db.php');
// get results from database

$strid =  $_GET["booking_id"];

$sql = "DELETE FROM booking WHERE booking_id = $strid ";
$query = mysqli_query($conn,$sql);


?>

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
			$_SESSION['success'] = "success";
			header('location: ../../webAdmin/userManagement.php');
		}else{
      $_SESSION['success'] = "fail";
      header('location: ../../webAdmin/userManagement.php');
    }

	}

?>
