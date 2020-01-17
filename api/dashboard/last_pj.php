<?php

include('../config/connect.php');

$sql = "SELECT Id,ProjectName,CreatedDate FROM projectinfo ORDER BY CreatedDate DESC
LIMIT 1" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<a style='color:indigo;' href='View.php?Proid=".$row['Id']."'>".$row['ProjectName']."</a>";
  }
} else {
    echo "0";
}
$db->close();
?>
