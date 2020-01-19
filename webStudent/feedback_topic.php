<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
	}
	if($_SESSION['userlogin']["Role"]!='student'){
		header("Location: ../login.php");
	}
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Student Project</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/bootstrapA.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/datatables.css"/>
<style>
body{
	background-image:url("../img/back.gif")
}

</style>
</head>
<body>


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
	<li class="nav-item ">
	  <a class="nav-link" href="project_all.php"><i class="fas fa-folder "></i> โครงงานของฉัน</a>
	</li>
	 <li class="nav-item active dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  อื่นๆ
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="feedback_topic.php"><i class="fas fa-comment-alt "></i> เมนูผู้ดูแลระบบ</a>
		  <div class="dropdown-divider"></div>
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

</div>
	<br/>
  <main>
  	<div class="container">
  		<div class="row">
  		  <div class="col-sm-12">
  				<div class="card"  style="width: 100%;">
  					<div class="card-body">
  						<h3 class="card-title"><i class="fas fa-comments"></i> ปัญหาหรือข้อเสนอแนะ</h3>
							<div class="dropdown-divider"></div>
                            <br>
                            <button  title="ติดต่อผู้ดูแลระบบ" class="btn btn-danger btn-md" data-toggle='modal' data-target='#feedback_model'>
                            <i class="fas fa-plus "></i> แจ้งปัญหาหรือข้อเสนอแนะ
                           </button>
							<?php
							if(isset($_GET["res"]))
							{
								$get_res = $_GET["res"];
								if($get_res=='"success"'){
									echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
										<center><strong><i class="fas fa-check-circle"></i> แจ้งปัญหาหรือข้อเสนอแนะสำเร็จ</strong></center>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>';
								}else{
									echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
										<center><strong><i class="fas fa-times-circle"></i> แจ้งปัญหาหรือข้อเสนอแนะไม่สำเร็จ</strong></center>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>';
								}
							}
							?>
              <div class="table-responsive">
                <table class="table table-hover" id="example">
                  <thead>
                    <tr>
                      <th scope="col" align="left">Id</th>
                      <th scope="col" align="left" width="25%">หัวข้อ</th>
                      <th scope="col" align="left" width="38%">รายละเอียด</th>
                      <th scope="col" align="left" width="15%">วันที่แจ้ง</th>
                      <th scope="col" align="left" width="10%">สถานะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include('../config/connect.php');
                    $advisor=$_SESSION['userlogin']['Id'];
                    $sql = "SELECT * FROM feedback_topic WHERE fb_createdBy='$advisor'" ;
                    $result = $db->query($sql);
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        if($row["fb_status"]=='กำลังตรวจสอบ'){
                          $classType = 'warning';
                        }else if($row["fb_status"]=='ดำเนินการแล้ว'){
                          $classType = 'success';
                        }else{
                          $classType = 'danger';
                        }
                        echo "<tr>
                        <td align='left'>".$row["fb_id"]."</td>
                        <td align='left'><a href='feedback.php?fb_id=".$row["fb_id"]."&fb_topic=".$row["fb_topic"]."'>".$row["fb_topic"]."</a></td>
                        <td align='left'>".$row["fb_detail"]."</td>
                        <td align='left'>".date("d-m-Y", strtotime($row["fb_createdDate"]))."</td>
                        <td align='left'><span style='width: 80px;' class='badge badge-pill badge-".$classType."'>".$row["fb_status"]."</span></td>
                        </tr>";
                      }
                    } 
                    $db->close();
                    ?>
                  </tbody>
                </table>
              </div>

          	</div>
  				 </div>
  				<br/>
  			</div>
  		</div>


  	</div>
  </main>

	<!-- Modal ติดต่อผู้ดูแลระบบ -->
	<div class="modal fade" id="feedback_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<form enctype="multipart/form-data" action="feedback_send.php" method="post" id="formhelp">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content" Style='background-image:url("../img/back1.jpg")'>
			<div class="modal-header">
				<h5 class="modal-title">แจ้งปัญหาหรือข้อเสนอแนะ</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="input-group mb-1">
					<label class="form-check-label">หัวข้อ&nbsp;</label>
				</div>
				<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="หัวข้อ" name="topic" id="topic" required>
				</div>
				<div class="input-group mb-1">
					<label class="form-check-label">รายละเอียด&nbsp;</label>
				</div>
				<div class="input-group mb-3">
					<textarea form="formhelp" class="form-control" id="validationTextarea" placeholder="แจ้งรายละเอียด" name="detail" required></textarea>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
				<button type="submit" name="feedback_send" id="submit" value="Submit" class="btn btn-primary">ยืนยัน</button>
			</div>
		</div>
	</div>
	</form>
	</div>


  <script type="text/javascript" src="../js/datatables.min.js"></script>
  <script>
  $(document).ready(function() {
      $('#example').DataTable({
          // "pageLength": 3,
          "order": [[ 0, "desc" ]],
  				"columnDefs": [
              {
                  "targets": [ 0 ],
                  "visible": false,
                  "searchable": false
              },
          ],
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
  				"dom": 'frtlip'
      } );

  } );
</script>
</body>
</html>
