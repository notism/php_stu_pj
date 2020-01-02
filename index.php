<?php
session_start();
	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Student Project</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrapA.css">

</head>
<body>
	<div class="container-xl"><br/>
		<div class="card" style="width: 100%;">
			<div class="card-body">
				<h3 class="card-title">ขอบคุณที่ใช้บริการ</h3>
				<div class="dropdown-divider"></div><br/>
				<center><button class="btn btn-light"><a href="index.php?logout=true">ออกจากระบบ</a></button></center>

			</div>
		</div>
	</div>



</body>
</html>
