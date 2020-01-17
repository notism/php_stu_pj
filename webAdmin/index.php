<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
	}
	if($_SESSION['userlogin']["Role"]!='admin'){
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

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="width: 100%;">
	  <a class="navbar-brand" href="index.php"><img src="../img/icon_admin.png" class="rounded float-left" >&nbsp;ผู้ดูแลระบบ</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">แดชบอร์ด<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="userManagement.php">หน้าจัดการผู้ใช้ระบบ</a>
	      </li>
				<li class="nav-item ">
				 <a class="nav-link" href="pj_history.php">ประวัติการอนุมัติโครงงาน</a>
			 </li>
			 <li class="nav-item">
				<a class="nav-link" href="feedback_topic.php">การแจ้งปัญหาและข้อเสนอแนะ</a>
			</li>
				<!-- <li class="nav-item">
				 <a class="nav-link" href="projectManagement.php">หน้าจัดการโครงงาน</a>
			 </li> -->

	    </ul>
			<span class="navbar-text" style="font-size: 14px;color: white">
		 		สวัสดี,คุณ <?php echo $_SESSION['userlogin']["Username"] ?>&nbsp;
	 		</span>
			<span class="navbar-text" style="font-size: 14px">
				<a href="../logout.php" ><i class="fas fa-sign-out-alt" style="color:white"></i></a>
			</span>
	</nav>
	<br/>
<main>
	<div class="container">
		<div class="card">
  		<div class="card-body">
    		<h3 class="card-title">แดชบอร์ด</h3>
				<div class="dropdown-divider"></div>
				<div class="text-right">
					<button type="button" onclick='window.print()' class="btn btn-info mb-2"><i class="fas fa-print"></i> พิมพ์เอกสาร</button>
				</div>
				<div class="row">
				<div class="col">
					<div class="card mb-3 bg-light">
						<h5 class="card-header bg-dark text-white ">โครงงาน</h5>
						<div class="card-body">
							<div class="row">
								<div class="col">
									<div class="card-body">
										<strong class="card-text text-dark"><i class="fas fa-vote-yea"></i> โครงงานที่มีคะแนนโหวดสูงสุด</strong>
										<div class="text-right text-dark"><label style="font-size: 1.5em;"><?php include('../api/dashboard/most_vote_pj.php'); ?></label></div>
										<div class="text-right"><small class="text-muted"><i class="fas fa-star"></i> <?php include('../api/dashboard/most_vote_pj_num.php'); ?> คะแนน</small></div>
									</div>
									<div class="dropdown-divider"></div>
									<div class="row">
									<div class="col">
										<div class="card-body ">
										<strong class="card-text text-dark"><i class="fas fa-fire"></i> โครงงานที่มียอดเข้าชมสูงสุดในเดือนนี้</strong>
										<div class="text-right text-dark "><label  style="font-size: 1.5em;"><?php include('../api/dashboard/most_pj_thismonth.php'); ?></label></div>
										<div class="text-right"><small class="text-muted"><i class="far fa-eye"></i> <?php include('../api/dashboard/most_pj_thismonth_num.php'); ?> ครั้ง</small></div>
										</div>
									</div>
									</div>
									<div class="dropdown-divider"></div>
									<div class="row">
									<div class="col">
										<div class="card-body ">
										<strong class="card-text text-dark"><i class="fas fa-medal"></i> โครงงานที่มียอดเข้าชมสูงสุดในปี <script>document.write(new Date().getFullYear())</script></strong>
										<div class="text-right text-dark "><label  style="font-size: 1.5em;"><?php include('../api/dashboard/most_pj_thisyear.php'); ?></label></div>
										<div class="text-right"><small class="text-muted"><i class="far fa-eye"></i>  <?php include('../api/dashboard/most_pj_thisyear_num.php'); ?> ครั้ง</small></div>
										</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col">
					<div class="card mb-3  ">
						<h5 class="card-header bg-dark text-white">ผู้ใช้งานระบบ</h5>
						<div class="card-body">
							<div class="row">
							<div class="col">
								<div id="UsersChart" style="height: 100%; width: 100%;"></div>
							</div>
								<div class="col">
									<div class="card-body">
										<strong class="card-text "><i class="fas fa-users"></i> ผู้ใช้งานทั้งหมด</strong>
										<div class="text-right"><label style="font-size: 2.5em;"><?php include('../api/dashboard/count_users.php'); ?></label> คน</div>
									</div>
									<div class="dropdown-divider"></div>
									<div class="row">
									<div class="col">
										<div class="card-body ">
										<strong class="card-text text-success"><i class="fas fa-angle-double-up"></i> เพิ่มขึ้น</strong>
										<div class="text-right text-success "><label  style="font-size: 2.5em;"><?php include('../api/dashboard/count_new_user.php'); ?></label> คน</div>
										</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="card mb-3  ">
							<h5 class="card-header bg-dark text-white">สถานะโครงงาน</h5>
							<div class="card-body">
								<div class="row">
								<div class="col">
										<div id="ProjectChart" style="height: 100%; width: 100%;"></div>
								</div>
									<div class="col">
										<div class="card-body">
											<strong class="card-text "><i class="fas fa-layer-group"></i> โครงงานทั้งหมด</strong>
											<div class="text-right"><label style="font-size: 2em;"><?php include('../api/dashboard/count_project.php'); ?></label> โครงงาน</div>
										</div>
										<div class="dropdown-divider"></div>
										<div class="row">
										<div class="col">
											<div class="card-body ">
											<strong class="card-text text-success"><i class="fas fa-angle-double-up"></i> เพิ่มขึ้น</strong>
											<div class="text-right text-success "><label  style="font-size: 2em;"><?php include('../api/dashboard/count_pending_pj.php'); ?></label> โครงงาน</div>
											</div>
										</div>
										</div>
											<div class="dropdown-divider"></div>
										<div class="row">
										<div class="col">
											<div class="card-body ">
											<strong class="card-text" style='color:indigo;'><i class="fas fa-history"></i> โครงงานที่อัพโหลดล่าสุด</strong>
											<div class="text-right text-info "><label  style="font-size: 1.8em;"><?php include('../api/dashboard/last_pj.php'); ?></label></div>
											</div>
										</div>
										</div>
											<div class="dropdown-divider"></div>
										<div class="row">
										<div class="col">
											<div class="card-body ">
											<strong class="card-text text-dark"><i class="far fa-eye"></i> ยอดเข้าชทโครงงานรวม</strong>
											<div class="text-right text-dark "><label  style="font-size: 2em;"><?php include('../api/dashboard/sum_view.php'); ?></label> ครั้ง</div>
											</div>
										</div>
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
					<div class="col">
						<div class="card mb-3  ">
							<h5 class="card-header bg-dark text-white">การอัพโหลดโครงงาน</h5>
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="card-body">
											<center><strong class="card-title">จำนวนการอัพโหลดโครงงานแบ่งตามสำนักวิชา</center>
											<div id="uploadfacChart" style="height: 350px; width: 100%;"></div>
										</div>
										<div class="dropdown-divider"></div>
										<div class="row">
										<div class="col">
											<div class="card-body ">
												<center><strong class="card-title">จำนวนการอัพโหลดโครงงานในปี <script>document.write(new Date().getFullYear())</script></strong></center>
												<div id="uploadChart" style="height: 350px; width: 100%;"></div>
											</div>
										</div>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
			</div>


			<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  		</div>
		</div>
	</div>

</main><br/>
</body>

<script>
window.onload = function () {
<?php include('../api/dashboard/count_user_chart.php'); ?>
// Pie chart
var UsersChart = new CanvasJS.Chart("UsersChart", {
	animationEnabled: true,
	// title:{
	// 	fontFamily: "Prompt",
	// 	text: "จำนวนผู้ใช้งานระบบ"
	// },
	legend:{
 		fontFamily: "Prompt",
	},
	data: [{
		indexLabelFontFamily: "Prompt",
		type: "pie",
		// showInLegend: "false",
		// legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "#,##0 คน",
		dataPoints: <?php echo json_encode($dataUsers, JSON_NUMERIC_CHECK); ?>
	}]
});
UsersChart.render();
// Bar chart
<?php include('../api/dashboard/count_project_chart.php'); ?>
var ProjectChart = new CanvasJS.Chart("ProjectChart", {
	animationEnabled: true,
	legend:{
		fontFamily: "Prompt",
	},
	// title:{
	// 	text: "Revenue Chart of Acme Corporation"
	// },
	axisY:{
      labelFontFamily: "Prompt",
			labelFontSize: 16,
    },
	axisX:{
			labelFontFamily: "Prompt",
			labelFontSize: 16,
		},
	data: [{
		indexLabelFontFamily: "Prompt",
		type: "bar",
		yValueFormatString: "#,##0 โครงงาน",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",

		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataProject, JSON_NUMERIC_CHECK); ?>
	}]
});
ProjectChart.render();



<?php include('../api/dashboard/sum_upload_pj_thisyear.php'); ?>
var uploadChart = new CanvasJS.Chart("uploadChart", {
	legend:{
		fontFamily: "Prompt",
	},
	axisY:{
      labelFontFamily: "Prompt",
			labelFontSize: 14,
			title: "จำนวนโครงงาน"
    },
	axisX:{
			labelFontFamily: "Prompt",
			labelFontSize: 14,
		},
	data: [{
		indexLabelFontFamily: "Prompt",
		type: "line",
		dataPoints: <?php echo json_encode($dataUpload, JSON_NUMERIC_CHECK); ?>
	}]
});
uploadChart.render();

<?php include('../api/dashboard/count_pj_fac_chart.php'); ?>
var uploadfacChart = new CanvasJS.Chart("uploadfacChart", {
	legend:{
		fontFamily: "Prompt",
	},
	axisY:{
      labelFontFamily: "Prompt",
			labelFontSize: 14,
			title: "จำนวนโครงงาน"
    },
	axisX:{
			labelFontFamily: "Prompt",
			labelFontSize: 14,
		},
	data: [{
		indexLabelFontFamily: "Prompt",
		type: "column",
		dataPoints: <?php echo json_encode($dataUploadfac, JSON_NUMERIC_CHECK); ?>
	}]
});
uploadfacChart.render();

}
</script>


</html>
