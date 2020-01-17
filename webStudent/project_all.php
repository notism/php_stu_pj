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
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/datatables.css"/>
  <link rel="stylesheet" href="../nice/css/mdb.min.css">
  


	
	<style>


div.a {
  text-align: right;
} 
input[type=text], select {
  width: 97%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #d3d3d3;
  border-radius: 4px;
  box-sizing: border-box;
}

body{
	background-image:url("../img/back.gif")
}

</style>


<script type="text/javascript">
function checkForm() {
var name = document.forms["myForm"]["user"].value;
if(name == "1"){
document.getElementById("note").innerHTML="<select name='P1name' required><option value='' disabled selected>คนที่ 1 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select>";
}else if (name == "2") {
document.getElementById("note").innerHTML="<select name='P1name' required><option value='' disabled selected>คนที่ 1 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select><select name='P2name' required><option value='' disabled selected>คนที่ 2 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select>";
}else if (name == "3") {
document.getElementById("note").innerHTML="<select name='P1name' required><option value='' disabled selected>คนที่ 1 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select><select name='P2name' required><option value='' disabled selected>คนที่ 2 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select><select name='P3name' required><option value='' disabled selected>คนที่ 3 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select>";
}else if (name == "4") {
document.getElementById("note").innerHTML="<select name='P1name' required><option value='' disabled selected>คนที่ 1 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select><select name='P2name' required><option value='' disabled selected>คนที่ 2 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select><select name='P3name' required><option value='' disabled selected>คนที่ 3 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select><select name='P4name' required><option value='' disabled selected>คนที่ 4 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select>";
} else
document.getElementById("note").innerHTML="<select name='P1name' required><option value='' disabled selected>คนที่ 1 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select><select name='P2name' required><option value='' disabled selected>คนที่ 2 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select><select name='P3name' required><option value='' disabled selected>คนที่ 3 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select><select name='P4name' required><option value='' disabled selected>คนที่ 4 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select><select name='P5name' required><option value='' disabled selected>คนที่ 5 </option><?php

include('../config/connect.php');

$sql = 'SELECT * FROM users where (Firstname != "" and Lastname != "") and Role = "student" order by Firstname ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['Id'].'>'.$row['Prefix'].' '.$row['Firstname'].' '.$row['Lastname'].'</option>';
}

?></select>";
return (false);
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
<main>
	<div class="container">
		<div class="row">
		  <div class="col-sm-12">
        <!-- start card -->
				<div class="card"  style="width: 100%;">
					<div class="card-body" >
						<h3 class="card-title">โครงงานของฉัน</h3>
						<div class="dropdown-divider"></div>
						<!-- Alert -->
						<div class="hide" id="add_alert" role="alert">
							<div id="messages_content"></div>
						</div>
						<!-- End Alert -->
                        
						<br>
						<div class="row">&nbsp;&nbsp;
  <div class="col-sm-6 col-md-4 mb-3 mb-md-3">
    <div class="card" Style='cursor: pointer;border-left: solid 5px #4285f4;background-color:#dfeefd'>
      <div class="card-body "  >
        <h5 class="card-title">เพิ่มโครงงานใหม่</h5>
        <p class="card-text"> หากคุณต้องการเพิ่มโครงงานใหม่ให้คลิกปุ่ม <i class='fas fa-mouse-pointer '></i> "อัพโหลดโครงงาน" . </p>
        <CENTER><button type='button' class='btn purple-gradient btn-lg' data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-plus"></i> อัพโหลดโครงงาน</button><br></CENTER>
      </div>
    </div>
  </div>
