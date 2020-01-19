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
	<link rel="stylesheet" href="../css/bootstrap-selecta.css">
	<script src="../js/bootstrap-select.js"></script>
</head>
<style>
body{
	background-image:url("../img/back.gif")
}

</style>
<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  if(x=="1"){
  document.getElementById("demo").innerHTML = "<select class='selectpicker' name='school' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

include('../config/connect.php');

$sql = "SELECT * FROM `department` WHERE dep_fuculty_id = '1' ";
$result = $db->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$D_id = $row['dep_id'];
		$D_name = $row['dep_name'];
		echo "<option value='".$D_id."'>".$D_name."</option>";
	}
} else {
	echo "<option>ไม่พบข้อมูล</option>";
}
$db->close();
?></select>";
  }else if(x==2){
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='school' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

include('../config/connect.php');

$sql = "SELECT * FROM `department` WHERE dep_fuculty_id = '2' ";
$result = $db->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$D_id = $row['dep_id'];
		$D_name = $row['dep_name'];
		echo "<option value='".$D_id."'>".$D_name."</option>";
	}
} else {
	echo "<option>ไม่พบข้อมูล</option>";
}
$db->close();
?></select>";
 }else if(x==3){
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='school' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

include('../config/connect.php');

$sql = "SELECT * FROM `department` WHERE dep_fuculty_id = '3' ";
$result = $db->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$D_id = $row['dep_id'];
		$D_name = $row['dep_name'];
		echo "<option value='".$D_id."'>".$D_name."</option>";
	}
} else {
	echo "<option>ไม่พบข้อมูล</option>";
}
$db->close();
?></select>";
 }else if(x==4){
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='school' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

include('../config/connect.php');

$sql = "SELECT * FROM `department` WHERE dep_fuculty_id = '4' ";
$result = $db->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$D_id = $row['dep_id'];
		$D_name = $row['dep_name'];
		echo "<option value='".$D_id."'>".$D_name."</option>";
	}
} else {
	echo "<option>ไม่พบข้อมูล</option>";
}
$db->close();
?></select>";
 }else if(x==5){
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='school' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

include('../config/connect.php');

$sql = "SELECT * FROM `department` WHERE dep_fuculty_id = '5' ";
$result = $db->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$D_id = $row['dep_id'];
		$D_name = $row['dep_name'];
		echo "<option value='".$D_id."'>".$D_name."</option>";
	}
} else {
	echo "<option>ไม่พบข้อมูล</option>";
}
$db->close();
?></select>";
 }else if(x==6){
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='school' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

include('../config/connect.php');

$sql = "SELECT * FROM `department` WHERE dep_fuculty_id = '6' ";
$result = $db->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$D_id = $row['dep_id'];
		$D_name = $row['dep_name'];
		echo "<option value='".$D_id."'>".$D_name."</option>";
	}
} else {
	echo "<option>ไม่พบข้อมูล</option>";
}
$db->close();
?></select>";
 }else if(x==7){
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='school' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

include('../config/connect.php');

$sql = "SELECT * FROM `department` WHERE dep_fuculty_id = '7' ";
$result = $db->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$D_id = $row['dep_id'];
		$D_name = $row['dep_name'];
		echo "<option value='".$D_id."'>".$D_name."</option>";
	}
} else {
	echo "<option>ไม่พบข้อมูล</option>";
}
$db->close();
?></select>";
 }else if(x==8){
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='school' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

include('../config/connect.php');

$sql = "SELECT * FROM `department` WHERE dep_fuculty_id = '8' ";
$result = $db->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$D_id = $row['dep_id'];
		$D_name = $row['dep_name'];
		echo "<option value='".$D_id."'>".$D_name."</option>";
	}
} else {
	echo "<option>ไม่พบข้อมูล</option>";
}
$db->close();
?></select>";
 }

}
</script>
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
	<li class="nav-item active">
	  <a class="nav-link" href="stdInfo.php"><i class="fas fa-user"></i> ข้อมูลส่วนตัว</a>
	</li>
	<li class="nav-item ">
	  <a class="nav-link" href="project_all.php"><i class="fas fa-folder "></i> โครงงานของฉัน</a>
	</li>
	 <li class="nav-item dropdown">
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
<!--/.Navbar-->
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
						<div class='dropdown-divider'></div>
						<div class='text-right '>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSHisModel"><i class="fas fa-plus"></i> เพิ่มประวัติการศึกษา</button>
						</div>
						<div class="table-responsive mt-2">
							<table class="table table-hover" id="example">
								<thead>
									<tr style="background-color:#56187f;color:white">
										<th scope="col" align="left" width="15%">ระดับการศึกษา</th>
										<th scope="col" align="left">ชื่อสถานศึกษา</th>
										<th scope="col" align="left" width="20%">วุฒิที่ได้รับ</th>
										<th scope="col" align="left" width="15%">ช่วงเวลาที่ศึกษา</th>
										<th scope="col" align="left" width="8%">แก้ไข</th>
										<th scope="col" align="left" width="8%">ลบ</th>
									</tr>
								</thead>
								<tbody>
								<?php include('../api/studentInfomation/stdInfo_std_his.php'); ?>
								</tbody>
							</table>
						</div>
						<div class='dropdown-divider'></div>
						<div class='text-right '>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTHisModel"><i class="fas fa-plus"></i> เพิ่มประวัติการฝึกอบรม</button>
						</div>
						<div class="table-responsive mt-2">
							<table class="table table-hover" id="example">
								<thead>
									<tr style="background-color:#56187f;color:white">
										<th scope="col" align="left">หัวข้อ</th>
										<th scope="col" align="left" width="25%">หน่วยงานที่ให้บริการ</th>
										<th scope="col" align="left" width="15%">ช่วงเวลาที่เข้าอบรม</th>
										<th scope="col" align="left" width="8%">แก้ไข</th>
										<th scope="col" align="left" width="8%">ลบ</th>
									</tr>
								</thead>
								<tbody>
								<?php include('../api/studentInfomation/stdInfo_tain_his.php'); ?>
								</tbody>
							</table>
						</div>
						<div class='dropdown-divider'></div>
						<div class='text-right '>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSkillsModel"><i class="fas fa-plus"></i> เพิ่มทักษะความสามารถ</button>
						</div>
						<div class="table-responsive mt-2">
							<table class="table table-hover" id="example">
								<thead>
									<tr style="background-color:#56187f;color:white">
										<th scope="col" align="left" width="15%">ประเภท</th>
										<th scope="col" align="left" >ทักษะ</th>
										<th scope="col" align="left" width="8%">แก้ไข</th>
										<th scope="col" align="left" width="8%">ลบ</th>
									</tr>
								</thead>
								<tbody>
								<?php include('../api/studentInfomation/std_skill.php'); ?>
								</tbody>
							</table>
						</div>
						<div class="table-responsive mt-2" >
							<table class="table table-hover" id="example">
								<thead >
									<tr style="background-color:#56187f;color:white">
										<th scope="col" align="left" width="100%">จัดทำโครงงาน</th>
									</tr>
								</thead>
								<tbody>
								<?php include('../api/studentInfomation/std_project_me_view.php'); ?>
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

