<?php

include('../config/connect.php');

$sql = "SELECT ProjectName,Star,CreatedDate FROM projectinfo ORDER BY Star DESC
LIMIT 1" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row['Star'];
  }
} else {
    echo "ไม่มีโครงงาน";
}
$db->close();
?>
