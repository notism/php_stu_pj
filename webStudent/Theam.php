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

<style type="text/css">
div.img-resize img {
	width: auto;
	height: auto;
}

div.img-resize {
	width: 64px;
	height: 64px;
	overflow: hidden;
	text-align: center;
}
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
                    <h3 class="card-title">ธีมของฉัน</h3>
						<div class="dropdown-divider"></div>
						<!-- Alert -->
						<div class="hide" id="add_alert" role="alert" >
							<div id="messages_content" ></div>
						</div>
					<!-- End Alert -->
<?php	
error_reporting(~E_NOTICE);
if($_POST["Theme"]!=""){
$T = $_POST["Theme"];
}else{
$T = 1;


?>
<div class="container">
  <div class="row" align="center">
    <div class="col-lg">
      <h5>Paper Theme</h5>
    <br>
    <form   method="Post" action="Team.php" >
    <Table style="width:70%;height:350px" onclick="" id="rdo1">
    <tr style="width:70%;height:100pxcursor: pointer;border: solid 2px #212121;background-image:url('../img/Paper.jpg');box-shadow: 0 30px 50px rgba(0,0,0,.3);height:100%"><td>
    <center><input type="hidden" name="Theme" value="paper.jpg"><button type='submit' class='btn purple-gradient ' data-toggle="modal" data-target="#exampleModalCenter" ><h8>เลือก</h8></button><center></td><tr></Table></form>




    </div>
    <div class="col-lg">
    <h5>Triangle Theme</h5>
     <br>
     <form   method="post" action="Team.php" >
    <Table style="width:70%;height:350px">
    <tr style="width:70%;height:100pxcursor: pointer;border: solid 2px #212121;background-image:url('../img/line.jpg');box-shadow: 0 30px 50px rgba(0,0,0,.3);height:100%"><td>
    <center><input type="hidden" name="Theme" value="line.jpg"><button type='submit' class='btn purple-gradient ' data-toggle="modal" data-target="#exampleModalCenter" ><h8>เลือก</h8></button><center></td><tr></Table></form>



    </div>
    <div class="col-lg">
    <h5>Pineapple Theme</h5>
      <br>
    <Table style="width:70%;height:350px">
    <tr style="width:70%;height:100pxcursor: pointer;border: solid 2px #212121;background-image:url('../img/Pineapple.jpg');box-shadow: 0 30px 50px rgba(0,0,0,.3);height:100%"><td></td><tr></Table>



    </div>

    
    
    <div class="container">
    <br><br>
  <div class="row" align="center">
    <div class="col-lg">
      <h5>Paper Theme</h5>
    <br>
    <Table style="width:70%;height:350px">
    <tr style="width:70%;height:100pxcursor: pointer;border: solid 2px #212121;background-image:url('../img/box.jpg');box-shadow: 0 30px 50px rgba(0,0,0,.3);height:100%"><td></td><tr></Table>




    </div>
    <div class="col-lg">
    <h5>Triangle Theme</h5>
     <br>
    <Table style="width:70%;height:350px">
    <tr style="width:70%;height:100pxcursor: pointer;border: solid 2px #212121;background-image:url('../img/line.jpg');box-shadow: 0 30px 50px rgba(0,0,0,.3);height:100%"><td></td><tr></Table>



    </div>
    <div class="col-lg">
    <h5>Pineapple Theme</h5>
      <br>
    <Table style="width:70%;height:350px">
    <tr style="width:70%;height:100pxcursor: pointer;border: solid 2px #212121;background-image:url('../img/Pineapple.jpg');box-shadow: 0 30px 50px rgba(0,0,0,.3);height:100%"><td></td><tr></Table>



    </div>
<?php
} 
$I =$_SESSION['userlogin']["Id"];
if($T!="1"){
    include('../config/connect.php');
    $sql = "UPDATE users
    SET Team='".$T."'
    WHERE id = '".$I."'";
    if ($db->query($sql) === TRUE) {
     echo ' <div id="hidepage2" style="display:block;" align="center" width="100%">
     <br>
     <IMG SRC="loading.gif" WIDTH="100" HEIGHT="100" BORDER="0" ALT=""><br>
     กรุณารอสักครู่...
     </div>

     <div id="hidepage" style="display:none;">
     <table>
     <tr><td>หน้าเพจโหลดเสร็จแล้ว</td></tr>
     </table>
     </div>';
     

    }else{
        echo "no"+$sql;
    }

    session_reset($Team);
    echo "yes".$T.$Team ;
    echo "<script>window.location.href = 'Team.php';</script>";

?>

       
    <div class="container">
  <div class="row" align="center">
    <div class="col-lg">
      <h5>Paper Theme</h5>
    <br>
    <form   method="Post" action="Team.php" >
    <Table style="width:70%;height:350px" onclick="" id="rdo1">
    <tr style="width:70%;height:100pxcursor: pointer;border: solid 2px #212121;background-image:url('../img/Paper.jpg');box-shadow: 0 30px 50px rgba(0,0,0,.3);height:100%"><td>
    <center><input type="hidden" name="Theme" value="paper.jpg"><button type='submit' class='btn purple-gradient ' data-toggle="modal" data-target="#exampleModalCenter" ><h8>เลือก</h8></button><center></td><tr></Table></form>




    </div>
    <div class="col-lg">
    <h5>Triangle Theme</h5>
     <br>
     <form   method="post" action="Team.php" >
    <Table style="width:70%;height:350px">
    <tr style="width:70%;height:100pxcursor: pointer;border: solid 2px #212121;background-image:url('../img/line.jpg');box-shadow: 0 30px 50px rgba(0,0,0,.3);height:100%"><td>
    <center><input type="hidden" name="Theme" value="line.jpg"><button type='submit' class='btn purple-gradient ' data-toggle="modal" data-target="#exampleModalCenter" ><h8>เลือก</h8></button><center></td><tr></Table></form>



    </div>
    <div class="col-lg">
    <h5>Pineapple Theme</h5>
      <br>
    <Table style="width:70%;height:350px">
    <tr style="width:70%;height:100pxcursor: pointer;border: solid 2px #212121;background-image:url('../img/Pineapple.jpg');box-shadow: 0 30px 50px rgba(0,0,0,.3);height:100%"><td></td><tr></Table>



    </div>

    
    
    <div class="container">
    <br><br>
  <div class="row" align="center">
    <div class="col-lg">
      <h5>Paper Theme</h5>
    <br>
    <Table style="width:70%;height:350px">
    <tr style="width:70%;height:100pxcursor: pointer;border: solid 2px #212121;background-image:url('../img/box.jpg');box-shadow: 0 30px 50px rgba(0,0,0,.3);height:100%"><td></td><tr></Table>




    </div>
    <div class="col-lg">
    <h5>Triangle Theme</h5>
     <br>
    <Table style="width:70%;height:350px">
    <tr style="width:70%;height:100pxcursor: pointer;border: solid 2px #212121;background-image:url('../img/line.jpg');box-shadow: 0 30px 50px rgba(0,0,0,.3);height:100%"><td></td><tr></Table>



    </div>
    <div class="col-lg">
    <h5>Pineapple Theme</h5>
      <br>
    <Table style="width:70%;height:350px">
    <tr style="width:70%;height:100pxcursor: pointer;border: solid 2px #212121;background-image:url('../img/Pineapple.jpg');box-shadow: 0 30px 50px rgba(0,0,0,.3);height:100%"><td></td><tr></Table>



    </div>




<?php
}
 ?>
                        
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