<!-- Modal Edit -->
<div class="modal fade" id="editUserModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<form enctype="multipart/form-data" action="../api/studentInfomation/edit.php" method="post">
<div class="modal-dialog modal-dialog-scrollable" role="document">
	<div class="modal-content" Style='background-image:url("../img/back1.jpg")'>
		<div class="modal-header">
			<h5 class="modal-title">แก้ไขข้อมูลผู้ใช้</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="input-group mb-1">
				<label class="form-check-label">ชื่อผู้ใช้:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="username" name="username" id="username" readonly>
			</div>
			<div class="input-group mb-1">
        <label class="form-check-label">คำนำหน้า:&nbsp;</label>
      </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="คำนำหน้า" name="prefix" id="prefix">
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
			<div class="input-group mb-1">
				<label class="form-check-label">อีเมล:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="email" class="form-control" placeholder="อีเมล" name="email" id="email">
			</div>
			<div class="input-group mb-1">
				<label class="form-check-label">โทรศัพท์:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="tel" class="form-control" placeholder="โทรศัพท์" name="tel" id="tel"  pattern="[0-9]{10}">
			</div>
			<div class="form-group">
				<label for="exampleFormControlSelect1">สำนักวิชา:</label>
				<div class="input-group mb-3">
					<select class="selectpicker" size="5" name="faculty" id="mySelect" onchange="myFunction()"  data-live-search="true" title="โปรดเลือกสำนักวิชา" required>
						<?php
						include('../config/connect.php');
						$sql = "SELECT * FROM `fuaculty` WHERE 1" ;
						$result = $db->query($sql);
						$i = 1;
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo '<option value="'.$row["fac_id"].'">'.$row["fac_name"].'</option>';
								$i++;
							}
						} else {
								echo '<option>ไม่พบข้อมูล</option>';
						}
						$db->close();
						?>
					</select>
				</div>
			</div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">สาขาวิชา:</label>
				<div class="input-group mb-3" id="demo">
				<select class="selectpicker" size="3" name="school" id="mySelect2"  title="โปรดเลือกสาขาวิชา" required>
					<?php
					include('../config/connect.php');
					$sql = "SELECT * FROM `department` WHERE 1" ;
					$result = $db->query($sql);
					$i = 1;
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							echo '<option value="'.$row["dep_id"].'">'.$row["dep_name"].'</option>';
							$i++;
						}
					} else {
						while($row = $result->fetch_assoc()) {
							echo '<option>ไม่พบข้อมูล</option>';
						}
					}
					$db->close();
					?>
				</select>
				</div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">ชื่อปริญญา:</label>
        <div class="input-group mb-3">
        	<input type="text" class="form-control" placeholder="ชื่อปริญญา" name="degree" id="degree">
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
					<option id="military" value="ยังไม่ผ่านการเกณฑทหาร์">ยังไม่ผ่านการเกณฑทหาร์</option>
					<option id="military" value="ได้รับการยกเว้น">ได้รับการยกเว้น</option>
					<option id="military" value="ผ่อนผัน">ผ่อนผัน</option>
					<option id="military" value="ผ่านการเกณฑทหาร์">ผ่านการเกณฑทหาร์</option>
        </select>
        </div>
      </div>
			<div class="input-group mb-1">
				<label class="form-check-label">รูปโปรไฟล์:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload">
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

