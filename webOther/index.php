
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
<a class="navbar-brand" href="#">WEB-POSONAL</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

<ul class="navbar-nav mr-auto">
	<li class="nav-item active">
	  <a class="nav-link" href="index.php"><i class="fas fa-home "></i> หน้าแรก
	  </a>
	</li>
  <li class="nav-item ">
	  <a class="nav-link" href=../login.php><i class="fas fa-sign-in-alt "></i> ล็อกอิน
	  </a>
	</li>

  </ul>



</nav>
<!--/.Navbar-->
</div>
	<br/>
<main>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">
        <!-- start card -->
				<div class="card"  style="width: 100%;">
					<div class="card-body"  >
					<h3 class="card-title">โครงงาน</h3>
						<div class="dropdown-divider"></div>

						<div class="hide" id="add_alert" role="alert" >
							<div id="messages_content" ></div>
						</div>
						<!-- End Alert -->
						<nav aria-label="Page navigation example">
						<ul class="pagination pg-blue">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li class="page-item active">
						<a href="index.php" class="page-link">ทั้งหมด</a>
							</li>
							<li class="page-item "><a href="index_business.php" class="page-link">ธุรกิจ</a></li>
							<li class="page-item"><a href="index_social.php" class="page-link">สังคม</a></li>
							<li class="page-item"><a href="index_education.php" class="page-link">การศึกษา</a></li>
							<li class="page-item"><a href="index_other.php" class="page-link">อื่นๆ</a></li>
						</ul>
						</nav>
						<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>

										<th style="visibility: hidden;"></th>
										<th scope="col" align="left"></th>
										<th style="visibility: hidden;"></th>


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
        <!-- end card -->
				<br/>
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
                "visible": true,
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
