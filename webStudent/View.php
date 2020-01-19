<?php
  session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
    }
    $D = $_SESSION['userlogin']["Id"];



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

.img-checker {
cursor: pointer;
border: solid 0px;
background-color:#dfeefd;
color:#ffc107;
}
</style>


<script>
function myHide()
{
	document.getElementById('hidepage').style.display='block';//content ที่ต้องการแสดงหลังจากเพจโหลดเสร็จ
	document.getElementById('hidepage2').style.display='none';//content ที่ต้องการแสดงระหว่างโหลดเพจ
}

</script>

<?php
error_reporting(~E_NOTICE);
$proid = $_GET["Proid"];
 include('../config/connect.php');
 $sql = "SELECT * FROM `projectinfo` WHERE id = '$proid' and Status = 'อนุมัติแล้ว'";
 $result = $db->query($sql);
 $rowcount=mysqli_num_rows($result);
 if ($rowcount < 1) {
    echo "<script>window.location.href = 'index.php';</script>";

} else {

    while($row = $result->fetch_assoc()) {
    $N = $row["ProjectName"];
    $URL = $row["Id"];
    $Pic = $row["Picture"];
    $Des = $row["Description"];
    $Type = $row["Type"];
    $File = $row["File"];
    $View = $row["View"];
    $Num = 1+$View;
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


    if($row["P1"]==""){
        $P1 = "0";
    }else{
        $P1 = $row["P1"];
    }

    if($row["P2"]==""){
        $P2 = "0";
    }else{
        $P2 = $row["P2"];
    }

    if($row["P3"]==""){
        $P3 = "0";
    }else{
        $P3 = $row["P3"];
    }

    if($row["P4"]==""){
        $P4 = "0";
    }else{
        $P4 = $row["P4"];
    }

    if($row["P5"]==""){
        $P5 = "0";
    }else{
        $P5 = $row["P5"];
    }

    if($row["Star"]==""||$row["Star"]=="0"){
      $stars = "0";
    }else{
      $stars = $row["Star"];
    }


    $Ad = $row["Advisor"];


    }

    if($_GET["Proid"]!=""){
   $sql = "UPDATE projectinfo SET View ='".$Num."' WHERE Id = '".$URL."'";
                if ($db->query($sql) === TRUE) {
    }
}


 include('../config/qrcode.php');
?>


</head>
<body onload="myHide();">

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
<main  >
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">
        <!-- start card -->





						<!-- Alert -->
						<div class="hide" id="add_alert" role="alert" >
							<div id="messages_content" ></div>
						</div>
					<!-- End Alert -->


<?php $space = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ?>

<div class="container my-5 z-depth-1" Style='cursor: pointer;border-left: solid 0px #4285f4;background-color:#ffffff'>


<!--Section: Content-->
<section class="dark-grey-text"  >

  <div class="row pr-lg-5">

    <div class="col-md-7 mb-4">

      <div class="view"><span><br>&nbsp;&nbsp;&nbsp;จำนวนคนดู <?php echo $View+1; ?> ครั้ง <i class='fas fa-eye '></i>
 <font color="#ffc107"><br><br>
 &nbsp;
<?php
if($stars!=null){
  if($stars<=0.9 ){
    $s = '<i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
  }elseif ($stars<=1.4) {
    $s = '<i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
  }elseif ($stars<=1.9) {
    $s = '<i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
  }elseif ($stars<=2.4) {
    $s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
  }elseif ($stars<=2.9) {
    $s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
  }elseif ($stars<=3.4) {
    $s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
  }elseif ($stars<=3.9) {
    $s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>';
  }elseif ($stars<=4.4) {
    $s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>';
  }elseif ($stars<=4.9) {
    $s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>';
  }else{
    $s = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
  }
}else{
  $s = '<i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
}  echo $s." (".substr($stars,0,3)." คะแนน)"; ?>
</font>
        <!-- Hoverable -->

<br><br><br><br>
<img src="../img/<?php echo $Pic; ?>" class="img-fluid  hoverable" ><br><br><br><br>
      </div>

    </div>
    <div class="col-md-5 d-flex align-items-center" Style='cursor: pointer;border-Top: solid 5px #4285f4;background-color:#dfeefd'>
      <div >
      <br><br>
        <h3 class="font-weight-bold mb-4" align="center"><?php echo $N; ?></h3>

          <p><B>สำนักวิชา</B> <br>
          <?php echo $space.$fux."<br>"; ?>
          <p><B>สาขาวิชา</B> <br>
          <?php echo $space.$dex."<br>"; ?>
          <p><B>รายละเอียด</B> <br>
      <Table width="100%"><tr><td width="90%"><?php echo $space.$Des."<br>"; ?></td></tr></Table><br>
          <B>ประเภท</B><br>
          <?php echo $space.$Type."<br>"; ?><br>
          <B>อาจารย์ที่ปรึกษา</B><br>
          <?php
 include('../config/connect.php');
 $sql1 = "SELECT * FROM `users` WHERE id = '$Ad'";
 $result1 = $db->query($sql1);
 while($row1 = $result1->fetch_assoc()){

$Adv = $row1["Prefix"]." ".$row1["Firstname"]." ".$row1["Lastname"];
 }
 echo $space.$Adv;
 ?><br>
          <br>
          <B>สมาชิกในกลุ่ม</B><Br>
  <?php
 include('../config/connect.php');
 $sql1 = "SELECT * FROM `users` WHERE id in ('$P1','$P2','$P3','$P4','$P5')";
 $result1 = $db->query($sql1);
 while($row1 = $result1->fetch_assoc()){

echo "<form action='stdview.php' method='get'><input type='hidden' name='mem' value='".$row1["Id"]."'>".$space."<button type='submit' Style='background-color:#dfeefd;border: 0px solid #d3d3d3;'><font color='red'><u>".$row1["Prefix"]." ".$row1["Firstname"]." ".$row1["Lastname"]."</u></font></button></form><Br>";
 }

 ?>
<br>
<center><p style="cursor: pointer;border: solid 0px #212121;width:30%"><?php echo $QRcode; ?></p></center>

<br>
<center>
<Table width="80%">
<tr>
<td>
<center><button type="button" class="btn btn-elegant btn-rounded mx-0 " onclick="window.open('../file/<?php echo $File; ?>')"><i class="fas fa-file-pdf fa-lg "></i> เปิดเอกสาร</button>
</center></td><td>
<center><form action="pdf.php" method="post"><input type="hidden" name="PDF" value="<?php echo $File; ?>"><button type="submit" class="btn btn-unique btn-rounded mx-0 "><i class="fas fa-download fa-lg "></i> ดาวน์โหลด</button></form>
</center>
</td>
</tr>
</table>
</center>

<center><br>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$stid = $proid.$D;
include('../config/connect.php');
$sql0 = "SELECT * FROM `project_star` WHERE stid = '$stid'";
$result0 = $db->query($sql0);
while($row0 = $result0->fetch_assoc()){
$star = $row0['star'];
}
if(isset($_GET["st"])){
  $Pst = $_GET["st"];
}else{
  $Pst = $star;
}

if($star==""){
  include('../config/connect.php');
  $sqlinsert = "INSERT into project_star (stid , user , star , id )
  VALUES ('".$stid."','".$D."', '".$Pst."', '".$proid."')";
   if ($db->query($sqlinsert) === TRUE) {
   }

}else{
  include('../config/connect.php');
$sqlupdate = "UPDATE  project_star set stid = '".$stid."' , user = '".$D."', star = '".$Pst."' , id = '".$proid."' WHERE stid = '".$stid."'";
   if ($db->query($sqlupdate) === TRUE) {
   }

}

include('../config/connect.php');
$sql0 = "SELECT * FROM `project_star` WHERE stid = '$stid'";
$result0 = $db->query($sql0);
while($row0 = $result0->fetch_assoc()){
$star = $row0['star'];
}
if($star==""||$star=="0"){
?>
<table width="60%"><tr>
<td><form method="get"><input type="hidden" value="1" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 1 ดาว');" id="star1" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
<td><form method="get"><input type="hidden" value="2" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 2 ดาว');" id="star2" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
<td><form method="get"><input type="hidden" value="3" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 3 ดาว');" id="star3" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
<td><form method="get"><input type="hidden" value="4" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 4 ดาว');" id="star4" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
<td><form method="get"><input type="hidden" value="5" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 5 ดาว');" id="star5" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
</tr></table>
<?php }elseif($star=="1"){ ?>
<table width="60%"><tr>
<td><form method="get"><input type="hidden" value="1" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 1 ดาว');" id="star11" ></i></form></td>
<td><form method="get"><input type="hidden" value="2" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 2 ดาว');" id="star12" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
<td><form method="get"><input type="hidden" value="3" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 3 ดาว');" id="star13" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
<td><form method="get"><input type="hidden" value="4" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 4 ดาว');" id="star14" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
<td><form method="get"><input type="hidden" value="5" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 5 ดาว');" id="star15" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
</tr></table>
<?php }elseif($star=="2"){ ?>
<table width="60%"><tr>
<td><form method="get"><input type="hidden" value="1" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 1 ดาว');" id="star21" ></i></button></form></td>
<td><form method="get"><input type="hidden" value="2" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 2 ดาว');" id="star22" ></i></button></form></td>
<td><form method="get"><input type="hidden" value="3" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 3 ดาว');" id="star23" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
<td><form method="get"><input type="hidden" value="4" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 4 ดาว');" id="star24" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
<td><form method="get"><input type="hidden" value="5" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 5 ดาว');" id="star25" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
</tr></table></s2>
<?php }elseif($star=="3"){ ?>
<table width="60%"><tr>
<td><form method="get"><input type="hidden" value="1" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 1 ดาว');" id="star31" ></i></button></form></td>
<td><form method="get"><input type="hidden" value="2" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 2 ดาว');" id="star32" ></i></button></form></td>
<td><form method="get"><input type="hidden" value="3" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 3 ดาว');" id="star33" ></i></button></form></td>
<td><form method="get"><input type="hidden" value="4" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 4 ดาว');" id="star34" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
<td><form method="get"><input type="hidden" value="5" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 5 ดาว');" id="star35" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
</tr></table></s3>
<?php }elseif($star=="4"){ ?>
<table width="60%"><tr>
<td><form method="get"><input type="hidden" value="1" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 1 ดาว');" id="star41" ></i></button></form></td>
<td><form method="get"><input type="hidden" value="2" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 2 ดาว');" id="star42" ></i></button></form></td>
<td><form method="get"><input type="hidden" value="3" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 3 ดาว');" id="star43" ></i></button></form></td>
<td><form method="get"><input type="hidden" value="4" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 4 ดาว');" id="star44" ></i></button></form></td>
<td><form method="get"><input type="hidden" value="5" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 5 ดาว');" id="star45" style="opacity: 0.3;cursor: pointer;"></i></button></form></td>
</tr></table></s4>
<?php }else{ ?>
<table width="60%"><tr>
<td><form method="get"><input type="hidden" value="1" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 1 ดาว');" id="star51" ></i></button></form></td>
<td><form method="get"><input type="hidden" value="2" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 2 ดาว');" id="star52" ></i></button></form></td>
<td><form method="get"><input type="hidden" value="3" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 3 ดาว');" id="star53" ></i></button></form></td>
<td><form method="get"><input type="hidden" value="4" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 4 ดาว');" id="star54" ></i></button></form></td>
<td><form method="get"><input type="hidden" value="5" name="st"><input type="hidden" value="<?php echo $proid; ?>" name="Proid"><button type="submit" class="img-checker"><i class="fas fa-star fa-2x" onclick="alert('ให้คะแนน 5 ดาว');" id="star55" ></i></button></form></td>
</tr></table>
<?php }
include('../config/connect.php');
$sql8 = "SELECT count(star) as Star FROM `project_star` WHERE id = '$proid'";
$result8 = $db->query($sql8);
while($row8 = $result8->fetch_assoc()){
$star8 = $row8['Star'];
}
include('../config/connect.php');
$sql9 = "SELECT sum(star) as Star FROM `project_star` WHERE id = '$proid'";
$result9 = $db->query($sql9);
while($row9 = $result9->fetch_assoc()){
$star9 = $row9['Star'];
}
$star7 = $star9/$star8;
if($star9==""||$star9=="0"){
  include('../config/connect.php');
$sqlupdate = "UPDATE  projectinfo set Star = '".$star7."' WHERE id = '".$proid."'";
     if ($db->query($sqlupdate) === TRUE) {
     }

}else{
  include('../config/connect.php');
  $sqlupdate = "UPDATE  projectinfo set Star = '".$star7."' WHERE id = '".$proid."'";
     if ($db->query($sqlupdate) === TRUE) {
     }
}


?>
<br>
<form method="post"><textarea rows="5" name="com"  class="form-control rounded-0" id="exampleFormControlTextarea2" style="width:90%" placeholder='แสดงความคิดเห็น...'></textarea>
<Table width="90%"><Tr><td align="right"><button type="submit"  class="btn btn-primary btn-rounded mx-0 ">โพสต์</button></td></tr></Table></form>
<br><font color='#4285f4' size='2px'>ความคิดเห็น </font><font color='#4285f4' size='4px'><i class="fas fa-comment-dots"></i></font>
<br><br>
<?php



$namecom = $_SESSION['userlogin']["Username"];
$imgcom = $_SESSION['userlogin']["ImgUrl"];
if($_POST["com"]!=""){
  $com = $_POST["com"];
  include('../config/connect.php');
  $sqlinsert3 = "INSERT into project_comment ( id , user  , name , comment , img )
  VALUES ('".$proid."','".$D."' , '".$namecom."' , '".$com."' , '".$imgcom."' )";
   if ($db->query($sqlinsert3) === TRUE) {
   }
  }
include('../config/connect.php');
$V=1;
$sql5 = "SELECT * FROM `project_comment` WHERE id = '$proid'";
$result5 = $db->query($sql5);
while($row5 = $result5->fetch_assoc()){
if($row5['img']==""){
  $imgs = "user.png";
}else{
  $imgs = $row5['img'];
}
error_reporting(E_ERROR | E_PARSE);
$t = time($row5['time']);
$T = (date("d/m/Y",$t));
$cm = $row5['cmid'];
$vall = $_POST["vall"];
if($V<=3&&$vall==""){
if($row5['user']!=$D){
echo "<Table width='90%'><tr><td align='left'><img src='../img_user/".$imgs."'  class='rounded-circle z-depth-0 z-depth-1-half'  height='36px' width='36px' style='border: solid 1px #a971e3;'> <font size='1px' color='#d270d5'><i class='fas fa-circle'></i> </font><font size='3px' color='#dd70d1'><i class='fas fa-circle'></i></font><button type='button' class='btn purple-gradient btn-rounded btn-md' style='border-radius: 36px;'>".$row5['comment']."</button></td></tr>";
echo "<tr><td align='left'><font color='#4285f4' size='0.5px'><i class='fas fa-clock'></i> โพสต์เมื่อวันที่ ".$T."</font></td></tr></Table>";
$V++;
}else{
  echo "<Table width='90%'><tr><td align='right'><button type='button' class='btn purple-gradient btn-rounded btn-md' style='border-radius: 36px;'>".$row5['comment']."</button><font size='3px' color='#dd70d1'><i class='fas fa-circle'></i> </font><font size='1px' color='#d270d5'><i class='fas fa-circle'></i> </font> <img src='../img_user/".$imgs."'  class='rounded-circle z-depth-0 z-depth-1-half'  height='36px' width='36px' style='border: solid 1px #a971e3;'> </td></tr>";
  echo "<tr><td align='right'><font color='#4285f4' size='0.5px'><i class='fas fa-clock'></i> โพสต์เมื่อวันที่ ".$T."</font><font color='#e53935' size='1.5px'><form name='myForm'  method='post' action='delete_comment.php' ><input type='hidden' name='DeP' value='".$cm."'><button type='submit' style='cursor: pointer;border: solid 0px #4285f4;background-color:#dfeefd;color:#e53935;' ><u><b>ลบ</b></u></button></font></form></td></tr></Table>";
$V++;
}
if($V==4&&$vall==""){
  echo "<Table width='90%'><tr><td align='right'><br></td></tr>";
  echo "<tr><td align='right'><font size='2px'> <form name='myForm'  method='post'  ><input type='hidden' name='vall' value='all'><button type='submit' style='cursor: pointer;border: solid 0px #4285f4;background-color:#dfeefd;color:#4285f4' ><b><i class='fas fa-angle-double-down'></i> ดูความคิดเห็นทั้งหมด</b></button></font></form></td></tr></Table>";


}

}
if($vall=="all"){
  if($row5['user']!=$D){
    echo "<Table width='90%'><tr><td align='left'><img src='../img_user/".$imgs."'  class='rounded-circle z-depth-0 z-depth-1-half'  height='36px' width='36px' style='border: solid 1px #a971e3;'> <font size='1px' color='#d270d5'><i class='fas fa-circle'></i> </font><font size='3px' color='#dd70d1'><i class='fas fa-circle'></i></font><button type='button' class='btn purple-gradient btn-rounded btn-md' style='border-radius: 36px;'>".$row5['comment']."</button></td></tr>";
    echo "<tr><td align='left'><font color='#4285f4' size='0.5px'><i class='fas fa-clock'></i> โพสต์เมื่อวันที่ ".$T."</font></td></tr></Table>";
    }else{
      echo "<Table width='90%'><tr><td align='right'><button type='button' class='btn purple-gradient btn-rounded btn-md' style='border-radius: 36px;'>".$row5['comment']."</button><font size='3px' color='#dd70d1'><i class='fas fa-circle'></i> </font><font size='1px' color='#d270d5'><i class='fas fa-circle'></i> </font> <img src='../img_user/".$imgs."'  class='rounded-circle z-depth-0 z-depth-1-half'  height='36px' width='36px' style='border: solid 1px #a971e3;'> </td></tr>";
      echo "<tr><td align='right'><font color='#4285f4' size='0.5px'><i class='fas fa-clock'></i> โพสต์เมื่อวันที่ ".$T."</font><font color='#e53935' size='1.5px'><form name='myForm'  method='post' action='delete_comment.php' ><input type='hidden' name='DeP' value='".$cm."'><button type='submit' style='cursor: pointer;border: solid 0px #4285f4;background-color:#dfeefd;color:#e53935;' ><u><b>ลบ</b></u></button></font></form></td></tr></Table>";
    }

}
}




?>
<br>

      </div>
      <br><br>


  <br><br>

</section>
<br><br>
<!--Section: Content-->
</div>

  </div>
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
<?php

    }

?>
