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
	      <li class="nav-item ">
	        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> หน้าแรก<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
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
						<h3 class="card-title">ข้อมูลส่วนตัว</h3>
						<div class="dropdown-divider"></div>
						<!-- Alert -->
						<div class="hide" id="add_alert" role="alert">
							<div id="messages_content"></div>
						</div>
						<!-- End Alert -->
              <?php include('../api/studentInfomation/stdInfo.php'); ?>
					</div>
				</div>
        <!-- end card -->
				<br/>
			</div>
		</div>
	</div>
</main>

<!-- Modal Edit -->
<div class="modal fade" id="editUserModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<form enctype="multipart/form-data" action="../api/studentInfomation/edit.php" method="post">
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
					<input type="text" class="form-control" placeholder="username" name="username" id="username" readonly>
			</div>
      <div class="row">
        <div class="col">
          <label class="form-check-label">ชื่อ:&nbsp;</label>
        </div>
        <div class="col">
          <label class="form-check-label">นามสกุล:&nbsp;</label>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="input-group mb-3">
    				<input type="text" class="form-control" placeholder="ชื่อ" name="firstname" id="firstname">
    			</div>
        </div>
        <div class="col">
          <div class="input-group mb-3">
    				<input type="text" class="form-control" placeholder="นามสกุล" name="lastname" id="lastname">
    			</div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">สาขาวิชา:</label>
        <div class="input-group mb-3">
        <select class="form-control" name="school" id="exampleFormControlSelect1">
					<option id="school">-สาขาวิชา-</option>
          <option id="school" value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
        </select>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">สำนักวิชา:</label>
        <div class="input-group mb-3">
        <select class="form-control" name="faculty" id="exampleFormControlSelect1">
					<option id="faculty">-สำนักวิชา-</option>
          <option id="faculty" value="เทคโนโลยีสังคม">เทคโนโลยีสังคม</option>
        </select>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">ชื่อปริญญา:</label>
        <div class="input-group mb-3">
        <select class="form-control" name="degree" id="exampleFormControlSelect1">
					<option id="degree">-ชื่อปริญญา-</option>
          <option id="degree" value="วิทยาการสารสนเทศบัณฑิต">วิทยาการสารสนเทศบัณฑิต</option>
        </select>
        </div>
      </div>
      <div class="input-group mb-1">
        <label class="form-check-label">GPAX:&nbsp;</label>
      </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="GPAX" name="gpax" id="gpax">
      </div>
      <div class="dropdown-divider"></div>
      <div class="input-group mb-1">
        <label class="form-check-label">วันเกิด:&nbsp;</label>
      </div>
      <div class="input-group mb-3">
        <input type="date" class="form-control" placeholder="วันเกิด" name="birthday" id="birthday">
      </div>
			<div class="row">
				<div class="col">
					<label class="form-check-label">สัญชาติ:&nbsp;</label>
				</div>
				<div class="col">
					<label class="form-check-label">เชื้อชาติ:&nbsp;</label>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="สัญชาติ" name="religion" id="religion">
					</div>
				</div>
				<div class="col">
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="เชื้อชาติ" name="nation" id="nation">
					</div>
				</div>
			</div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">การเกณฑ์ทหาร:</label>
        <div class="input-group mb-3">
        <select class="form-control" name="military" id="exampleFormControlSelect1">
					<option id="military">-การเกณฑ์ทหาร-</option>
					<option id="military" value="ยังไม่ผ่านการเกณฑทหาร์">ยังไม่ผ่านการเกณฑทหาร์</option>
					<option id="military" value="ได้รับการยกเว้น">ได้รับการยกเว้น</option>
					<option id="military" value="ผ่อนผัน">ผ่อนผัน</option>
					<option id="military" value="ผ่านการเกณฑทหาร์">ผ่านการเกณฑทหาร์</option>
        </select>
        </div>
      </div>
			<div class="input-group mb-1">
				<label class="form-check-label">อีเมล:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="email" class="form-control" placeholder="อีเมล" name="email" id="email2">
			</div>
			<div class="input-group mb-1">
				<label class="form-check-label">โทรศัพท์:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="โทรศัพท์" name="tel" id="tel">
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

<script type="text/javascript" src="../js/datatables.min.js"></script>
<script>
$('#editUserModel').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var username = button.data('username')
	var email = button.data('email')
	var id = button.data('id')
	var firstname = button.data('fn')
	var lastname = button.data('ln')
	var gpax = button.data('gpax')
	var birthday = button.data('bd')
	var religion = button.data('religion')
	var nation = button.data('nation')
	var tel = button.data('tel')
	document.getElementById("email2").value = email;
	document.getElementById("userId").value = id;
	document.getElementById("username").value = username;
	document.getElementById("firstname").value = firstname;
	document.getElementById("lastname").value = lastname;
	document.getElementById("gpax").value = gpax;
	document.getElementById("birthday").value = birthday;
	document.getElementById("religion").value = religion;
	document.getElementById("nation").value = nation;
	document.getElementById("tel").value = tel;
})
</script>
</body>
</html>
