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

  $target_dir = "../../img_user/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          echo "";
          $uploadOk = 1;
      } else {
          echo "<center>File is not an image.</center>";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "<center>Sorry, file already exists.</center>";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "<center>Sorry, your file is too large.</center>";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif") {
      echo "<center>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</center>";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "<center>Sorry, your file was not uploaded.</center>";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "<center><i><h4>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</h4></i></center>";
      } else {
          echo "<center>Sorry, there was an error uploading your file.</font></center>";
      }
  }
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$faculty = mysqli_real_escape_string($db, $_POST['faculty']);
		$department = mysqli_real_escape_string($db, $_POST['department']);
    $prefix = mysqli_real_escape_string($db, $_POST['prefix']);
		$tel = mysqli_real_escape_string($db, $_POST['tel']);

    $myfile = $_FILES["fileToUpload"]["name"];




		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$passwordX = md5($password);//encrypt the password before saving in the database

			if($faculty==null && $department==null ){
					$query2 = "UPDATE profile SET Tel='$tel' WHERE CreatedBy='$username'";
			}elseif ($faculty==null && $department!=null ) {
					$query2 = "UPDATE profile SET Tel='$tel',Department='$department' WHERE CreatedBy='$username'";
			}elseif ($faculty!=null && $department==null) {
					$query2 = "UPDATE profile SET Tel='$tel',Faculty='$faculty' WHERE CreatedBy='$username'";
			}else{
					$query2 = "UPDATE profile SET Tel='$tel',Faculty='$faculty',Department='$department' WHERE CreatedBy='$username'";
			}
      // $query2 = "UPDATE profile SET Tel='$tel',Department='$department',Faculty='$faculty' WHERE CreatedBy='$username'";
      mysqli_query($db, $query2);

			if($myfile!=''||$myfile!=null){
				 $query = "UPDATE users SET Email='$email',Password='$passwordX',Firstname='$firstname', Lastname='$lastname',imgUrl='$myfile',Prefix='$prefix' WHERE Username='$username'";
			}else{
				 $query = "UPDATE users SET Email='$email',Password='$passwordX',Firstname='$firstname', Lastname='$lastname',Prefix='$prefix' WHERE Username='$username'";
			}

			mysqli_query($db, $query);

			$_SESSION['success'] = "success";
			header('location: ../../webAdvisor/profileManagement.php');
		}else{
      $_SESSION['success'] = "fail";
      header('location: ../../webAdvisor/profileManagement.php');
    }

	}

?>
