<?php
session_start();

$db_user = "root";
$db_pass = '';
$db_name = "student_project";
$db = new PDO('mysql:host=localhost;dbname='. $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE Username = ? AND Password = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);
if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		$_SESSION['userlogin'] = $user;
		echo $user["Role"];
	}else{
		echo 'There no user for that combo';
	}
}else{
	echo 'There were errors while connecting to database.';
}
