<?php

include('../config/connect.php');

$sql = "SELECT * FROM projectinfo WHERE DATE(CreatedDate)=CURDATE()" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
      $row_cnt = $result->num_rows;
      echo $row_cnt;
} else {
    echo "0";
}
$db->close();
?>
