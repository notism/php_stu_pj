<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
    }
    $D = $_SESSION['userlogin']["Id"];
  
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

body{
	background-image:url("../img/back.gif")
}

input[type=text], select {
  width: 97%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 0px solid #d3d3d3;
  border-radius: 4px;
  box-sizing: border-box;
  background-color:#fce4ec;
}


#hide {
  width: 10%;
  display: inline-block;
  border: 1px solid #d3d3d3;
  border-radius: 4px;
  box-sizing: border-box;
  background-color:#fce4ec;
}

#hide1,#hide2,#hide3,#hide4 {
  width: 10%;
  display: inline-block;
  border: 1px solid #d3d3d3;
  border-radius: 4px;
  box-sizing: border-box;
  background-color:#fce4ec;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("pp").hide();
  $("#hide").click(function(){
    $("pp").toggle();
  });
});

$(document).ready(function(){
  $("p1").hide();
  $("#hide1").click(function(){
    $("p1").toggle();
  });
});

$(document).ready(function(){
  $("p2").hide();
  $("#hide2").click(function(){
    $("p2").toggle();
  });
});

$(document).ready(function(){
  $("p3").hide();
  $("#hide3").click(function(){
    $("p3").toggle();
  });
});

$(document).ready(function(){
  $("p4").hide();
  $("#hide4").click(function(){
    $("p4").toggle();
  });
});
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
    $Sta = $row["Status"];

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
  
    <div class="col-md-6 mb-4">

      <div class="view"><span><br>&nbsp;&nbsp;&nbsp;จำนวนคนดู <?php echo $View+1; ?> ครั้ง <i class='fas fa-eye '></i> 
        <!-- Hoverable -->
<br><br><br><br><br>
<img src="../img/<?php echo $Pic; ?>" class="img-fluid  hoverable" >
      </div>

    </div>
    <div class="col-md-6 d-flex align-items-center" Style='cursor: pointer;border-Top: solid 5px #ff4444;background-color:#fce4ec'>
      <div >
      <br><br>
      <form name="myForm"  method="post" action="updateproject.php" enctype="multipart/form-data">
      <input type="hidden" name="PId" value="<?php echo $proid ?>">
      <input type="hidden" name="Sta" value="<?php echo $Sta ?>">
      <font color="red"><i class="fas fa-pencil-alt fa-lg"></i> แก้ไขโครงงาน</font>
        <h3 class="font-weight-bold mb-4" align="center"><input type="text" value="<?php echo $N; ?>" name="Pname"></h3>

          <B>รายละเอียด</B> <button type="button" id="hide1"><i class='fas fa-plus fa-sm'></i></button><br>
          <div class="form-group">
          <p1><textarea rows="10" name="Des" cols="50%" class="form-control rounded-0" id="exampleFormControlTextarea2" style="background-color:#fce4ec;border: 0px;"><?php echo $space.$Des; ?></textarea></p1>
          </div>
          <B>ประเภท</B> <button type="button" id="hide2"><i class='fas fa-plus fa-sm'></i></button><br>
          <p2>
          <?php 
          if($Type=="ธุรกิจ"){
            echo '<select class="mdb-select md-form" style="width:96%" name="Ptype" >
            <option value="'.$Type.'" selected>'.$Type.'</option> 
            <option value="สังคม" >สังคม</option> 
            <option value="การศึกษา" >การศึกษา</option> 
            <option value="อื่นๆ" >อื่นๆ</option> 
            </select>';
          }else if($Type=="สังคม"){
            echo '<select class="mdb-select md-form" style="width:96%" name="Ptype" >
            <option value="'.$Type.'" selected>'.$Type.'</option> 
            <option value="ธุรกิจ" >ธุรกิจ</option> 
            <option value="การศึกษา" >การศึกษา</option> 
            <option value="อื่นๆ" >อื่นๆ</option> 
            </select>';
          }else if($Type=="การศึกษา"){
            echo '<select class="mdb-select md-form" style="width:96%" name="Ptype" >
            <option value="'.$Type.'" selected>'.$Type.'</option> 
            <option value="ธุรกิจ" >ธุรกิจ</option> 
            <option value="สังคม" >สังคม</option> 
            <option value="อื่นๆ" >อื่นๆ</option> 
            </select>';
          }else{
            echo '<select class="mdb-select md-form" style="width:96%" name="Ptype" >
            <option value="'.$Type.'" selected>'.$Type.'</option> 
            <option value="ธุรกิจ" >ธุรกิจ</option> 
            <option value="สังคม" >สังคม</option> 
            <option value="การศึกษา" >การศึกษา</option> 
            </select>';

          }
          
          ?></p2><br>
          <B>อาจารย์ที่ปรึกษา</B> <button type="button" id="hide3"><i class='fas fa-plus fa-sm'></i></button><br>
          <?php
 include('../config/connect.php');
 $sql1 = "SELECT * FROM `users` WHERE id = '$Ad'";
 $result1 = $db->query($sql1);
 while($row1 = $result1->fetch_assoc()){

$Adv = $row1["Prefix"]." ".$row1["Firstname"]." ".$row1["Lastname"];
 }
      
 ?> 
 <p3>
 <select class="mdb-select md-form" style="width:96%" name="Aname" >
            <option value="<?php echo $Ad ?>" selected><?php echo $Adv; ?></option>


    <?php

