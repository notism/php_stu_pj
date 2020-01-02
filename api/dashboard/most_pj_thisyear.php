<?php

include('../config/connect.php');

$sql = "SELECT ProjectName,View,CreatedDate FROM projectinfo WHERE YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP) ORDER BY View DESC
LIMIT 1" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row['ProjectName'];
  }
} else {
    echo "ไม่มีโครงงาน";
}
$db->close();
?>
