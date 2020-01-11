<?php
	session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
	}
	$preset =rand();

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
input[type=password], select {
  width: 55%;
  height: 45px;
  px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #d3d3d3;
  border-radius: 4px;
  box-sizing: border-box;
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
					<h3 class="card-title">แก้ไขรหัสผ่าน</h3>
						<div class="dropdown-divider"></div>

						<div class="hide" id="add_alert" role="alert" >
							<div id="messages_content" ></div>
						</div>
                        <br>
						<Table width=75% align='right'><tr><td><br><br><h3></h3></td></tr><tr><td>                      
                        <form action="" method="post">
                        <input type='password' name='reset1' placeholder='กรอกรหัสผ่านใหม่'><input type="hidden" name="SM" value="<?php echo $preset; ?>"><br><input type='password' name='reset2' placeholder='กรอกรหัสผ่านใหม่อีกครั้ง'><br>
 </td></tr>
 <tr><td><center><button type="submit" name="submit" class="btn purple-gradient btn-rounded mx-2 " > ยืนยัน </button></form><br><br><br>

</center></td></tr>
 
 
 <?php 
 
 if(isset($_POST["submit"])){

       if($_POST["reset1"]==$_POST["reset2"]){
        $P = md5($_POST['reset1']);
        include('../config/connect.php');
        $sql = "UPDATE users
        SET Password = '".$P."'        
        WHERE Id = '".$_SESSION['userlogin']['Id']."'";
        if ($db->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('เปลี่ยนรหัสผ่านเรียบร้อยแล้ว');</script>";
                }
       }else{
        echo "<tr><td ><p Style='cursor: pointer;border-left: solid 3px #ffbb33;background-color:#fffde7;width:60%' ><br>&nbsp; หมายเหตุ : รหัสผ่านไม่ตรงกัน ตรวจสอบอีกครั้ง <br><br></p></td></tr>";
                            
       }






 }
 
 
 ?>
 
 
 
 
 
 
 </Table>
                         

                    
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
