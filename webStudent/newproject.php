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

</style>
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
    <li class="nav-item ">
      <a class="nav-link" href="index.php"><i class="fas fa-home "></i> หน้าแรก
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="stdInfo.php"><i class="fas fa-user"></i> ข้อมูลส่วนตัว</a>
    </li>
    <li class="nav-item active">
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
<main  >
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">
        <!-- start card -->
				<div class="card"  style="width: 100%;">
					<div class="card-body"  Style='background-image:url("../img/<?php echo $Team; ?>");height:550px;'>

						<div class="hide" id="add_alert" role="alert" >
							<div id="messages_content" ></div>
						</div>
						<!-- End Alert -->
						
                       <?php
error_reporting(~E_NOTICE);
$Pname = $_POST["Pname"];
$Ptype = $_POST["Ptype"];
$PDes  = $_POST["Des"];
$Aname = $_POST["Aname"];

if($_POST["P1name"]!=""){
    $P1 = $_POST["P1name"];
}else{
    $P1 = "";
}

if($_POST["P2name"]!=""){
    $P2 = $_POST["P1name"];
}else{
    $P2 = "";
}

if($_POST["P3name"]!=""){
    $P3 = $_POST["P1name"];
}else{
    $P3 = "";
}

if($_POST["P4name"]!=""){
    $P4 = $_POST["P1name"];
}else{
    $P4 = " ";
}

if($_POST["P5name"]!=""){
    $P5 = $_POST["P1name"];
}else{
    $P5 = " ";
}
$P1;
$P2;
$P3;
$P4;
$P5;
$Pic = $_FILES["Picture"]["name"];
$Doc = $_FILES["Pdf"]["name"];

$file = strtolower($_FILES["Picture"]["name"]);
$sizefile = $_FILES["Picture"]["size"]; 
$type= strrchr($file,".");
$i = "1";

 $file2 = strtolower($_FILES["Pdf"]["name"]);
 $sizefile2 = $_FILES["Pdf"]["size"]; 
 $type2= strrchr($file2,".");

 echo "<Table width=100%>";
 if(($type!=".jpg")&&($type!=".gif")&&($type!=".png")){
 
 echo   "<tr Style='cursor: pointer;border-left: solid 5px #ff6f00;background-color:#fff3cd'><td width=10% align='center'>
 <h5><ul class='stepper stepper-vertical'><li class='completed'><a href='#!'><span class='circle'>".$i."</span><span class='label'></span></a></li></li></ul></h5>
 </td><td width=90% >";

    echo "<br><h6> คุณอัพโหลดภาพหน้าปกโครงงานเป็นไฟล์นามสกุล ".$type." ไม่ถูกต้อง"
    ."<br> กรุณาอัพโหลดไฟล์หน้าปกนามสกุล .jpg .gif และ .png เท่านั้น"."</h6><br></td></tr>"
    
    ;$i++;$pageback  = "window.history.go(-1); return false;";   
 } 
 echo "<tr><td></td><td></td></tr>";
 
 if($type2!=".pdf"){
 
 echo   "<tr Style='cursor: pointer;border-left: solid 5px #e53935;background-color:#f8d7da'><td align='center'>
 <h5 ><ul class='stepper stepper-vertical' ><li class='completed'><a href='#!' ><span class='circle'>".$i."</span><span class='label'></span></a></li></li></ul></h5></td><td>";

    echo "<br><h6> คุณอัพโหลดไฟล์เนื้อหาโครงงานเป็นไฟล์นามสกุล ".$type2." ไม่ถูกต้อง"
    ."<br> กรุณาอัพโหลดไฟล์เนื้อหาโครงงานนามสกุล .pdf เท่านั้น"."</h6><br></td></tr>"
    
    ;$i++;$pageback  = "window.history.go(-1); return false;";   
 } 
 echo "</Table>";

 
if((($type==".jpg")||($type==".gif")||($type==".png"))&&($type2==".pdf")){

if(move_uploaded_file($_FILES["Picture"]["tmp_name"],"../img/".$_FILES["Picture"]["name"])){

    If(move_uploaded_file($_FILES["Pdf"]["tmp_name"],"../file/".$_FILES["Pdf"]["name"])){



    include('../config/connect.php');
    $sql = "INSERT into projectinfo (ProjectName , Type , Description , Advisor , P1 , P2 , P3 , P4 , P5 , Picture , File , Status , CreatedBy)
    VALUES ('".$Pname."', '".$Ptype."', '".$PDes."' , '".$Aname."' , '".$P1."' , '".$P2."' ,'".$P3."' , '".$P4."' , '".$P5."' , '".$Pic."' , '".$Doc."' , 'รออนุมัติ' , '".$D."')";
            

            if ($db->query($sql) === TRUE) {
                echo "
                <div class='alert alert-success' role='alert' Style='cursor: pointer;border-left: solid 5px #00c853;'>
                <h4 class='alert-heading'>เรียบร้อยแล้ว!</h4>
               <p>อัพโหลดโครงงาน ".$Pname." เรียบร้อยแล้ว ตอนนี้อยู่ในกระบวนการรอการอนุมัติ  
               <br>สถานะ : รออนุมัติ รออนุมัติโครงงานจากอาจารย์ที่ปรึกษาโครงงาน 
               <br>สถานะ : อนุมัติแล้ว เมื่อผ่านการอนุมัติโครงงานจากอาจารย์ที่ปรึกษาโครงงาน 
               <br>สถานะ : ไม่อนุมัติ เมื่อโครงงานไม่ผ่านการอนุมัติจากอาจารย์ที่ปรึกษาโครงงาน
               <br>หมายเหตุ สถานะ : รออนุมัติ ไม่สามารถเข้าไปแก้ไขข้อมูลโครงงานได้ กรณีต้องการแก้ไขให้เข้าไปลบโครงงาน แล้วทำการอัพโครงงานขึ้นใหม่อีกครั้ง.</p>
               <hr>
               <p class='mb-0'>สามารถสอบถามการใช้งาน หรือแจ้งปัญหาการใช้งานได้ ไปยังเมนูผู้ดูแลระบบ.</p>
               </div>
                
                ";
            } else {
                echo "
                <div class='alert alert-danger' role='alert'>
                อัพโหลดโครงงานไม่ได้<a href='#' class='alert-link'> เกิดข้อผิดพลาด</a>. อัพโหลดใหม่อีกครั้ง หรือแจ้งปัญหาไปยังเมนูผู้ดูแลระบบ.
                </div>
                ";
            }

            $pageback  = "window.location.href = 'project_all.php'"; 
   }  

}
}


?>		
<br><br>

 <CENTER><button type='button' class='btn purple-gradient btn-lg' data-toggle="modal" data-target="#exampleModalCenter" onclick="<?php echo $pageback; ?>"><i class="fas fa-chevron-circle-left fa-lg"></i><h8> กลับหน้าก่อน</h8></button><br></CENTER>       


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
