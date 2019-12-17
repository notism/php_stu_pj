<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
	}
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Student Project</title>
	<link rel="stylesheet" type="text/css" href="../css/Colum.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/bootstrapA.css">

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
	      <li class="nav-item active">
	        <a class="nav-link" href="userManagement.php">หน้าจัดการผู้ใช้ระบบ</a>
	      </li>
				<li class="nav-item">
				 	<a class="nav-link" href="feedbackManagement.php">หน้าจัดการข้อเสนอแนะและปัญหา</a>
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
				<div class="card"  style="width: 100%;">
					<div class="card-body">


						<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>

										<th>A</th>
										<th scope="col" align="left">โครงงาน</th>
										<th>B</th>
										<!-- <th scope="col">Update</th> -->
									</tr>
								</thead>
								<tbody>
								<?php include('../api/projectManagement/ProjectTable.php'); ?>
								</tbody>
							</table>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>


</main>
<script type="text/javascript" src="../js/datatables.min.js"></script>
<script>
$(document).ready(function() {

    $('#example').DataTable({

        "order": [[ 0, "desc" ]],
				"columnDefs": [
            {
                "targets": [ 0,2 ],
                "visible": false,
                "searchable": false
            },
        ],
				"pagingType": "full_numbers",
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
				"dom": 'frtlip'
    } );
} );
</script>
</body>
</html>
