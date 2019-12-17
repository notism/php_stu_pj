<?php

include('../config/connect.php');
$student = $_SESSION['userlogin']['Id'];
$sql = "SELECT * FROM users INNER JOIN profile ON users.Username=profile.CreatedBy WHERE users.Id='$student'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
        <img src='http://placehold.it/200x200' alt='...' class='img-thumbnail'><br/><br/>
          <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#editUserModel' data-id=".$row["Id"]." data-username=".$row["Username"]." data-email=".$row["Email"]."><i class='fas fa-pen'></i> แก้ไขข้อมูล</button>
        <h3>".$row["Firstname"]." ".$row["Lastname"]."</h3>
        <p>
        <h5><b>ชื่อผู้ใช้</b> ".$row["Username"]." <b>GPAX</b> ".$row["GPAX"]."</h5>
        <h5><b>สาขาวิชา</b> ".$row["Faculty"]." <b>สำนักวิชา</b> ".$row["Department"]."</h5>
        <h5><b>ชื่อปริญญา</b> ".$row["Degree"]."</h5>
        </p>
        <div class='dropdown-divider'></div>
        <h5><b>วันเกิด</b> ".date("d-m-Y", strtotime($row["Birthday"]))."</h5>
        <h5><b>สัญชาติ/เชื้อชาติ</b> ".$row["ReligionNation"]."</h5>
        <h5><b>การเกณฑ์ทหาร</b> ".$row["Military"]."</h5>
        <div class='dropdown-divider'></div>
        <h5><b>โทรศัพท์</b> ".$row["Tel"]." <b>อีเมล</b> ".$row["Email"]."</h5>

        ";
    }
} else {
    echo "0 results";
}
$db->close();
?>
