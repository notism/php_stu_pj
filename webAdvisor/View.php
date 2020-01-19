<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
	}
	if($_SESSION['userlogin']["Role"]!='advisor'){
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

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
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
 			 <li class="nav-item ">
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
                        <div class="row">
                        <div class="col">
                          <div class="card-body ">
                          <strong class="card-text">อาจารย์ที่ปรึกษาโครงงาน</strong>
                          <div class="text-left"><label style="font-size: 1em;">- <?php echo $advisor; ?></label></div>
                          </div>
                        </div>
                        </div>
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
                           <td>
                           <center><button type="button" class="btn btn-info" onclick="window.open('../file/<?php echo $File; ?>')"><i class="fas fa-file-pdf fa-lg "></i> เปิดเอกสาร</button>
                           </center></td><td>
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
														 <p style="cursor: pointer;border: solid 0px #212121;width:30%"><?php echo $QRcode_advi; ?></p>
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

<script type="text/javascript" src="../js/datatables.min.js"></script>
<script>
$(document).ready(function() {
	$('#example').DataTable({
			"pageLength": 3,
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
			"dom": 'frtp'
	} );
	$('#example2').DataTable({
			"ordering": false,
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
			"dom": 'frt'
	} );
} );
</script>
</body>
</html>
