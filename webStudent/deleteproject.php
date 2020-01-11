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
	<link rel="stylesheet" type="text/css" href="../css/Colum.css"/>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/datatables.css"/>
	<link rel="stylesheet" href="../nice/css/mdb.min.css">
	
	<style>
body{
	background-image:url("../img/back.gif")
}

</style>
</head>
<body>

		<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#56187f;">

<!-- Navbar brand -->
<a class="navbar-brand" href="#">WEB-STUDENT</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item ">
      <a class="nav-link" href="index.php"><i class="fas fa-home "></i> หน้าแรก
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="stdInfo.php"><i class="fas fa-user"></i> ข้อมูลส่วนตัว</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="project_all.php"><i class="fas fa-folder "></i> โครงงานของฉัน</a>
  </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          อื่นๆ
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="edit_password.php"><i class="fas fa-lock "></i> แก้ไขรหัสผ่าน</a>
        </div>
      </li>
    <!-- Dropdown -->
    </li>
         
  </ul>
  <!-- Links -->

    <span class="navbar-text" style="font-size: 14px;color:white"><?php include('../webStudent/usericon.php'); ?> 
    &nbsp;	สวัสดี,คุณ <?php echo $_SESSION['userlogin']["Username"]; ?>&nbsp;
     </span>
    <span class="navbar-text" style="font-size: 14px">
      <a href="../logout.php" ><i class="fas fa-sign-out-alt fa-lg" style="color:white"></i></a>
    </span>

</nav>
<!--/.Navbar-->
</div>
	<br/>
<main  >
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">
        <!-- start card -->
				<div class="card"  style="width: 100%;">
					<div class="card-body"  Style='background-image:url("../img/<?php echo $Team; ?>");height:550px;'>

						<div class="hide" id="add_alert" role="alert" >
							<div id="messages_content" ></div>
						</div>
						<!-- End Alert -->

<?php
$PId = $_POST["PId"];
$Pname = $_POST["Pname"];
include('../config/connect.php');
$sql = "DELETE FROM projectinfo WHERE Id ='".$PId."'"; 
if ($db->query($sql) === TRUE) {
    echo "
    <div class='alert alert-success' role='alert' Style='cursor: pointer;border-left: solid 5px #00c853;'>
    <h4 class='alert-heading'>ลบเรียบร้อยแล้ว!</h4>
    <p>ลบโครงงาน ".$Pname." เรียบร้อยแล้ว  
    <hr>
    <p class='mb-0'>สามารถสอบถามการใช้งาน หรือแจ้งปัญหาการใช้งานได้ ไปยังเมนูผู้ดูแลระบบ.</p>
    </div>
    
    ";
} else {
    echo "
    <div class='alert alert-danger' role='alert'>
    ลบโครงงานไม่ได้<a href='#' class='alert-link'> เกิดข้อผิดพลาด</a>. ลบโครงงานใหม่อีกครั้งภายหลัง หรือแจ้งปัญหาไปยังเมนูผู้ดูแลระบบ.
    </div>
    ";
}
?>
<br><br>

<CENTER><button type='button' class='btn purple-gradient btn-lg' data-toggle="modal" data-target="#exampleModalCenter" onclick="window.location.href = 'project_all.php'"><i class="fas fa-chevron-circle-left fa-lg"></i><h8> กลับหน้าก่อน</h8></button><br></CENTER>       



</div>
				</div>
        <!-- end card -->
				<br/>
			</div>
		</div>
	</div>
</main>
</body>
</html>