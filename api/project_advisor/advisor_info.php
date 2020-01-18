<?php

include('../config/connect.php');
$advisor = $_SESSION['userlogin']['Id'];
$sql = "SELECT * FROM profile LEFT JOIN users ON users.Username=profile.CreatedBy LEFT JOIN fuaculty ON fuaculty.fac_id=profile.Faculty
          LEFT JOIN department ON department.dep_id=profile.Department  WHERE users.Id='$advisor'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["ImgUrl"]!=null){
          $imgUrl_fix = $row["ImgUrl"];
        }else{
          $imgUrl_fix = 'fix_user_img.png';
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
        echo "
        <div class='text-right'>
        <button type='button' class='btn btn-primary'
        data-toggle='modal' data-target='#editUserModel'
        data-username=".$row["Username"]." data-email=".$row["Email"]."  data-fn=".$row["Firstname"]."  data-ln=".$row["Lastname"]."
        data-prefix=".$prefix." data-tel=".$tel.">

        <i class='fas fa-pen'></i> แก้ไขข้อมูล</button>
        </div>

        <center>
        <div class='card' style='width: 20%;'>
          <img class='card-img-top' src='../img_user/".$imgUrl_fix."' alt='Card image cap'>
          <h5 class='card-header bg-info text-white '>คุณ ".$row["Username"]."</h5>
        </div>

        <br/>
        <div class='row'>
          <div class='col'>
          <h5>".$prefix." ".$row["Firstname"]." ".$row["Lastname"]."</h5>
          </div>
        </div>
        <div class='row'>
          <div class='col'>
          <h6>Email: ".$row["Email"]." | โทร. ".$tel."</h6>
          </div>
        </div>
        <div class='row'>
          <div class='col'>
          <small class='form-text text-muted'>สาขา ".$row["dep_name"]." สำนัก ".$row["fac_name"]."</small>
          </div>
        </div>

        ";
    }
} else {
    echo "0 results";
}
$db->close();
?>
