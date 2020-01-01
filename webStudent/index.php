<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
	}
	$D = $_SESSION['userlogin']["Id"];
    include('../config/connect.php');
    $sql = "SELECT Team FROM users where ID = '".$D."'";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc()) {
    $Team1 = $row["Team"];
    }
    if($Team1==""){
        $Team = "line.jpg";
      }else{
        $Team = $Team1;
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


</style>
</head>
<body>

	<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#921ecc;">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Student</a>

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
        <a class="nav-link" href="#"><i class="fas fa-home "></i> หน้าแรก
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user"></i> ข้อมูลส่วนตัว</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-folder "></i> โครงงานของฉัน</a>
	  </li>
	  <li class="nav-item ">
				 	<a class="nav-link" href="#"><i class="fas fa-bell "></i><span> การแจ้งเตือน </span><span class="badge btn-danger">3</span></a>
			 </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            อื่นๆ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#"><i class="fas fa-user"></i> แก้ไขโปรไฟล์</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="fas fa-lock "></i> แก้ไขรหัสผ่าน</a>
          </div>
        </li>
      <!-- Dropdown -->
      </li>
           
    </ul>
    <!-- Links -->

            <span class="navbar-text" style="font-size: 14px;color:white"><img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0" alt="avatar image" height="24"> 
		 		สวัสดี,คุณ <?php echo $_SESSION['userlogin']["Username"] ?>&nbsp;
	 		</span>
			<span class="navbar-text" style="font-size: 14px">
				<a href="../logout.php" ><i class="fas fa-sign-out-alt fa-lg" style="color:white"></i></a>
			</span>

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
					<div class="card-body"  Style='background-image:url("../img/<?php echo $Team; ?>")'>

						<div class="hide" id="add_alert" role="alert" >
							<div id="messages_content" ></div>
						</div>
						<!-- End Alert -->
						<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>

										<th style="visibility: hidden;"></th>
										<th scope="col" align="left">โครงงาน</th>
										<th style="visibility: hidden;"></th>
										
										
										<!-- <th scope="col">Update</th> -->
									</tr>
								</thead>
								<tbody>
								<?php include('../api/projectManagement/ProjectTable.php'); ?>
								</tbody>
							</table>
						</div>
                         
						
				
              
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
