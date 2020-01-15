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
	      <li class="nav-item">
	        <a class="nav-link" href="userManagement.php">หน้าจัดการผู้ใช้ระบบ</a>
	      </li>
				<li class="nav-item">
				 <a class="nav-link" href="pj_history.php">ประวัติการอนุมัติโครงงาน</a>
			 </li>
       <li class="nav-item active">
        <a class="nav-link" href="feedback_topic.php">การแจ้งปัญหาและข้อเสนอแนะ</a>
      </li>
       <!-- <li class="nav-item">
        <a class="nav-link" href="projectManagement.php">หน้าจัดการโครงงาน</a>
      </li> -->

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
              <h3 class="card-title">ปัญหาหรือข้อเสนอแนะ</h3>
							<div class="dropdown-divider"></div>
							<!-- Alert -->
							<?php
							if(isset($_GET["res"]))
							{
								$get_res = $_GET["res"];
								if($get_res=='"success"'){
									echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
										<center><strong><i class="fas fa-check-circle"></i> อัพเดตสถานะสำเร็จ</strong></center>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>';
								}else{
									echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
										<center><strong><i class="fas fa-times-circle"></i> อัพเดตสถานะไม่สำเร็จ</strong></center>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>';
								}
							}
							?>
							<!-- End Alert -->
              <div class="table-responsive">
                <table class="table table-hover" id="example">
                  <thead>
                    <tr>
                      <th scope="col" align="left">Id</th>
                      <th scope="col" align="left" width="25%">หัวข้อ</th>
                      <th scope="col" align="left" width="38%">รายละเอียด</th>
                      <th scope="col" align="left" width="15%">วันที่แจ้ง</th>
                      <th scope="col" align="left" width="13%">สถานะ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include('../config/connect.php');
                    $sql = "SELECT * FROM feedback_topic" ;
                    $result = $db->query($sql);
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        if($row["fb_status"]=='กำลังตรวจสอบ'){
													echo "<tr>
	                        <td align='left'>".$row["fb_id"]."</td>
	                        <td align='left'><a href='feedback_topicByid.php?fb_id=".$row["fb_id"]."&fb_topic=".$row["fb_topic"]."'>".$row["fb_topic"]."</a></td>
	                        <td align='left'>".$row["fb_detail"]."</td>
	                        <td align='left'>".date("d-m-Y", strtotime($row["fb_createdDate"]))."</td>
													<td align='left'><button type='button' class='btn btn-warning btn-block' data-toggle='modal' data-target='#pendingModel' data-id=".$row["fb_id"]." data-name=".$row["fb_topic"].">".$row["fb_status"]."</button></td>
	                        </tr>";
                        }else if($row["fb_status"]=='ดำเนินการแล้ว'){
													echo "<tr>
	                        <td align='left'>".$row["fb_id"]."</td>
	                        <td align='left'><a href='feedback_topicByid.php?fb_id=".$row["fb_id"]."&fb_topic=".$row["fb_topic"]."'>".$row["fb_topic"]."</a></td>
	                        <td align='left'>".$row["fb_detail"]."</td>
	                        <td align='left'>".date("d-m-Y", strtotime($row["fb_createdDate"]))."</td>
													<td align='left'><button type='button' class='btn btn-success btn-block'>".$row["fb_status"]."</button></td>
	                        </tr>";
                        }else{
													echo "<tr>
													<td align='left'>".$row["fb_id"]."</td>
													<td align='left'><a href='feedback_topicByid.php?fb_id=".$row["fb_id"]."&fb_topic=".$row["fb_topic"]."'>".$row["fb_topic"]."</a></td>
													<td align='left'>".$row["fb_detail"]."</td>
													<td align='left'>".date("d-m-Y", strtotime($row["fb_createdDate"]))."</td>
													<td align='left'><button type='button' class='btn btn-info btn-block' data-toggle='modal' data-target='#pendingModel'>ไม่ทราบผล</button></td>
													</tr>";
                        }


                      }
                    } else {
                        echo '<option value="-">ไม่พบข้อมูล</option>';
                    }
                    $db->close();
                    ?>
                  </tbody>
                </table>
              </div>

            </div>
           </div>
          <br/>
        </div>
      </div>
			<!-- Modal Pending -->
			<div class="modal fade" id="pendingModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
			<form enctype="multipart/form-data" action="../api/projectManagement_admin/up_fb_topic.php" method="post">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">อัพเดตสถานะปัญหาและข้อเสนอแนะ</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="input-group mb-1">
							<label class="form-check-label"><div id="pen_msg"></div></label>
						</div>
						<div class="input-group mb-3">
								<input type="hidden" class="form-control" placeholder="หมายเลขโครงงาน" name="projectId" id="projectId" readonly>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
						<button type="submit" name="update_topic" id="submit" value="Submit" class="btn btn-primary">ยืนยัน</button>
					</div>
				</div>
			</div>
			</form>
			</div>


    </div>
  </main>
<script type="text/javascript" src="../js/datatables.min.js"></script>
<script>
$('#pendingModel').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	var name = button.data('name')
	var id = button.data('id')
	document.getElementById("projectId").value = id;
	 $('#pen_msg').html('กดยืนยันถ้าหากคุณดำเนินการแก้ไขปัญหา: <b>' + name + '</b> แล้ว !');
})
$(document).ready(function() {
    $('#example').DataTable({
        // "pageLength": 3,
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
