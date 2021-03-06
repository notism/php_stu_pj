<?php

include('../config/connect.php');
$student = $_SESSION['userlogin']['Id'];
$sql = "SELECT * FROM profile LEFT JOIN users ON users.Username=profile.CreatedBy LEFT JOIN fuaculty ON fuaculty.fac_id=profile.Faculty
          LEFT JOIN department ON department.dep_id=profile.Department  WHERE users.Id='$student'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($row["ImgUrl"]!=null){
        $imgUrl_fix = $row["ImgUrl"];
      }else{
        $imgUrl_fix = 'fix_user_img.png';
      }
      if($row["Nation"]!=null){
        $nation = $row["Nation"];
      }else{
        $nation = '-';
      }
      if($row["Prefix"]!=null){
        $prefix = $row["Prefix"];
      }else{
        $prefix = '-';
      }
      if($row["Tel"]!=null){
        $tel = $row["Tel"];
      }else{
        $tel = '-';
      }
      if($row["Birthday"]!=null){
        $bd = $row["Birthday"];
      }else{
        $bd = '';
      }
      if($row["GPAX"]!=null){
        $gpax = $row["GPAX"];
      }else{
        $gpax = '-';
      }
      if($row["Religion"]!=null){
        $religion = $row["Religion"];
      }else{
        $religion = '-';
      }
      if($row["Degree"]!=null){
        $degree = $row["Degree"];
      }else{
        $degree = '-';
      }
      if($row["Religion"]!=null){
        $Religion = $row["Religion"];
      }else{
        $Religion = '-';
      }
      if($row["Nation"]!=null){
        $Nation = $row["Nation"];
      }else{
        $Nation = '-';
      }
      if($row["Tel"]!=null){
        $Tel = $row["Tel"];
      }else{
        $Tel = '-';
      }
      if($row["GPAX"]!=null){
        $GPAX = $row["GPAX"];
      }else{
        $GPAX = '-';
      }
      if($row["dep_name"]!=null){
        $dep_name = $row["dep_name"];
      }else{
        $dep_name = '-';
      }
      if($row["fac_name"]!=null){
        $fac_name = $row["fac_name"];
      }else{
        $fac_name = '-';
      }

      echo "
      <div class='text-right'>
      <button type='button' class='btn btn-primary'
      data-toggle='modal' data-target='#editUserModel'
      data-usernamex=".$row["Username"]." data-emailx=".$row["Email"]."  data-fnx=".$row["Firstname"]."  data-lnx=".$row["Lastname"]." data-nationx=".$nation."  data-prefixx=".$prefix." data-telx=".$tel." data-bdx=".$bd."
      data-gpaxx=".$gpax." data-religionx=".$religion." data-degree=".$degree.">

      <i class='fas fa-pen'></i> แก้ไขข้อมูล</button>
      </div>

      <center>
      <div class='card' style='width: 20%;'>
        <img class='card-img-top' src='../img_user/".$imgUrl_fix."' alt='Card image cap'>
        <h5 class='card-header'>คุณ ".$row["Username"]."</h5>
      </div>

      <br/>
      <div class='row'>
        <div class='col'>
        <h5>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]."</h5>
        </div>
      </div>
      <div class='row'>
        <div class='col'>
        <h6>Email: ".$row["Email"]." | โทร. ".$Tel."</h6>
        </div>
      </div>
      <div class='row'>
        <div class='col'>
        <h6>เกิดเมื่อวันที่ ".date("d M Y", strtotime($row["Birthday"]))." | สัญชาติ/เชื้อชาติ: ".$Religion."/".$Nation."</h6>
        </div>
      </div>
      <div class='row'>
        <div class='col'>
        <small class='form-text text-muted'>GPAX: ".$GPAX." ".$row["Degree"]."</small>
        <small class='form-text text-muted'>สาขา ".$dep_name." สำนัก ".$fac_name."</small>
        </div>
      </div>

      ";
    }
} 
$db->close();
?>
