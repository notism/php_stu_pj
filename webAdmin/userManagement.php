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
						<h3 class="card-title">หน้าจัดการผู้ใช้ระบบ</h3>
						<div class="dropdown-divider"></div>
						<!-- Alert -->
						<div class="hide" id="add_alert" role="alert">
							<div id="messages_content"></div>
						</div>
						<!-- End Alert -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModel"><i class="fas fa-plus"></i> เพิ่มผู้ใช้ใหม่</button>
						<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>
										<th scope="col" align="left">Id</th>
										<th scope="col" align="left">ชื่อผู้ใช้</th>
										<th scope="col" align="left">อีเมล</th>
										<th scope="col" align="left">วันที่ลงทะเบียน</th>
										<th scope="col" align="left">สถานะ</th>
										<th scope="col">แก้ไข</th>
										<th scope="col">ลบ</th>
									</tr>
								</thead>
								<tbody>
								<?php include('../api/userManagement/userTable.php'); ?>
								</tbody>
							</table>
						</div>

					</div>
				</div>
				<br/>
			</div>
		</div>
	</div>

	<!-- Modal Add -->
<div class="modal fade" id="addUserModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<form enctype="multipart/form-data" action="../api/userManagement/addUser.php" method="post">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">เพิ่มผู้ใช้ใหม่</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<div class="input-group mb-3">
  				<input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="username" id="username" value="" required>
				</div>
				<div class="input-group mb-3">
  				<input type="email" class="form-control" placeholder="อีเมล" name="email" id="email" required>
				</div>
				<div class="input-group mb-3">
  				<input type="password" class="form-control" placeholder="รหัสผ่าน" name="password" id="password" required>
				</div>
				<div class="input-group mb-3">
					<label class="form-check-label" for="defaultCheck1">เลือกสถานะ:&nbsp;</label>
				</div>
				<div align="center">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="role" id="role" value="admin">
					<label class="form-check-label" for="role">แอดมิน</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="role" id="role" value="student">
					<label class="form-check-label" for="role">นักศึกษา</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="role" id="role" value="advisor">
					<label class="form-check-label" for="role">คณะอาจาย์</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="role" id="role" value="personal">
					<label class="form-check-label" for="role">บุคคลทั่วไป</label>
				</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="add_user" id="submit" value="Submit" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</form>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editUserModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<form enctype="multipart/form-data" action="../api/userManagement/edit.php" method="post">
<div class="modal-dialog modal-dialog-scrollable" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">แก้ไขข้อมูลผู้ใช้</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="input-group mb-1">
				<label class="form-check-label">รหัสผู้ใช้:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="userId" name="userId" id="userId" readonly>
			</div>
			<div class="input-group mb-1">
				<label class="form-check-label">ชื่อผู้ใช้:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="username" id="username2" readonly>
			</div>
			<div class="input-group mb-1">
				<label class="form-check-label">อีเมล:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="email" class="form-control" placeholder="อีเมล" name="email" id="email2">
			</div>
			<div class="input-group mb-1">
				<label class="form-check-label">รหัสผ่าน:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="password" class="form-control" placeholder="รหัสผ่าน" name="password" id="password2">
			</div>
			<div class="input-group mb-3">
				<label class="form-check-label" for="defaultCheck1">เลือกสถานะ:&nbsp;</label>
			</div>
			<div align="center">
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="role" id="role2" value="admin">
				<label class="form-check-label" for="role">แอดมิน</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="role" id="role2" value="student">
				<label class="form-check-label" for="role">นักศึกษา</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="role" id="role2" value="advisor">
				<label class="form-check-label" for="role">คณะอาจาย์</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="role" id="role2" value="personal">
				<label class="form-check-label" for="role">บุคคลทั่วไป</label>
			</div>
		</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
			<button type="submit" name="edit_user" id="submit" value="Submit" class="btn btn-primary">ยืนยัน</button>
		</div>
	</div>
</div>
</form>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="deleteUserModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<form enctype="multipart/form-data" action="../api/userManagement/delete.php" method="post">
<div class="modal-dialog modal-dialog-scrollable" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title"><div id="del_msg"></div></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="input-group mb-1">
				<label class="form-check-label">รหัสผู้ใช้:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="userId" name="userId" id="userId2" readonly>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
			<button type="submit" name="delete_user" id="submit" value="Submit" class="btn btn-danger">ยืนยัน</button>
		</div>
	</div>
</div>
</form>
</div>


</main>
<script type="text/javascript" src="../js/datatables.min.js"></script>
<script type="text/javascript">
$(function(){
		$('#login').click(function(e){

		});
	});
if($_SESSION['success']==="success"){
	$('#add_alert').removeClass('hide').addClass('alert alert-success alert-dismissible').slideDown().show();
  $('#messages_content').html('<h4>MESSAGE HERE</h4>');
}else if($_SESSION['success']==="fail"){
	$('#add_alert').removeClass('hide').addClass('alert alert-danger alert-dismissible').slideDown().show();
  $('#messages_content').html('<h4>MESSAGE HERE</h4>');
}
</script>
<script>
$('#editUserModel').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var username = button.data('username')
	var email = button.data('email')
	var id = button.data('id')
  document.getElementById("username2").value = username;
	document.getElementById("email2").value = email;
	document.getElementById("userId").value = id;
})
$('#deleteUserModel').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('del_id')
	var username = button.data('username')
	document.getElementById("userId2").value = id;
   $('#del_msg').html('<label>คุณต้องการลบ ' + username +' ใช่ไหม?</label>');
})

$(document).ready(function() {
    $('#example').DataTable({

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
