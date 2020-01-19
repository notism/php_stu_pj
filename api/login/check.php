<?php
session_start();
// connect DB
include('../../config/connect_pdo.php');

$username = $_POST['username'];
$password = $_POST['password'];
$passwordX = md5($password);
$sql = "SELECT * FROM users WHERE Username = ? AND Password = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$username, $passwordX]);
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
