<?php

include('../config/connect.php');
$advisor_s = $_SESSION['userlogin']["Id"];
$sql = "SELECT * FROM projectinfo WHERE Advisor='$advisor_s' AND Status='อนุมัติแล้ว'" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
      $row_cnt = $result->num_rows;
      echo $row_cnt;
} else {
    echo "0";
}
$db->close();
?>
