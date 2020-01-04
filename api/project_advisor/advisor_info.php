<?php

include('../config/connect.php');
$student = $_SESSION['userlogin']['Id'];
$sql = "SELECT * FROM users INNER JOIN profile ON users.Username=profile.CreatedBy WHERE users.Id='$student'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
        <div class='text-right'>
        <button type='button' class='btn btn-primary'
        data-toggle='modal' data-target='#editUserModel'
        data-username=".$row["Username"]." data-email=".$row["Email"]."  data-fn=".$row["Firstname"]."  data-ln=".$row["Lastname"]."
        data-prefix=".$row["Prefix"]." data-tel=".$row["Tel"].">

        <i class='fas fa-pen'></i> แก้ไขข้อมูล</button>
        </div>

        <center>
        <div class='card' style='width: 20%;'>
          <img class='card-img-top' src='../img_user/".$row["ImgUrl"]."' alt='Card image cap'>
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
