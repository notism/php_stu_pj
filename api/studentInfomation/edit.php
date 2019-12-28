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
	if (isset($_POST['edit_user'])) {
		// receive all input values from the form
    $userId = mysqli_real_escape_string($db, $_POST['userId']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $school = mysqli_real_escape_string($db, $_POST['school']);
    $faculty = mysqli_real_escape_string($db, $_POST['faculty']);
    $degree = mysqli_real_escape_string($db, $_POST['degree']);
    $gpax = mysqli_real_escape_string($db, $_POST['gpax']);
    $birthday = mysqli_real_escape_string($db, $_POST['birthday']);
    $religion = mysqli_real_escape_string($db, $_POST['religion']);
    $nation = mysqli_real_escape_string($db, $_POST['nation']);
    $military = mysqli_real_escape_string($db, $_POST['military']);
    $tel = mysqli_real_escape_string($db, $_POST['tel']);
    $imgUrl = mysqli_real_escape_string($db, $_POST['imgUrl']);




		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$passwordX = md5($password);//encrypt the password before saving in the database
      $query = "UPDATE users SET Email='$email',Firstname='$firstname', Lastname='$lastname',imgUrl='$imgUrl' WHERE Username='$username'";
      $query2 = "UPDATE profile SET Tel='$tel',Birthday='$birthday',Religion='$religion',Nation='$nation',Military='$military',Faculty='$faculty',Department='$school',Degree='$degree',GPAX='$gpax' WHERE CreatedBy='$username'";
      // $query = "UPDATE profile SET Tel='$tel',Birthday='$birthday',Religion='$religion',Nation='$nation',Military='$military',Faculty='$faculty',Department='$school',Degree='$degree',GPAX='$gpax', WHERE CreatedBy='$username'";

      mysqli_query($db, $query);
      mysqli_query($db, $query2);
			$_SESSION['success'] = "success";
			header('location: ../../webStudent/stdInfo.php');
		}else{
      $_SESSION['success'] = "fail";
      header('location: ../../webStudent/stdInfo1.php');
    }

	}

?>