include('../config/connect.php');

$sql = "SELECT * FROM users where Role = 'advisor'";
$result = $db->query($sql);
$i = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
       
        <option value='".$row["Id"]."'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]."</option>
        
        ";$i++;
    }
} else {
    echo "0 results";
}
$db->close();
?>


</select></p3><br>
          <B>สมาชิกในกลุ่ม</B>
<button type="button" id="hide"><i class='fas fa-plus fa-sm'></i></button><br>
<pp>
          <?php
 include('../config/connect.php');
 $sql1 = "SELECT * FROM `users` WHERE id = '$P1'";
 $result1 = $db->query($sql1);
 while($row1 = $result1->fetch_assoc()){

$Pi1 = $row1["Prefix"]." ".$row1["Firstname"]." ".$row1["Lastname"];
 }
      
 ?> 
          <select class="mdb-select md-form" style="width:96%" name="P1" >
            <option value="<?php echo $P1 ?>" selected>คนที่1. <?php if($P1=='0'||$P1==' '){echo "ว่าง";}else{echo $Pi1;}  ?></option>


    <?php

include('../config/connect.php');

$sql = "SELECT * FROM users where Firstname != '' and Role = 'student' and Id != '$P1'";
$result = $db->query($sql);
$i = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
       
        <option value='".$row["Id"]."'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]."</option>
        
        ";$i++;
    }
} else {
    echo "0 results";
}
$db->close();
?></select>  


<?php
 include('../config/connect.php');
 $sql1 = "SELECT * FROM `users` WHERE id = '$P2'";
 $result1 = $db->query($sql1);
 while($row1 = $result1->fetch_assoc()){

$Pi2 = $row1["Prefix"]." ".$row1["Firstname"]." ".$row1["Lastname"];
 }
      
 ?> 
          <select class="mdb-select md-form" style="width:96%" name="P2" >
            <option value="<?php echo $P2 ?>" selected>คนที่2. <?php if($P2=='0'||$P2==' '){echo "ว่าง";}else{echo $Pi2;}  ?></option>


    <?php

include('../config/connect.php');

$sql = "SELECT * FROM users where Firstname != '' and Role = 'student' and Id != '$P2'";
$result = $db->query($sql);
$i = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
       
        <option value='".$row["Id"]."'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]."</option>
        
        ";$i++;
    }
} else {
    echo "0 results";
}
$db->close();
?></select>  



<?php
 include('../config/connect.php');
 $sql1 = "SELECT * FROM `users` WHERE id = '$P3'";
 $result1 = $db->query($sql1);
 while($row1 = $result1->fetch_assoc()){

$Pi3 = $row1["Prefix"]." ".$row1["Firstname"]." ".$row1["Lastname"];
 }
      
 ?> 
          <select class="mdb-select md-form" style="width:96%" name="P3" >
            <option value="<?php echo $P3 ?>" selected>คนที่3. <?php if($P3=='0'||$P3==' '){echo "ว่าง";}else{echo $Pi3;}  ?></option>


    <?php

include('../config/connect.php');

$sql = "SELECT * FROM users where Firstname != '' and Role = 'student' and Id != '$P3'";
$result = $db->query($sql);
$i = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
       
        <option value='".$row["Id"]."'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]."</option>
        
        ";$i++;
    }
} else {
    echo "0 results";
}
$db->close();
?></select>  