<!-- Modal Add StudyHistory -->
<div class="modal fade" id="addSHisModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<form enctype="multipart/form-data" action="../api/studentInfomation/add_stdy_his.php" method="post">
<div class="modal-dialog modal-dialog-scrollable" role="document">
	<div class="modal-content" Style='background-image:url("../img/back1.jpg")'>
		<div class="modal-header">
			<h5 class="modal-title">เพิ่มประวัติการศึกษา</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="ชื่อสถานการศึกษา (ตย.มหาวิทยาลัยเทคโนโลยีสรุนารี)" name="SchoolName" id="SchoolName" required>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="ระดับการศึกษา (ตย.ปริญญาตรี)" name="Level" id="Level" required>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="วุฒิที่ได้รับ (ตย.ปริญญาตรี)" name="Qualification" id="Qualification" required>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="ช่วงเวลาที่ศึกษา (ตย.2550-2552)" name="Time" id="Time">
			</div>
		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
			<button type="submit" name="add_stdy_his" id="submit" value="Submit" class="btn btn-primary">บันทึก</button>
		</div>
	</div>
</div>
</form>
</div>

<!-- Modal Edit StudyHistory-->
<div class="modal fade" id="editshisModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<form enctype="multipart/form-data" action="../api/studentInfomation/edit_1.php" method="post">
<div class="modal-dialog modal-dialog-scrollable" role="document">
	<div class="modal-content" Style='background-image:url("../img/back1.jpg")'>
		<div class="modal-header">
			<h5 class="modal-title">แก้ไขประวัติการศึกษา</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
				<input type="hidden" class="form-control" placeholder="รหัส" name="Id" id="IdEdit1" readonly>
			<div class="input-group mb-1">
				<label class="form-check-label">ชื่อสถานการศึกษา:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="ชื่อสถานการศึกษา (ตย.มหาวิทยาลัยเทคโนโลยีสรุนารี)" name="SchoolName" id="sc1" required>
			</div>
			<div class="input-group mb-1">
				<label class="form-check-label">ระดับการศึกษา:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="ระดับการศึกษา (ตย.ปริญญาตรี)" name="Level" id="lv1" required>
			</div>
			<div class="input-group mb-1">
				<label class="form-check-label">วุฒิที่ได้รับ:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="วุฒิที่ได้รับ (ตย.ปริญญาตรี)" name="Qualification" id="qu1" required>
			</div>
			<div class="input-group mb-1">
				<label class="form-check-label">ช่วงเวลาที่ศึกษา:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="ช่วงเวลาที่ศึกษา (ตย.2550-2552)" name="Time" id="time1">
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
			<button type="submit" name="edit_1" id="submit" value="Submit" class="btn btn-primary">ยืนยัน</button>
		</div>
	</div>
