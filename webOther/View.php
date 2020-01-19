
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

    if($_GET["Proid"]!=""){
   $sql = "UPDATE projectinfo SET View ='".$Num."' WHERE Id = '".$URL."'";
                if ($db->query($sql) === TRUE) {
    }
}

    include('../config/qrcode.php');
 // $QRcode = '<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=https://localhost/test/webStudent/View.php?Pid='.$URL.'/&choe=UTF-8" title="Link to my Website" width=100%/>';
?>


</head>
<body onload="myHide();">
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#56187f;">

<!-- Navbar brand -->
<a class="navbar-brand" href="#">WEB-POSONAL</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

<ul class="navbar-nav mr-auto">
	<li class="nav-item active">
	  <a class="nav-link" href="index.php"><i class="fas fa-home "></i> หน้าแรก
	  </a>
	</li>
  <li class="nav-item ">
	  <a class="nav-link" href=../login.php><i class="fas fa-sign-in-alt "></i> ล็อกอิน
	  </a>
	</li>

  </ul>



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
        <!-- Hoverable -->
<br><br><br><br><br>
<img src="../img/<?php echo $Pic; ?>" class="img-fluid  hoverable" ><br><br><br><br>
      </div>

    </div>
    <div class="col-md-5 d-flex align-items-center" Style='cursor: pointer;border-Top: solid 5px #4285f4;background-color:#dfeefd'>
      <div >
      <br><br>
        <h3 class="font-weight-bold mb-4" align="center"><?php echo $N; ?></h3>

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

echo $space.$row1["Prefix"]." ".$row1["Firstname"]." ".$row1["Lastname"]."<Br>";
 }

 ?>
<br>
<center><p style="cursor: pointer;border: solid 0px #212121;width:30%"><?php echo $QRcode; ?></p></center>

<br>
<center>
<Table width="80%">
<tr>
<td>

</td>
</tr>
</table>
</center>
<br>

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
