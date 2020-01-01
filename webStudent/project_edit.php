<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
    }
    $D = $_SESSION['userlogin']["Id"];
    include('../config/connect.php');
    $sql = "SELECT Team FROM users where ID = '".$D."'";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc()) {
    $Team1 = $row["Team"];
    }
    if($Team1==""){
        $Team = "line.jpg";
      }else{
        $Team = $Team1;
      }
?>
<!DOCTYPE html>
<html>


</style>
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


</style>


<script>
function myHide()
{
	document.getElementById('hidepage').style.display='block';//content ที่ต้องการแสดงหลังจากเพจโหลดเสร็จ
	document.getElementById('hidepage2').style.display='none';//content ที่ต้องการแสดงระหว่างโหลดเพจ
}
</script>

<?php  
$proid = $_GET["Proid"];
 include('../config/connect.php');
 $sql = "SELECT * FROM `projectinfo` WHERE ( P1 = $D or P2 = $D or P3 = $D or P4 = $D or P5 = $D ) and id = '$proid'";
 $result = $db->query($sql);
 $rowcount=mysqli_num_rows($result);
 if ($rowcount < 1) {
    echo "<script>window.location.href = 'Project.php';</script>";
 
} else {

    while($row = $result->fetch_assoc()) {
    $N = $row["ProjectName"];
    $URL = $row["Id"];
    $Pic = $row["Picture"];
    $Des = $row["Description"];
    $Type = $row["Type"];
    $File = $row["File"];
    $View = $row["View"];

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


    $Ad = $row["Advisor"];
    }

    

    
 $QRcode = '<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=https://localhost/test/webStudent/View.php?Pid='.$URL.'/&choe=UTF-8" title="Link to my Website" width=100%/>';
?>


</head>
<body onload="myHide();">

	<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#921ecc;">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Student</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#"><i class="fas fa-home "></i> หน้าแรก
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user"></i> ข้อมูลส่วนตัว</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-folder "></i> โครงงานของฉัน</a>
	  </li>
	  <li class="nav-item ">
				 	<a class="nav-link" href="#"><i class="fas fa-bell "></i><span> การแจ้งเตือน </span><span class="badge btn-danger">3</span></a>
			 </li>
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            อื่นๆ
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#"><i class="fas fa-user"></i> แก้ไขโปรไฟล์</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="fas fa-lock "></i> แก้ไขรหัสผ่าน</a>
          </div>
        </li>
      <!-- Dropdown -->
      </li>
           
    </ul>
    <!-- Links -->

            <span class="navbar-text" style="font-size: 14px;color:white"><img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0" alt="avatar image" height="24"> 
		 		สวัสดี,คุณ <?php echo $_SESSION['userlogin']["Username"] ?>&nbsp;
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
				<div class="card"  style="width: 100%;">
					<div class="card-body"  Style='background-image:url("../img/<?php echo $Team; ?>");'>
                   
                   <div class="row" >
                    <div class="col-lg" align='center'><span></span></div>
                    <div class="col-lg" align='right'><p style="cursor: pointer;border: solid 2px #212121;width:30%"><?php echo $QRcode; ?></p></div>
                    </div>

                        <div class="dropdown-divider"></div>
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
        <!-- Hoverable -->
<br><br><br><br><br>
<img src="img/<?php echo $Pic; ?>" class="img-fluid rounded-circle hoverable" alt="hoverable"><br><br><br><br>
      </div>

    </div>
    <div class="col-md-5 d-flex align-items-center" Style='cursor: pointer;border-Top: solid 5px #4285f4;background-color:#dfeefd'>
      <div >
      <br><br>
        <h3 class="font-weight-bold mb-4" align="center"><?php echo $N; ?></h3>

          <p><B>รายละเอียด</B> <br>
          <?php echo $space.$Des."<br>"; ?>
          <B>ประเภท</B><br>
          <?php echo $space.$Type."<br>"; ?>
          <B>อาจารย์ที่ปรึกษา</B><br>
          <?php
 include('../config/connect.php');
 $sql1 = "SELECT * FROM `users` WHERE id = '$Ad'";
 $result1 = $db->query($sql1);
 while($row1 = $result1->fetch_assoc()){

$Adv = $row1["Prefix"]." ".$row1["Firstname"]." ".$row1["Lastname"];
 }
 echo $space.$Adv;      
 ?> 
          <br>
          <B>สมาชิกในกลุ่ม</B><br>
          <?php
 include('../config/connect.php');
 $sql1 = "SELECT * FROM `users` WHERE id in ($P1,$P2,$P3,$P4,$P5)";
 $result1 = $db->query($sql1);
 while($row1 = $result1->fetch_assoc()){

echo  $Adv = $space.$row1["Prefix"]." ".$row1["Firstname"]." ".$row1["Lastname"]."<br>";
   
 }     
 ?><br><B>เอกสารแนบ : <?php echo $File; ?></B><br> </p>
<br><br>
<center><button type="button" class="btn btn-orange btn-rounded mx-0" onclick="window.open('file/<?php echo $File; ?>')">เปิดเอกสาร</button></center>


      </div>
      <br><br>
    </div>
  </div>
  <br><br>
</section>
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