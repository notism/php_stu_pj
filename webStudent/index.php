<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Project</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/bootstrapA.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/datatables.css"/>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="index.php">WEB-STUDENT</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> หน้าแรก<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="stdInfo.php"><i class="far fa-id-card"></i> ข้อมูลส่วนตัว</a>
	      </li>
				<li class="nav-item">
				 	<a class="nav-link" href="#"><i class="fas fa-layer-group"></i> โครงงานของฉัน</a>
			 </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            อื่นๆ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#"><i class="fas fa-user"></i> แก้ไขโปรไฟล์</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="fas fa-lock"></i> แก้ไขรหัสผ่าน</a>
          </div>
        </li>
	    </ul>
			<span class="navbar-text" style="font-size: 14px">
		 		สวัสดี,คุณ <?php echo $_SESSION['userlogin']["Username"] ?>&nbsp;
	 		</span>
			<span class="navbar-text" style="font-size: 14px">
				<a href="../logout.php" ><i class="fas fa-sign-out-alt" style="color:white"></i></a>
			</span>
	</nav>
</div>
	<br/>
<main>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">
        <!-- start card -->
				<div class="card"  style="width: 100%;">
					<div class="card-body">
						<h3 class="card-title">หน้าแรก</h3>
						<div class="dropdown-divider"></div>
						<!-- Alert -->
						<div class="hide" id="add_alert" role="alert">
							<div id="messages_content"></div>
						</div>
						<!-- End Alert -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModel"><i class="fas fa-plus"></i> เพิ่มผู้ใช้ใหม่</button>
					</div>
				</div>
        <!-- end card -->
				<br/>
			</div>
		</div>
	</div>
</main>
<script type="text/javascript" src="../js/datatables.min.js"></script>

</body>
</html>