</div>
  
						<div class="container mt-3">
            <Table width="97%" ><tr><td>
                        
						 
						
						<nav aria-label="Page navigation example">
						<ul class="pagination pg-blue">
							<li class="page-item active">
							<a class="page-link">ทั้งหมด</a>
							</li>
							<li class="page-item"><a href="project_accept.php" class="page-link">อนุมัติแล้ว</a></li>
							<li class="page-item"><a href="project_waitting.php" class="page-link">รออนุมัติ</a></li>
							<li class="page-item"><a href="project_unaccept.php" class="page-link">ไม่อนุมัติ</a></li>
						</ul>
						</nav>
						
					<input class="form-control" id="myInput" type="text" placeholder="ค้นหา..."  >	
          <div class="file has-name is-right">

        	
						<br>


  <?php

						include('../config/connect.php');

            $sql = "SELECT * FROM projectinfo where P1 = $D or P2 = $D or P3 = $D or P4 = $D or P5 = $D";
						$result = $db->query($sql);
            $i = 1;
            
          

						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
							if($row["Status"]=="อนุมัติแล้ว"){
              $S = "<font color='#00C851'><i class='fas fa-check-circle fa-lg'></i> ".$row["Status"]."</font>";
							}elseif($row["Status"]=="รออนุมัติ"){
						    $S = "<font color='#FF8800'><i class='fas fa-dot-circle fa-lg' ></i> ".$row["Status"]."&nbsp;</font>";
							}elseif($row["Status"]=="ไม่อนุมัติ"){
						    $S = "<font color='red'><i class='fas fa-times-circle fa-lg'></i> ".$row["Status"]."&nbsp;</font>";
              }
              
           

							echo " 
							<ul class='list-group' id='myList'>
							<li class='list-group-item ' Style='background-color:#f1f1f1;'>
							<Table width=100% ><tr>
							<td width=3% >".$i."</td>
							<td width=10% align='left'><img class='img-fluid rounded mb-3 mb-md-0' src='../img/".$row["Picture"]."' alt='' width=100px></td>
							<td width=13%>เรื่อง ".$row["ProjectName"]."</td>
							<td width=10% align='center'>".$S."</td>
							<td width=20% >".$row["Description"]."</td>
              <td width=10% align='center'> <form   method='get' action='project_edit.php' ><input type='hidden' name='Proid' value='".$row["Id"]."'>
              <button type='submit' class='btn btn-danger btn-rounded btn-sm my-0' ><i class='fas fa-edit '></i> แก้ไข</button></td></form>
							</tr>
							</Table></li>
						    </ul>  
						      ";$i++;
								
							}
						} else {
							echo "0 results";
						}
						$db->close();
						?>
 
  
 <br><br></div>
</td></tr></table ></div>




<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

							 
						 
                         
						
				
              



					</div>
				</div>
        <!-- end card -->
				<br/>
			</div>
		</div>
	</div>
</main>







<!-- Modal Edit -->
<div class="modal fade-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	<div class="modal-content"  Style='background-image:url("../img/back1.jpg")'>
		<div class="modal-header" >
			<h5 class="modal-title"><i class="fas fa-plus"></i> อัพโหลดโครงงาน</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div><center>
    <form name="myForm"  method="post" action="newproject.php" enctype="multipart/form-data">
		<Table style="width:80%;">
    <tr><td width=15% align="center"><font color="#330eff"><i class="fas fa-folder-open fa-2x "></i></font>
    </td><td width=70%><input type='text' name="Pname" placeholder='ชื่อเรื่องโครงงาน' required>
    </td></tr>
<tr><td></td><td>


  <select id="mySelect" onchange="myFunction()" name="select">
  <option value="" disabled selected>เลือกสำนักวิชา</option>
  <?php

include('../config/connect.php');

$sql = "SELECT * FROM `fuaculty` WHERE 1";
$result = $db->query($sql);
$i = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
       
        <option value='".$row["fac_id"]."'>".$row["fac_name"]."</option>
        
        ";$i++;
    }
} else {
    echo "0 results";
}
$db->close();
?>


</select>
<p id="demo"></p>

<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "<select name='depm' required><option value='' disabled selected>เลือกสาขาวิชา</option><?php

