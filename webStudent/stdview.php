<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
        header("Location: ../login.php");
       
	}
	
    if($_GET["mem"]==""){
		header("Location: ../webStudent/index.php");
	}
	$_SESSION['mem']= $_GET["mem"];
	if($_SESSION['mem']==$_SESSION['userlogin']["Id"]){
        header("Location: ../webStudent/stdInfo.php");
       
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
</head>
<style>
body{
	background-image:url("../img/back.gif")
}

</style>
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
	<li class="nav-item active">
	  <a class="nav-link" href="index.php"><i class="fas fa-home "></i> หน้าแรก
	  </a>
	</li>
	<li class="nav-item">
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
            <?php include('../api/studentInfomation/stdInfo_view.php'); ?>
						<div class='dropdown-divider'></div>
						<div class='text-right '>

						</div>
						<div class="table-responsive mt-2" >
							<table class="table table-hover" id="example" > 
								<thead>
									<tr style="background-color:#56187f;color:white">
										<th scope="col" align="left" width="20%" >ระดับการศึกษา</th>
										<th scope="col" align="left" width="20%">ชื่อสถานศึกษา</th>
										<th scope="col" align="left" width="20%">วุฒิที่ได้รับ</th>
										<th scope="col" align="left" width="20%">ช่วงเวลาที่ศึกษา</th>
									</tr>
								</thead>
								<tbody>
								<?php include('../api/studentInfomation/stdInfo_std_his_view.php'); ?>
								</tbody>
							</table>
						</div>
						<div class='dropdown-divider' ></div>
						<div class='text-right '>
						</div>
						<div class="table-responsive mt-2" >
							<table class="table table-hover" id="example">
								<thead>
									<tr style="background-color:#56187f;color:white">
										<th scope="col" align="left" width="20%">หัวข้อ</th>
										<th scope="col" align="left" width="20%">หน่วยงานที่ให้บริการ</th>
										<th scope="col" align="left" width="20%">ช่วงเวลาที่เข้าอบรม</th>
                                        <th scope="col" align="left" width="20%"></th>
									</tr>
								</thead>
								<tbody>
								<?php include('../api/studentInfomation/stdInfo_tain_his_view.php'); ?>
								</tbody>
							</table>
						</div>
						<div class='dropdown-divider'></div>
						<div class='text-right '>
							
						</div>
						<div class="table-responsive mt-2" >
						<table class="table table-hover" id="example">
								<thead>
									<tr style="background-color:#56187f;color:white">
										<th scope="col" align="left" width="20%">ประเภท</th>
										<th scope="col" align="left" width="20%">ทักษะ</th>
										<th scope="col" align="left" width="20%"></th>
										<th scope="col" align="left" width="20%"></th>
									</tr>
								</thead>
								<tbody>
								<?php include('../api/studentInfomation/std_skill_view.php'); ?>
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
								<?php include('../api/studentInfomation/std_project_view.php'); ?>
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
  var username = button.data('username')
	var email = button.data('email')
	var firstname = button.data('fn')
	var lastname = button.data('ln')
	var gpax = button.data('gpax')
	var birthday = button.data('bd')
	var religion = button.data('religion')
	var nation = button.data('nation')
	var tel = button.data('tel')
	var prefix = button.data('prefix')
	document.getElementById("prefix").value = prefix;
	document.getElementById("email").value = email;
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