</div>
</form>
</div>

<!-- Modal Delete StudyHistory -->
<div class="modal fade" id="deleteshisModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<form enctype="multipart/form-data" action="../api/studentInfomation/del_shis.php" method="post">
<div class="modal-dialog modal-dialog-scrollable" role="document">
	<div class="modal-content" Style='background-image:url("../img/back1.jpg")'>
		<div class="modal-header">
			<h5 class="modal-title"><div id="del_msg1"></div></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="input-group mb-1">
				<label class="form-check-label">กดยืนยันเพื่อลบข้อมูล&nbsp;</label>
			</div>
					<input type="hidden" class="form-control" placeholder="รหัส" name="Id1" id="Id1" readonly>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
			<button type="submit" name="del1" id="submit" value="Submit" class="btn btn-danger">ยืนยัน</button>
		</div>
	</div>
</div>
</form>
</div>

<!-- Modal Add tainningHistory -->
<div class="modal fade" id="addTHisModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<form enctype="multipart/form-data" action="../api/studentInfomation/add_tny_his.php" method="post">
<div class="modal-dialog modal-dialog-scrollable" role="document">
	<div class="modal-content" Style='background-image:url("../img/back1.jpg")'>
		<div class="modal-header">
			<h5 class="modal-title">เพิ่มประวัติการเข้าอบรม</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="หัวข้อ (ตย.Big data)" name="Header" id="Header" required>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="หน่วยงานที่ให้บริการ (ตย.มหาวิทยาลัยเทคโนโลยีสุรนารี)" name="Organize" id="Organize" required>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="ช่วงเวลาที่เข้าอบรม (ตย.2550)" name="Time" id="Time">
			</div>
		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
			<button type="submit" name="add_tny_his" id="submit" value="Submit" class="btn btn-primary">บันทึก</button>
		</div>
	</div>
</div>
</form>
</div>

<!-- Modal Edit tainningHistory-->
<div class="modal fade" id="editthisModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<form enctype="multipart/form-data" action="../api/studentInfomation/edit_2.php" method="post">
<div class="modal-dialog modal-dialog-scrollable" role="document">
	<div class="modal-content" Style='background-image:url("../img/back1.jpg")'>
		<div class="modal-header">
			<h5 class="modal-title">แก้ไขประวัติการเข้าอบรม</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
				<input type="hidden" class="form-control" placeholder="รหัส" name="Id2" id="IdEdit2" readonly>
			<div class="input-group mb-1">
				<label class="form-check-label">หัวข้อ:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="หัวข้อ (ตย.Big data)" name="Header2" id="Header2" required>
			</div>
			<div class="input-group mb-1">
				<label class="form-check-label">หน่วยงานที่ให้บริการ:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="หน่วยงานที่ให้บริการ (ตย.มหาวิทยาลัยเทคโนโลยีสุรนารี)" name="Organize2" id="Organize2" required>
			</div>
			<div class="input-group mb-1">
				<label class="form-check-label">ช่วงเวลาที่เข้าอบรม:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="ช่วงเวลาที่เข้าอบรม (ตย.2550)" name="Time2" id="Time2">
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
			<button type="submit" name="edit_2" id="submit" value="Submit" class="btn btn-primary">ยืนยัน</button>
		</div>
	</div>
