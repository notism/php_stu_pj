<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
	}
	if($_SESSION['userlogin']["Role"]!='advisor'){
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
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="index.php"><img src="../img/icon_advisor.png" class="rounded float-left" >&nbsp;ADVISOR</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item ">
	        <a class="nav-link" href="index.php">หน้าแรก</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="all_project.php">โครงงานทั้งหมด</a>
	      </li>
				<li class="nav-item">
				 <a class="nav-link" href="my_project.php">หน้าจัดการคำขอแสดงโครงงาน</a>
			 </li>
			 <li class="nav-item">
				<a class="nav-link" href="profileManagement.php">หน้าจัดการข้อมูลส่วนตัว</a>
			</li>
			<li class="nav-item">
			 <a class="nav-link" href="feedback_topic.php">ปัญหาและข้อเสนอแนะ</a>
		 </li>
	    </ul>
			<span class="navbar-text" style="font-size: 14px;color:white">
				<?php
					$imgUrl = $_SESSION['userlogin']["ImgUrl"];
					if($imgUrl!=null){
						echo '<img src="../img_user/'.$imgUrl.'" class="rounded-circle" style="width: 25px;height: 25px;">';
					}else{
						echo '<img src="../img_user/user.png" class="rounded-circle" style="width: 25px;height: 25px;">';
					}
				 ?>

				สวัสดี,คุณ <?php echo $_SESSION['userlogin']["Username"]; ?>&nbsp;
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
              <h3 class="card-title"><i class="fas fa-layer-group"></i> โครงงานทั้งหมด</h3>
              <div class="dropdown-divider"></div>
              <!-- Alert -->
              <div class="hide" id="add_alert" role="alert">
                <div id="messages_content"></div>
              </div>
              <!-- End Alert -->
              <div class="table-responsive">
                <table class="table table-hover" id="example2">
                  <thead>
                    <tr>
  										<th scope="col" align="left">Id</th>
											<th scope="col" align="left" width="25%">ชื่อโครงงาน</th>
											<th scope="col" align="left" width="25%">ผู้จัดทำ</th>
											<th scope="col" align="left" width="15%">ความนิยม</th>
											<th scope="col" align="left" width="10%">ยอดวิว</th>
											<th scope="col" align="left" width="13%">วันที่อัพโหลด</th>
											<th scope="col" align="left" width="12%">รายละเอียด</th>
  									</tr>
                  </thead>
                  <tbody>
                  <?php include('../api/project_advisor/project_table_all.php'); ?>
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
	<button style="position:fixed;bottom:20px;right:20px;padding:12px 16px;border-radius: 50%;" title="ติดต่อผู้ดูแลระบบ" class="btn btn-danger" data-toggle='modal' data-target='#feedback_model'>
		<i class="fas fa-question"></i>
	</button>
	<!-- Modal ติดต่อผู้ดูแลระบบ -->
	<div class="modal fade" id="feedback_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<form enctype="multipart/form-data" action="../api/project_advisor/feedback_send.php" method="post" id="formhelp">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
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
      $('#example2').DataTable({

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
