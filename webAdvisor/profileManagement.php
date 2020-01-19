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
	<link rel="stylesheet" href="../css/bootstrap-selecta.css">
	<script src="../js/bootstrap-select.js"></script>
</head>
<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  if(x=="1"){
  document.getElementById("demo").innerHTML = "<select class='selectpicker' name='department' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

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
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='department' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

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
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='department' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

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
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='department' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

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
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='department' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

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
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='department' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

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
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='department' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

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
	document.getElementById("demo").innerHTML = "<select class='selectpicker' name='department' id='mySelect2' data-live-search='true' title='โปรดเลือกสาขาวิชา' required><?php

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

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="index.php"><img src="../img/icon_advisor.png" class="rounded float-left" >&nbsp;ADVISOR</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item ">
	        <a class="nav-link" href="index.php">หน้าแรก<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item ">
	        <a class="nav-link" href="all_project.php">โครงงานทั้งหมด</a>
	      </li>
				<li class="nav-item">
				 <a class="nav-link" href="my_project.php">หน้าจัดการคำขอแสดงโครงงาน</a>
			 </li>
			 <li class="nav-item active">
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
              <h3 class="card-title"><i class="far fa-id-card"></i> ข้อมูลส่วนตัว</h3>
              <div class="dropdown-divider"></div>
							<?php
							if(isset($_GET["res"]))
							{
								$get_res = $_GET["res"];
								if($get_res=='"success"'){
									echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
										<center><strong><i class="fas fa-check-circle"></i> แก้ไขข้อมูลส่วนตัวสำเร็จ</strong></center>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>';
								}else{
									echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
										<center><strong><i class="fas fa-times-circle"></i> แก้ไขข้อมูลส่วนตัวไม่สำเร็จ</strong></center>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>';
								}
							}
							?>
                <?php include('../api/project_advisor/advisor_info.php'); ?>


            </div>
          </div>
          <br/>
        </div>
      </div>
  	</div>
  </main>
	<button style="position:fixed;bottom:20px;" title="ติดต่อผู้ดูแลระบบ" class=" btn btn-danger" data-toggle='modal' data-target='#feedback_model'>
		<i class="fas fa-comment-dots"></i>
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

  <!-- Modal Edit -->
  <div class="modal fade" id="editUserModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <form enctype="multipart/form-data" action="../api/project_advisor/edit_profile.php" method="post">
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
  				<label class="form-check-label">ชื่อผู้ใช้:&nbsp;</label>
  			</div>
  			<div class="input-group mb-3">
  				<input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="username" id="username2" readonly>
  			</div>
  			<div class="input-group mb-1">
  				<label class="form-check-label">อีเมล:&nbsp;</label>
  			</div>
  			<div class="input-group mb-3">
  				<input type="email" class="form-control" placeholder="อีเมล" name="email" id="email2" required>
  			</div>
        <div class="input-group mb-1">
          <label class="form-check-label">คำนำหน้า:&nbsp;</label>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="คำนำหน้า" name="prefix" id="prefix2" >
        </div>
        <div class="input-group mb-1">
          <label class="form-check-label">ชื่อ:&nbsp;</label>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="ชื่อ" name="firstname" id="firstname2" >
        </div>
        <div class="input-group mb-1">
          <label class="form-check-label">นามสกุล:&nbsp;</label>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="นามสกุล" name="lastname" id="lastname2" >
        </div>
				<div class="input-group mb-1">
					<label class="form-check-label">โทร:&nbsp;</label>
				</div>
				<div class="input-group mb-3">
					<input type="tel" class="form-control" placeholder="โทรศัพท์" name="tel" id="tel2"  pattern="[0-9]{10}">
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
          <select class="selectpicker" size="3" name="department" id="mySelect2"  title="โปรดเลือกสาขาวิชา" required>
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
  			<div class="input-group mb-1">
  				<label class="form-check-label">รหัสผ่าน:&nbsp;</label>
  			</div>
  			<div class="input-group mb-3">
  				<input type="password" class="form-control" placeholder="รหัสผ่าน" name="password" id="password2" required>
  			</div>
        <div class="input-group mb-1">
  				<label class="form-check-label">รูปโปรไฟล์:&nbsp;</label>
  			</div>
  			<div class="input-group mb-3">
  				<input type="file" class="btn btn-light btn-block" name="fileToUpload" id="fileToUpload">
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
    var fn = button.data('fn')
    var ln = button.data('ln')
    var prefix = button.data('prefix')
    var tel = button.data('tel')
    document.getElementById("username2").value = username;
  	document.getElementById("email2").value = email;
    document.getElementById("firstname2").value = fn;
    document.getElementById("lastname2").value = ln;
    document.getElementById("prefix2").value = prefix;
    document.getElementById("tel2").value = tel;
  })
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