</div>
</form>
</div>


<!-- Modal Delete tainningHistory -->
<div class="modal fade" id="deletethisModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<form enctype="multipart/form-data" action="../api/studentInfomation/del_this.php" method="post">
<div class="modal-dialog modal-dialog-scrollable" role="document">
	<div class="modal-content" Style='background-image:url("../img/back1.jpg")'>
		<div class="modal-header">
			<h5 class="modal-title"><div id="del_msg2"></div></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="input-group mb-1">
				<label class="form-check-label">กดยืนยันเพื่อลบข้อมูล&nbsp;</label>
			</div>
				<input type="hidden" class="form-control" placeholder="รหัส" name="Id2" id="Id2" readonly>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
			<button type="submit" name="del2" id="submit" value="Submit" class="btn btn-danger">ยืนยัน</button>
		</div>
	</div>
</div>
</form>
</div>

<!-- Modal Add skillsHistory -->
<div class="modal fade" id="addSkillsModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<form enctype="multipart/form-data" action="../api/studentInfomation/add_skills.php" method="post" id="addskills">
<div class="modal-dialog modal-dialog-scrollable" role="document">
	<div class="modal-content" Style='background-image:url("../img/back1.jpg")'>
		<div class="modal-header">
			<h5 class="modal-title">เพิ่มทักษะความสามารถ</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="ประเภท (ตย.ภาษาต่างประเทศ)" name="Type" id="Type" required>
			</div>
			<div class="input-group mb-3">
				<textarea form="addskills" class="form-control" id="Skills" placeholder="ทักษะ (ตย.ภาษาอังกฤษ,ภาษาจีน และภาษาญี่ปุ่น)" name="Skills" required></textarea>			
			</div>
		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
			<button type="submit" name="add_skills" id="submit" value="Submit" class="btn btn-primary">บันทึก</button>
		</div>
	</div>
</div>
</form>
</div>

<!-- Modal Edit skillsHistory-->
<div class="modal fade" id="editskillsModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<form enctype="multipart/form-data" action="../api/studentInfomation/edit_3.php" method="post">
<div class="modal-dialog modal-dialog-scrollable" role="document">
	<div class="modal-content" Style='background-image:url("../img/back1.jpg")'>
		<div class="modal-header">
			<h5 class="modal-title">แก้ไขทักษะความสามารถ</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
				<input type="hidden" class="form-control" placeholder="รหัส" name="Id" id="IdEdit3" readonly>
			<div class="input-group mb-1">
				<label class="form-check-label">ประเภท:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="ประเภท (ตย.ภาษาต่างประเทศ)" name="Type" id="Type2" required>
			</div>
			<div class="input-group mb-1">
				<label class="form-check-label">ทักษะ:&nbsp;</label>
			</div>
			<div class="input-group mb-3">
				<input type="textarea" class="form-control" placeholder="ทักษะ (ตย.ภาษาอังกฤษ,ภาษาจีน และภาษาญี่ปุ่น)" name="Skills" id="Skills2" required>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
			<button type="submit" name="edit_3" id="submit" value="Submit" class="btn btn-primary">ยืนยัน</button>
		</div>
	</div>
</div>
</form>
</div>

