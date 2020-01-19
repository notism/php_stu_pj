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

	<style>
body{
	background-image:url("../img/back.gif")
}

input[type=text] {
  width: 100%;
  height:45px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #d3d3d3;
  border-radius: 4px;
  box-sizing: border-box;
}
select {
  width: 100%;
  height:45px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #d3d3d3;
  border-radius: 4px;
  box-sizing: border-box;
}
button {
  height:45px;
}

</style>
<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  if(x=="1"){
  document.getElementById("demo").innerHTML = "<select id='mySelect2' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	document.getElementById("demo").innerHTML = "<select id='mySelect2' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	document.getElementById("demo").innerHTML = "<select id='mySelect2' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	document.getElementById("demo").innerHTML = "<select id='mySelect2' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	document.getElementById("demo").innerHTML = "<select id='mySelect2' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	document.getElementById("demo").innerHTML = "<select id='mySelect2' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	document.getElementById("demo").innerHTML = "<select id='mySelect2' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
	document.getElementById("demo").innerHTML = "<select id='mySelect2' onchange='myFunction2()' name='dep'><option  disabled selected>เลือกสาขาวิชา</option><?php

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
</head>
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
					<div class="card-body"  >
					<h4 class="card-title">หน้าหลักโครงงาน</h4>
						<div class="dropdown-divider mb-3"></div>

						<div class="row">
						<div class="col">
							<div class="card mb-3 " style="box-shadow:0px 2px 4px -1px">
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
						<center>
            <form method="Post">
						<Table width=100% Style='cursor: pointer;border: solid 0px #4285f4;background-color:#dfeefd'>
						<tr><td align="center"> <br>
						<Table width="85%" >

                         <tr>
						 <td width="25%" ><select id="mySelect" onchange="myFunction()" name="fu">
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
						 <td width="25%" id="demo"> <select id="mySelect2" onchange="myFunction2()" name="dep" >
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
						 <input type="text" name="word" >
						 <td>
						 <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">ค้นหา</button>
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

		if($row["Star"]!=null){
			if($row["Star"]<=0.9 ){
				$s = '<i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
			}elseif ($row["Star"]<=1.4) {
				$s = '<i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
			}elseif ($row["Star"]<=1.9) {
				$s = '<i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
			}elseif ($row["Star"]<=2.4) {
				$s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
			}elseif ($row["Star"]<=2.9) {
				$s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
			}elseif ($row["Star"]<=3.4) {
				$s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
			}elseif ($row["Star"]<=3.9) {
				$s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>';
			}elseif ($row["Star"]<=4.4) {
				$s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>';
			}elseif ($row["Star"]<=4.9) {
				$s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>';
			}else{
				$s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
			}
		}else{
			$s = '<i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
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

<form   method="get" action="View.php" ><input type="hidden" name="Proid" value="'.$ids.'"><button type="submit" class="btn purple-gradient btn-md" data-toggle="modal" data-target="#exampleModalCenter" ><h6>รายละเอียด <i class="fas fa-chevron-circle-right"></i></h6></button></form>
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
</body>
</html>
