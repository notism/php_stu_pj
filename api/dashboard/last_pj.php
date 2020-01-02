<?php

include('../config/connect.php');

$sql = "SELECT ProjectName,CreatedDate FROM projectinfo ORDER BY CreatedDate DESC
LIMIT 1" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row['ProjectName'];
  }
} else {
    echo "0";
}
$db->close();
?>
