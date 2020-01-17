<?php

include('../config/connect.php');

$sql = "SELECT Id,ProjectName,Star,CreatedDate FROM projectinfo ORDER BY Star DESC
LIMIT 1" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<a style='color:black;' href='View.php?Proid=".$row['Id']."'>".$row['ProjectName']."</a>";
  }
} else {
    echo "ไม่มีโครงงาน";
}
$db->close();
?>
