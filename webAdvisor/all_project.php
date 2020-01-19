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
	<link rel="stylesheet" type="text/css" href="../css/Colum.css"/>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/datatables.css"/>

</head>
<style>
body{
	background: #E6E6FA !important;
}
</style>
<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  if(x=="1"){
  document.getElementById("demo").innerHTML = "<select id='mySelect2' class='form-control' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	echo "0 results";
}
$db->close();
?></select>";
  }else if(x==2){
	document.getElementById("demo").innerHTML = "<select id='mySelect2' class='form-control' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	echo "0 results";
}
$db->close();
?></select>";
 }else if(x==3){
	document.getElementById("demo").innerHTML = "<select id='mySelect2' class='form-control' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	echo "0 results";
}
$db->close();
?></select>";
 }else if(x==4){
	document.getElementById("demo").innerHTML = "<select id='mySelect2' class='form-control' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	echo "0 results";
}
$db->close();
?></select>";
 }else if(x==5){
	document.getElementById("demo").innerHTML = "<select id='mySelect2' class='form-control' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	echo "0 results";
}
$db->close();
?></select>";
 }else if(x==6){
	document.getElementById("demo").innerHTML = "<select id='mySelect2' class='form-control' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	echo "0 results";
}
$db->close();
?></select>";
 }else if(x==7){
	document.getElementById("demo").innerHTML = "<select id='mySelect2' class='form-control' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	echo "0 results";
}
$db->close();
?></select>";
 }else if(x==8){
	document.getElementById("demo").innerHTML = "<select id='mySelect2' class='form-control' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	echo "0 results";
}
$db->close();
?></select>";
 }

}
</script>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#56187f;">
	  <a class="navbar-brand" href="index.php"><img src="../img/icon_advisor.png" class="rounded float-left" >&nbsp;ADVISOR</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item ">
	        <a class="nav-link" href="index.php">หน้าแรก</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="all_project.php">โครงงานทั้งหมด</a>
	      </li>
				<li class="nav-item">
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
	<main>
		<div class="container">
			<div class="row">
			  <div class="col-sm-12">
	        <!-- start card -->
					<div class="card"  style="width: 100%;">
						<div class="card-body"  >
						<h4 class="card-title">หน้าหลักโครงงาน</h4>
							<div class="dropdown-divider"></div>
							<center>
	            <form method="Post">
							<Table width=100% Style='cursor: pointer;border: solid 0px #4285f4;background-color:#dfeefd'>
							<tr><td align="center"> <br>
							<Table width="85%" >

	                         <tr>
							 <td width="25%" ><select id="mySelect" class="form-control" onchange="myFunction()" name="fu">
							<option value="" disabled selected>เลือกสำนักวิชา</option>
							<?php

							include('../config/connect.php');

							$sql = "SELECT * FROM `fuaculty` WHERE 1";
							$result = $db->query($sql);
							$i = 1;
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "

									<option value=".$row["fac_id"].">".$row["fac_name"]."</option>

									";$i++;
								}
							} else {
								echo "<option>ไม่พบข้อมูล</option>";
							}
							$db->close();
							?>


							</select>
							 </td>
							 <td width="25%" id="demo"> <select id="mySelect2" class="form-control" onchange="myFunction2()" name="dep" >
							<option value="" disabled selected>เลือกสาขาวิชา</option>

							<?php

							include('../config/connect.php');

							$sql = "SELECT * FROM `department` WHERE 1";
							$result = $db->query($sql);
							$i = 1;
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "

									<option value=".$row["dep_id"].">".$row["dep_name"]."</option>

									";$i++;
								}
							} else {
								echo "<option>ไม่พบข้อมูล</option>";
							}
							$db->close();
							?>


							</select>
							 </td>
							 <td width="55%">
							 <input type="text" class="form-control" name="word" >
							 <td>
							 <button type="submit" name="submit" id="submit" value="Submit" style="background:#56187F !important;" class="btn btn-dark">ค้นหา</button>
		                     </td>

							</Table>
							<br>
							</td></tr></Table>



							 </form>
	                        </center>
							<br>
							<div class="row">
							<?php
	error_reporting(~E_NOTICE);
	include('../config/connect.php');


	if(!isset($_POST['fu'])){
	    $fu = "";
	}else{
		$fu = "and fu = '".$_POST['fu']."' ";
	}
	if(!isset($_POST['dep'])){
	    $de = "";
	}else{
		$de = "and de = '".$_POST['dep']."' ";
	}
	if(!isset($_POST['word'])){
	    $word = "";
	}else{
		$word = "and ( ProjectName like '%".$_POST['word']."%' or Description like '%".$_POST['word']."%' )";
	}


	if($word!=""){
	$sql = "SELECT * FROM projectinfo where Status = 'อนุมัติแล้ว' ".$de.$fu.$word;
	}else{
	$sql = "SELECT * FROM projectinfo where Status = 'อนุมัติแล้ว'".$de.$fu;
	}
	$result = $db->query($sql);



	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {

	      $lcolor = "#56187f";
	      $bcolor = "#ffffff00";

	      $Str = $row["Description"];
	      if(strlen($row["Description"])>=500){
			$a = substr($Str,454,499);
			$pos= strpos($a,"า");
			$pos=$pos+454;
			$Str =  substr($Str,0,$pos)."...อ่านต่อ";
	      }

	      if($row["Picture"]!=""){
	        $Pic = "<img class='img-fluid'  src='../img/".$row['Picture']."'  style='width:600px;height:300px'";
	      }else{
	        $Pic = "<img class='img-fluid'  src='http://placehold.it/600x300' style='width:600px;height:300px'>";
		  }
	      $n = $row["ProjectName"];
		  $dat = date("d-m-Y", strtotime($row["CreatedDate"]));
		  $T = $row["Type"];
		  $ids = $row["Id"];
		  $fu = $row["fu"];
		  $dep = $row["de"];

	      $sqlfu = "SELECT * FROM  fuaculty WHERE fac_id = '$fu'";
			$resultfu = $db->query($sqlfu);
			while($rowfu = $resultfu->fetch_assoc()){

			$fux = $rowfu["fac_name"];
			}
			$sqlx = "SELECT * FROM department WHERE dep_id = '$dep'";
			$resultx = $db->query($sqlx);
			while($rowx = $resultx->fetch_assoc()){

		   $dex = $rowx["dep_name"];
			}

		  $stars=$row['Star'];

		  if($stars<=" "||$stars<="0"){

		  $s='<i class="far fa-star fa-lg" ></i>
			<i class="far fa-star fa-lg"></i>
			<i class="far fa-star fa-lg"></i>
			<i class="far fa-star fa-lg"></i>
			<i class="far fa-star fa-lg"></i>';
		    }elseif($stars<="0.9"){
		 $s='<i class="fas fa-star-half-alt fa-lg"  id="star1" ></i>
			<i class="far fa-star fa-lg"></i>
			<i class="far fa-star fa-lg"></i>
			<i class="far fa-star fa-lg"></i>
		    <i class="far fa-star fa-lg"></i>';
		   }elseif($stars<="1"){
			$s='<i class="fas fa-star fa-lg"  id="star1" ></i>
			   <i class="fas fa-star-half-alt fa-lg"></i>
			   <i class="far fa-star fa-lg"></i>
			   <i class="far fa-star fa-lg"></i>
			   <i class="far fa-star fa-lg"></i>';
			  }
		   elseif($stars<="1.5"){
		 $s='<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star-half-alt fa-lg"  id="star1" ></i>
			<i class="far fa-star fa-lg"></i>
			<i class="far fa-star fa-lg"></i>
			<i class="far fa-star fa-lg"></i>';
		   }elseif($stars<="2"){
			$s='<i class="fas fa-star fa-lg"  id="star1" ></i>
				<i class="fas fa-star fa-lg"  id="star1" ></i>
				<i class="far fa-star fa-lg"  id="star1" ></i>
				<i class="far fa-star fa-lg"></i>
				<i class="far fa-star fa-lg"></i>';
				}elseif($stars<="2.5"){
		$s='<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star-half-alt fa-lg"  id="star1" ></i>
			<i class="far fa-star fa-lg"></i>
			<i class="far fa-star fa-lg"></i>';
			}elseif($stars<="3"){
				$s='<i class="fas fa-star fa-lg"  id="star1" ></i>
				<i class="fas fa-star fa-lg"  id="star1" ></i>
				<i class="fas fa-star fa-lg"  id="star1" ></i>
				<i class="far fa-star fa-lg"  id="star1" ></i>
				<i class="far fa-star fa-lg" ></i>';
				}elseif($stars<="3.5"){
			$s='<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star-half-alt fa-lg"  id="star1" ></i>
			<i class="far fa-star fa-lg" ></i>';
			}elseif($stars <="4"){
				$s=	'<i class="fas fa-star fa-lg"  id="star1" ></i>
					<i class="fas fa-star fa-lg"  id="star1" ></i>
					<i class="fas fa-star fa-lg"  id="star1" ></i>
					<i class="fas fa-star fa-lg"  id="star1" ></i>
					<i class="far fa-star fa-lg"  id="star1" ></i>';
					}elseif($stars <="4.5"){
		$s=	'<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star-half-alt fa-lg"  id="star1" ></i>';
			}else{
		$s='<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star fa-lg"  id="star1" ></i>
			<i class="fas fa-star fa-lg"  id="star1" ></i>';
		  }
	        echo '
			<div class="col-lg-6 col-md-12">

	<!--Image-->
	<table width="100%"><tr><td><span>จำนวนคนดู '.$row["View"].' ครั้ง <i class="fas fa-eye "></i> </span> </td></td><td align="right"> <font color="#ffc107">'.$s.' ('.substr($stars,0,3).' คะแนน)</font></td></tr></Table>
	<div class="view overlay rounded z-depth-1-half mb-3">
		'.$Pic.'
		<a>
			<div class="mask rgba-white-slight"></div>
		</a>
	</div>

	<!--Excerpt-->
	<div class="news-data">
	<table style="width:100%" class="mb-2">
		<tr>
			<th style="color:#56187F !important;"><i class="fas fa-cube fa-lg"></i> '.$T.'</th>
			<th class="text-right"><small class="text-muted"><i class="fa fa-clock-o"></i>อัพโหลดเมื่อวันที่ '.$dat.'</small></th>
		</tr>
		</table>
	</div>
	<h3>
		<a>
			<strong>'.$n.'</strong>
		</a>
	</h3>
	<p>สำนักวิชา : '.$fux.' สาขาวิชา : '.$dex.'</p>
	<p> '.$Str.'
	</p>

	<form   method="get" action="View.php" ><input type="hidden" name="Proid" value="'.$ids.'"><button type="submit" style="background:#56187F !important;" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter" >รายละเอียด <i class="fas fa-chevron-circle-right"></i></button></form>
	<!--/Featured news-->

	<hr></div>';
	}
	} else {
	    echo "<table width='100%'><tr><td align='center'>ไม่พบข้อมูล</td></tr></table><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
	}
	$db->close();
	?>




	</div>










						</div>
					</div>
	        <!-- end card -->
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
  <script type="text/javascript" src="../js/datatables.min.js"></script>
  <script>
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