<!-- Modal Delete skillsHistory -->
<div class="modal fade" id="deleteskillsModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<form enctype="multipart/form-data" action="../api/studentInfomation/del_skills.php" method="post">
<div class="modal-dialog modal-dialog-scrollable" role="document">
	<div class="modal-content" Style='background-image:url("../img/back1.jpg")'>
		<div class="modal-header">
			<h5 class="modal-title"><div id="del_msg3"></div></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="input-group mb-1">
				<label class="form-check-label">กดยืนยันเพื่อลบข้อมูล&nbsp;</label>
			</div>
			<input type="hidden" class="form-control" placeholder="รหัส" name="Id3" id="Id3" readonly>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
			<button type="submit" name="del3" id="submit" value="Submit" class="btn btn-danger">ยืนยัน</button>
		</div>
	</div>
</div>
</form>
</div>



<script type="text/javascript" src="../js/datatables.min.js"></script>
<script>
$('#editshisModel').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id')
	var lv = button.data('lv')
	var time = button.data('time')
	var sc = button.data('sc')
	var qu = button.data('qu')
  document.getElementById("IdEdit1").value = id;
	document.getElementById("sc1").value = sc;
	document.getElementById("time1").value = time;
	document.getElementById("lv1").value = lv;
	document.getElementById("qu1").value = qu;
})
$('#editthisModel').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id')
	var hd = button.data('hd')
	var time = button.data('time')
	var og = button.data('og')
  document.getElementById("IdEdit2").value = id;
	document.getElementById("Header2").value = hd;
	document.getElementById("Time2").value = time;
	document.getElementById("Organize2").value = og;
})
$('#editskillsModel').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id')
	var skill = button.data('sk')
	var type = button.data('ty')
  document.getElementById("IdEdit3").value = id;
	document.getElementById("Type2").value = type;
	document.getElementById("Skills2").value = skill;
})
$('#deleteshisModel').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('del_id')
	var SchoolName = button.data('sc')
	document.getElementById("Id1").value = id;
   $('#del_msg1').html('<label>คุณต้องการลบ ' + SchoolName +' ใช่ไหม?</label>');
})
$('#deletethisModel').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('del_id')
	var Header = button.data('hd')
	document.getElementById("Id2").value = id;
   $('#del_msg2').html('<label>คุณต้องการลบ ' + Header +' ใช่ไหม?</label>');
})
$('#deleteskillsModel').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('del_id')
	var Header = button.data('ty')
	document.getElementById("Id3").value = id;
   $('#del_msg3').html('<label>คุณต้องการลบทักษะ ' + Header +' ใช่ไหม?</label>');
})
$('#editUserModel').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
	if(button.data('usernamex')!=null){
		var username = button.data('usernamex');
		document.getElementById("username").value = username;
	}
	if(button.data('emailx')!=null){
			var email = button.data('emailx');
			document.getElementById("email").value = email;
	}
	if(button.data('fnx')!=null){
			var firstname = button.data('fnx');
			document.getElementById("firstname").value = firstname;
	}
	if(button.data('lnx')!=null){
			var lastname = button.data('lnx');
			document.getElementById("lastname").value = lastname;
	}
	if(button.data('gpaxx')!=null){
		var gpax = button.data('gpaxx');
		document.getElementById("gpax").value = gpax;
	}
	if(button.data('bdx')!=null){
		var birthday = button.data('bdx');
		document.getElementById("birthday").value = birthday;
	}
	if(button.data('religionx')!=null){
		var religion = button.data('religionx');
		document.getElementById("religion").value = religion;
	}
	if(button.data('nationx')!=null){
		var nation = button.data('nationx');
		document.getElementById("nation").value = nation;
	}
	if(button.data('telx')!=null){
		var tel = button.data('telx');
		document.getElementById("tel").value = tel;
	}
	if(button.data('prefixx')!=null){
		var prefix = button.data('prefixx');
		document.getElementById("prefix").value = prefix;
	}
	if(button.data('degree')!=null){
		var degree = button.data('degree');
		document.getElementById("degree").value = degree;
	}
})
</script>
</body>
</html>
