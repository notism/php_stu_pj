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

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="index.php">WEB-ADMIN</a>
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
				<li class="nav-item">
				 	<a class="nav-link" href="feedbackManagement.php">หน้าจัดการข้อเสนอแนะและปัญหา</a>
			 </li>
	    </ul>
			<span class="navbar-text" style="font-size: 14px">
		 		สวัสดี,คุณ <?php echo $_SESSION['userlogin']["Username"] ?>&nbsp;
	 		</span>
			<li class="nav-item">
				<a href="../logout.php" ><i class="fas fa-sign-out-alt" style="color:white"></i></a>
			</li>
	  </div>
	</nav>
	<br/>
<main>
	<div class="container-xl">
		<div class="card" style="width: 100%;">
  		<div class="card-body">
    		<h3 class="card-title">แดชบอร์ด</h3>
				<div class="dropdown-divider"></div><br/>
				<div class="row">
  				<div class="col-sm">
    				<div class="card text-center text-white bg-primary  mb-3">
      				<div class="card-body">
        			<h6 class="card-title">จำนวนผู้ใช้ระบบทั้งหมด</h6>
							<div class="dropdown-divider"></div>
        			<h1 class="card-text">100</h1>
      				</div>
    				</div>
  				</div>
					<div class="col-sm">
    				<div class="card text-center text-white bg-success mb-3">
      				<div class="card-body">
        			<h6 class="card-title">จำนวนโครงงานทั้งหมด</h6>
							<div class="dropdown-divider"></div>
        			<h1 class="card-text">50</h1>
      				</div>
    				</div>
  				</div>
					<div class="col-sm">
    				<div class="card text-center text-white bg-danger mb-3">
      				<div class="card-body">
        			<h6 class="card-title">จำนวนคำร้องขอแสดงโครงงาน</h6>
							<div class="dropdown-divider"></div>
        			<h1 class="card-text">30</h1>
      				</div>
    				</div>
  				</div>
  				<div class="col-sm">
    				<div class="card text-center text-white bg-info mb-3">
      				<div class="card-body">
        			<h6 class="card-title">จำนวนผู้เข้าดูโครงงาน</h6>
							<div class="dropdown-divider"></div>
        			<h1 class="card-text">20</h1>
      				</div>
    			</div>
  			</div>
			</div>
			<div class="dropdown-divider"></div>
			<div class="row">
    		<div class="col">
					<div class="card text-center mb-3">
						<div class="card-body">
						<h6 class="card-title">กราฟแสดงจำนวนผู้ใช้งานระบบ</h6>
						<div class="dropdown-divider"></div>
							<div id="UsersChart" style="height: 250px; width: 100%;"></div>
						</div>
					</div>
    		</div>
    		<div class="col">
					<div class="card text-center mb-3">
						<div class="card-body">
						<h6 class="card-title">กราฟแสดงสถานะโครงงาน</h6>
						<div class="dropdown-divider"></div>
							<div id="ProjectChart" style="height: 250px; width: 100%;"></div>
						</div>
					</div>
    		</div>
  		</div>
			<div class="row">
				<div class="col">
					<div class="card text-center mb-3">
						<div class="card-body">
						<h6 class="card-title">ยอดการเข้าชมโครงงาน (แบ่งตามประเภทโครงงาน)</h6>
						<div class="dropdown-divider"></div>
							<div id="AmountWatch" style="height: 350px; width: 100%;"></div>
						</div>
					</div>
				</div>
			</div>




			<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  		</div>
		</div>
	</div>
</main>
</body>

<script>
window.onload = function () {
<?php
		$dataUsers = array(
			array("label"=> "ผู้ดูแลระบบ", "y"=> 10),
			array("label"=> "นักศึกษา", "y"=> 50),
			array("label"=> "อาจารย์", "y"=> 10),
	);
?>
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
<?php
		$dataProject = array(
			array("label"=> "รอการดำเนินการ", "y"=> 12),
			array("label"=> "ยังไม่ได้อนุมัติ", "y"=> 25),
			array("label"=> "อนุมัติแล้ว", "y"=> 10),
	);
?>
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

<?php

$dataPoints = array(
	array("label"=> "การศึกษา", "y"=> 12),
	array("label"=> "โครงงานประยกต์", "y"=> 25),
	array("label"=> "ธุรกิจ", "y"=> 10),
	array("label"=> "อื่นๆ", "y"=> 25)
);

?>
var AmountWatch = new CanvasJS.Chart("AmountWatch", {
	animationEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	// title:{
	// 	text: "Simple Column Chart with Index Labels"
	// },
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
AmountWatch.render();

}
</script>


</html>