include('../config/connect.php');
$sql = 'SELECT * FROM department where dep_fuculty_id = 1 order by dep_name ASC;';
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
  echo '<option value='.$row['dep_id'].'>'.$row['dep_name'].'</option>';
}

?></select>";
}
</script>
</td></tr>



    <tr><td align="center">
    <font color="#7502f3"><i class="fas fa-cube fa-2x"></i></font> 
    </td><td>
            <select class="mdb-select md-form" style="width:50%" name="Ptype" required>
            <option value="" disabled selected>เลือกประเภทโครงงาน</option>
            <option value="ธุรกิจ"> ธุรกิจ</option>
            <option value="สังคม"> สังคม</option>
            <option value="การศึกษา"> การศึกษา</option>
            <option value="อื่นๆ"> อื่นๆ</option>
            </select>
    </td></tr>
    <tr><td align="center"><font color="#ad02f3"><i class="fas fa-book-open fa-2x"></i></font>  
    </td><td> <div class="form-group">
              <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="4" style="width:92%" placeholder='รายละเอียดโครงงาน' name="Des" required></textarea>
             </div>
    </td></tr>
    <tr><td align="center"><font color="#ce02f3"><i class="fas fa-user-graduate fa-2x"></i></font>   
    </td><td><select class="mdb-select md-form" style="width:96%" name="Aname" required>
            <option value="" disabled selected>เลือกอาจารย์ที่รึกษาโครงงาน</option>


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


</select>








    </td></tr>
    <tr><td align="center"><font color="#f302ec"><i class="fas fa-users fa-2x"></i></font>  
    </td><td> 
           
            <select class="mdb-select md-form" style="width:50%" name="user" required>
            <option value="" disabled selected>เลือกจำนวนสมาชิก</option>
            <option value="1"> 1 คน</option>
            <option value="2"> 2 คน</option>
            <option value="3"> 3 คน</option>
            <option value="4"> 4 คน</option>
            <option value="5"> 5 คน</option>
            </select>
                
            <button type="submit" name="edit_user" id="submit" value="Submit" class="btn btn-primary" onclick="return checkForm()" >ยืนยัน</button>
    </td></tr>
    <tr><td>
    </td><td> 
             <p id="note"></p>
    </td></tr>
    <tr><td  align="center"> 
                  <ul class="stepper stepper-vertical">
                    <li class="completed">
                      <a href="#!">
                        <span class="circle">1</span>
                        <span class="label"></span>
                      </a>
                    </li>

                    </li>

                  </ul>
    </td><td> อัพโหลดไฟล์รูปหน้าปกโครงงาน<br>
              <font color="#d50000 ">หมายเหตุ : นามสกุล .jpg .gif .png </font>
              <div class="file-field">
              <a class="btn-floating purple-gradient mt-0 float-left">
                <i class="fas fa-cloud-upload-alt fa-lg" aria-hidden="true" ></i>
                <input type="file" name="Picture" required>
              </a>
            </div>
            
    </td></tr>
    <tr><td  align="center">

              
    <ul class="stepper stepper-vertical">
      <li class="completed">
        <a href="#!">
          <span class="circle">2</span>
          <span class="label"></span>
        </a>
      </li>

      </li>

    </ul>

    </td><td>  
               อัพโหลดไฟล์โครงงาน<br>
               <font color="#d50000 ">หมายเหตุ : ไฟล์ PDF</font>
              <div class="file-field">
              <a class="btn-floating purple-gradient mt-0 float-left">
                <i class="fas fa-cloud-upload-alt fa-lg" aria-hidden="true" ></i>
                <input type="file"   name="Pdf" required>
              </a>
            </div>





 




            
            
    </td></tr>
    <Table></form> </center><br><br>
		<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
			<button type="submit" name="edit_user" id="submit" value="Submit" class="btn btn-primary">ยืนยัน</button>
		</div>
	</div>
</div>
</form>
</div>
</body>
</html>