<?php
 include('../config/connect.php');
 $sql1 = "SELECT * FROM `users` WHERE id = '$P4'";
 $result1 = $db->query($sql1);
 while($row1 = $result1->fetch_assoc()){

$Pi4 = $row1["Prefix"]." ".$row1["Firstname"]." ".$row1["Lastname"];
 }
      
 ?> 
          <select class="mdb-select md-form" style="width:96%" name="P4" >
            <option value="<?php echo $P4 ?>" selected>คนที่4. <?php if($P4=='0'||$P4==' '){echo "ว่าง";}else{echo $Pi4;}  ?></option>


    <?php

include('../config/connect.php');

$sql = "SELECT * FROM users where Firstname != '' and Role = 'student' and Id != '$P4'";
$result = $db->query($sql);
$i = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
       
        <option value='".$row["Id"]."'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]."</option>
        
        ";$i++;
    }
} else {
    echo "0 results";
}
$db->close();
?></select> 


<?php
 include('../config/connect.php');
 $sql1 = "SELECT * FROM `users` WHERE id = '$P5'";
 $result1 = $db->query($sql1);
 while($row1 = $result1->fetch_assoc()){

$Pi5 = $row1["Prefix"]." ".$row1["Firstname"]." ".$row1["Lastname"];
 }
      
 ?> 
          <select class="mdb-select md-form" style="width:96%" name="P5" >
            <option value="<?php echo $P5 ?>" selected>คนที่5. <?php if($P5=='0'||$P5==' '){echo "ว่าง";}else{echo $Pi5;}  ?></option>


    <?php

include('../config/connect.php');

$sql = "SELECT * FROM users where Firstname != '' and Role = 'student' and Id != '$P5'";
$result = $db->query($sql);
$i = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
       
        <option value='".$row["Id"]."'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]."</option>
        
        ";$i++;
    }
} else {
    echo "0 results";
}
$db->close();
?></select> 
</pp>
<br>
<B>อัพเดตรูปภาพหน้าปก และ ไฟล์งาน</B> <button type="button" id="hide4"><i class='fas fa-plus fa-sm'></i></button><br><br>
<p4>อัพเดทไฟล์รูปหน้าปกโครงงาน<br>
              <font color="#d50000 ">หมายเหตุ : นามสกุล .jpg .gif .png </font>
              <div class="file-field">
              <a class="btn-floating purple-gradient mt-0 float-left">
                <i class="fas fa-cloud-upload-alt fa-lg" aria-hidden="true" ></i>
                <input type="file" name="Picture"  >
              </a>
            </div>
<br><br>
อัพเดทไฟล์โครงงาน<br>
               <font color="#d50000 ">หมายเหตุ : ไฟล์ PDF</font>
              <div class="file-field">
              <a class="btn-floating purple-gradient mt-0 float-left">
                <i class="fas fa-cloud-upload-alt fa-lg" aria-hidden="true" ></i>
                <input type="file"   name="Pdf" >
              </a>
            </div>
<br><br></p4><br>
<center><p style="cursor: pointer;border: solid 0px #212121;width:30%"><?php echo $QRcode; ?></p></center>

<br>
<center>
<div class="row" >
    <div class="col-4" ><button type="submit" name="edit_user" id="submit" value="Submit" class="btn btn-primary btn-md"><i class="fas fa-save"  ></i> บันทึก</button></form></div>
    <div class="col-4" ><form name="myForm"  method="post" action="deleteproject.php" >
                            <input type="hidden" name="PId" value="<?php echo $proid ?>">
                            <input type="hidden" name="Pname" value="<?php echo $N ?>">
                            <button type="submit" class="btn btn-danger btn-md" data-dismiss="modal" onclick="return confirm('ต้องการลบโครงงาน <?php echo $N; ?> ใช่หรือไหม?')"> &nbsp;<i class="fas fa-trash-alt" ></i> ลบ&nbsp;&nbsp;   </button></form></div>
    <div class="col-4" ><button type="button" class="btn btn-warning btn-md" data-dismiss="modal" onclick="window.history.go(-1); return false;"><i class="fas fa-reply"></i> ยกเลิก</button></div>
  </div>
</center>
<Br>

      </div>
      <br><br>
     
    

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