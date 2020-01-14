<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
	}
	if($_SESSION['userlogin']["Role"]!='admin'){
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
	  <a class="navbar-brand" href="index.php">WEB-ADMIN</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="index.php">แดชบอร์ด<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="userManagement.php">หน้าจัดการผู้ใช้ระบบ</a>
	      </li>
				<li class="nav-item active">
				 <a class="nav-link" href="pj_history.php">ประวัติการอนุมัติโครงงาน</a>
			 </li>
			 <li class="nav-item active">
				<a class="nav-link" href="feedback_topic.php">การแจ้งปัญหาและข้อเสนอแนะ</a>
			</li>
       <!-- <li class="nav-item">
        <a class="nav-link" href="projectManagement.php">หน้าจัดการโครงงาน</a>
      </li> -->

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
		<div class="container-xl">
			<div class="card " style="width: 100%;">
				<div class="card-body">

					<h3 class="card-title">ประวัติการอนุมัติโครงงาน</h3>
					<div class="dropdown-divider"></div><br/>
					<div class="table-responsive">
						<table class="table table-hover" id="example2" >
							<thead>
								<tr>
									<th scope="col" align="left">รายชื่อโครงงาน</th>
								</tr>
							</thead>
							<tbody >
							<?php include('../api/projectManagement_admin/project_history.php'); ?>
							</tbody>
						</table>
					</div>
			 </div>
			</div>
		</div>
	</main><br/>
<script type="text/javascript" src="../js/datatables.min.js"></script>
<script>

$(document).ready(function() {
  $('#example2').DataTable({
      "ordering": false,
      "pagingType": "full_numbers",
      "scrollY":        "80vh",
      "scrollCollapse": true,
      "language": {
         "lengthMenu": "จำนวนแถว _MENU_",
         "zeroRecords": "ไม่พบข้อมูล",
         "info": "แสดงหน้า _PAGE_ จากทั้งหมด _PAGES_ หน้า",
         "infoEmpty": "ไม่มีข้อมูล",
         "infoFiltered": "(ค้นหาจากทั้งหมด _MAX_ ข้อมูล)",
         "search": "ค้นหา:",
         "paginate": {
            "first": "หน้าแรก",
            "last":  "หน้าสุดท้าย",
            "next": "ถัดไป",
            "previous": "ย้อนกลับ"
  },
     },
      "dom": 'frt'
  } );
} );
</script>
</body>
</html>
