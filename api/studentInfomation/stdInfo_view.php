<?php

include('../config/connect.php');
$student = $_SESSION['mem'];
$sql = "SELECT * FROM users INNER JOIN profile ON users.Username=profile.CreatedBy WHERE users.Id='$student'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($row["ImgUrl"]!=null){
        $imgUrl_fix = $row["ImgUrl"];
      }else{
        $imgUrl_fix = 'fix_user_img.png';
      }
      echo "
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
