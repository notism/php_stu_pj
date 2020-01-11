<?php

include('../config/connect.php');
$student = $_SESSION['userlogin']['Id'];
$sql = "SELECT * FROM profile LEFT JOIN users ON users.Username=profile.CreatedBy WHERE users.Id='$student'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($row["ImgUrl"]!=null){
        $imgUrl_fix = $row["ImgUrl"];
      }else{
        $imgUrl_fix = 'fix_user_img.png';
      }
      echo "
      <div class='text-right'>
      <button type='button' class='btn btn-primary'
      data-toggle='modal' data-target='#editUserModel'
      data-username=".$row["Username"]." data-email=".$row["Email"]."  data-fn=".$row["Firstname"]."  data-ln=".$row["Lastname"]." data-nation=".$row["Nation"]."
      data-prefix=".$row["Prefix"]." data-tel=".$row["Tel"]." data-bd=".$row["Birthday"]." data-gpax=".$row["GPAX"]." data-religion=".$row["Religion"]." >

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
        <h6>Email: ".$row["Email"]." | โทร. ".$row["Tel"]."</h6>
        </div>
      </div>
      <div class='row'>
        <div class='col'>
        <h6>เกิดเมื่อวันที่ ".date("d M Y", strtotime($row["Birthday"]))." | สัญชาติ/เชื้อชาติ: ".$row["Religion"]."/".$row["Nation"]." | การเกณฑ์ทหาร: ".$row["Military"]."</h6>
        </div>
      </div>
      <div class='row'>
        <div class='col'>
        <small class='form-text text-muted'>GPAX: ".$row["GPAX"]." ".$row["Degree"]."</small>
        <small class='form-text text-muted'>สาขา ".$row["Department"]." สำนัก ".$row["Faculty"]."</small>
        </div>
      </div>

      ";
    }
} else {
    echo "0 results";
}
$db->close();
?>
