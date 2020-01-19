<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
	}
	if($_SESSION['userlogin']["Role"]!='admin'){
		header("Location: ../login.php");
	}
  if(isset($_GET["Proid"]))
  {
    $proid = $_GET["Proid"];
  }else{
    header("Location: index.php");
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
  <?php
  include('../config/connect.php');
	$URL = $proid;
	include('../config/qrcode.php');
  $advisor=$_SESSION['userlogin']['Id'];
  $sql = "SELECT * FROM projectInfo JOIN users WHERE Advisor=users.Id AND projectInfo.Id='$proid'" ;
  $result = $db->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $File = $row["File"];
      $ProjectName = $row["ProjectName"];
      $Description = $row["Description"];
      $P1 = $row["P1"];
      $P2 = $row["P2"];
      $P3 = $row["P3"];
      $P4 = $row["P4"];
      $P5 = $row["P5"];
      if($row["Picture"]!=null){
        $Picture = $row["Picture"];
      }else{
        $Picture = 'Project.jpg';
      }
			if($row["Star"]!=null){
				if($row["Star"]<=0.9 ){
					$star = '<i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
				}elseif ($row["Star"]<=1.4) {
					$star = '<i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
				}elseif ($row["Star"]<=1.9) {
					$star = '<i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
				}elseif ($row["Star"]<=2.4) {
					$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
				}elseif ($row["Star"]<=2.9) {
					$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
				}elseif ($row["Star"]<=3.4) {
					$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
				}elseif ($row["Star"]<=3.9) {
					$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>';
				}elseif ($row["Star"]<=4.4) {
					$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>';
				}elseif ($row["Star"]<=4.9) {
					$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>';
				}else{
					$star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
				}
			}else{
				$star = '<i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
			}
      $Award = $row["Award"];

      $View = $row["View"];
      $advisor = $row['Prefix']." ".$row['Firstname']." ".$row['Lastname'];
    }
  }
  $db->close();
  ?>

	<main>
    <div class="container-xl">
          <div class="card"  style="width: 100%;">
            <div class="card-body">
              <h3 class="card-title">รายละเอียด</h3>
              <div class="dropdown-divider"></div>
              <div class="text-right">
                <button type="button" onclick='window.print()' class="btn btn-info mb-2"><i class="fas fa-print"></i> พิมพ์เอกสาร</button>
              </div>
              <div class="row">
              <div class="col">
                <div class="card mb-3  ">
                  <h5 class="card-header bg-dark text-white"><?php echo $ProjectName; ?> <?php echo $star; ?></h5>
                  <div class="card-body">
                    <div class="row">
                    <div class="col">
                      <div class="text-left"><label style="font-size: 1em;"><i class="fas fa-eye"></i> เข้าชมทั้งหมด <?php echo $View; ?> ครั้ง</label></div>
                      <img src="../img/<?php echo $Picture; ?>" class="img-thumbnail" >
                    </div>
                      <div class="col">
                        <div class="card-body">
                          <strong class="card-text ">คำอธิบาย</strong>
                          <div class="text-left"><label style="font-size: 1em;"><?php echo $Description; ?></label></div>
                          <strong class="card-text ">รางวัลที่เคยได้รับ</strong>
                          <?php
                          if($Award!=null){
                            echo '<div class="text-left"><label style="font-size: 1em;">'.$Award.'</label></div>';
                          }else{
                            echo '<div class="text-left"><label style="font-size: 1em;">-</label></div>';
                          }
                           ?>
                        </div>
                        <!-- <div class="row">
                        <div class="col">
                          <div class="card-body ">
                          <strong class="card-text">อาจารย์ที่ปรึกษาโครงงาน</strong>
                          <div class="text-left"><label style="font-size: 1em;">- <?php //echo $advisor; ?></label></div>
                          </div>
                        </div>
                        </div> -->
                        <div class="row">
                        <div class="col">
                          <div class="card-body ">
                          <strong class="card-text">ผู้จัดทำโครงงาน</strong>
                          <?php
                            if($P1!=null){
                              include('../config/connect.php');
                              $sql = "SELECT * FROM projectInfo JOIN users JOIN profile WHERE users.Username=profile.CreatedBy AND users.Id='$P1' AND projectInfo.Id='$proid'" ;
                              $result = $db->query($sql);
                              if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                  if($row["Tel"]!=null){
                                    $tel = $row["Tel"];
                                  }else{
                                    $tel = '-';
                                  }
                                  echo '<div class="text-left"><label style="font-size: 1em;">- '.$row["Prefix"].' '.$row["Firstname"].' '.$row["Lastname"].'</label>
                                   <small class="text-muted">| โทร. '.$tel.' | Email: '.$row["Email"].'</small>';
                                }
                              }
                              $db->close();
                            }
                            if($P2!=null){
                              include('../config/connect.php');
                              $sql = "SELECT * FROM projectInfo JOIN users JOIN profile WHERE users.Username=profile.CreatedBy AND  users.Id='$P2' AND projectInfo.Id='$proid'" ;
                              $result = $db->query($sql);
                              if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                  if($row["Tel"]!=null){
                                    $tel = $row["Tel"];
                                  }else{
                                    $tel = '-';
                                  }
                                  echo '<div class="text-left"><label style="font-size: 1em;">- '.$row["Prefix"].' '.$row["Firstname"].' '.$row["Lastname"].'</label>
                                   <small class="text-muted">| โทร. '.$tel.' | Email: '.$row["Email"].'</small>';
                                }
                              }
                              $db->close();
                            }
                            if($P3!=null){
                              include('../config/connect.php');
                              $sql = "SELECT * FROM projectInfo JOIN users JOIN profile WHERE users.Username=profile.CreatedBy AND  users.Id='$P3' AND projectInfo.Id='$proid'" ;
                              $result = $db->query($sql);
                              if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                  if($row["Tel"]!=null){
                                    $tel = $row["Tel"];
                                  }else{
                                    $tel = '-';
                                  }
                                  echo '<div class="text-left"><label style="font-size: 1em;">- '.$row["Prefix"].' '.$row["Firstname"].' '.$row["Lastname"].'</label>
                                   <small class="text-muted">| โทร. '.$tel.' | Email: '.$row["Email"].'</small>';
                                }
                              }
                              $db->close();
                            }
                            if($P4!=null){
                              include('../config/connect.php');
                              $sql = "SELECT * FROM projectInfo JOIN users JOIN profile WHERE users.Username=profile.CreatedBy AND  users.Id='$P4' AND projectInfo.Id='$proid'" ;
                              $result = $db->query($sql);
                              if ($result->num_rows > 0) {
                                while($row = $result->P5fetch_assoc()) {
                                  if($row["Tel"]!=null){
                                    $tel = $row["Tel"];
                                  }else{
                                    $tel = '-';
                                  }
                                  echo '<div class="text-left"><label style="font-size: 1em;">- '.$row["Prefix"].' '.$row["Firstname"].' '.$row["Lastname"].'</label>
                                   <small class="text-muted">| โทร. '.$tel.' | Email: '.$row["Email"].'</small>';
                                }
                              }
                              $db->close();
                            }
                            if($P5!=null){
                              include('../config/connect.php');
                              $sql = "SELECT * FROM projectInfo JOIN users JOIN profile WHERE users.Username=profile.CreatedBy AND  users.Id='$P5' AND projectInfo.Id='$proid'" ;
                              $result = $db->query($sql);
                              if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                  if($row["Tel"]!=null){
                                    $tel = $row["Tel"];
                                  }else{
                                    $tel = '-';
                                  }
                                  echo '<div class="text-left"><label style="font-size: 1em;">- '.$row["Prefix"].' '.$row["Firstname"].' '.$row["Lastname"].'</label>
                                   <small class="text-muted">| โทร. '.$tel.' | Email: '.$row["Email"].'</small>';
                                }
                              }
                              $db->close();
                            }
                           ?>
                           <br/>   <br/>
                           <Table width="100%">
                           <tr>
                           <td width="50%">
                           <center>
														 <button type="button" class="btn btn-info" onclick="window.open('../file/<?php echo $File; ?>')"><i class="fas fa-file-pdf fa-lg "></i> เปิดเอกสาร</button>
                           </center>
												 	 </td>
													 <td width="50%">
                           <?php
                           if ($File!=null) {
                             echo "<center><a href='../api/project_advisor/pdf_download.php?file=".$File."'><button type='submit' class='btn btn-warning'><i class='fas fa-download fa-lg '></i> Download</button></a>";
                           }
                           ?>
                           </center>
                           </td>
                           </tr>
                           </table>
													 <br/>

														<center>
														 <p style="cursor: pointer;border: solid 0px #212121;width:30%"><?php echo $QRcode_admin; ?></p>
														</center>


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
          </div>
        <br/>
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
