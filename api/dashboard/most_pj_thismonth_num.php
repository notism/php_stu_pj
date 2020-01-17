<?php

include('../config/connect.php');

$sql = "SELECT ProjectName,View,CreatedDate FROM projectinfo WHERE MONTH(CreatedDate)=MONTH(CURRENT_TIMESTAMP) AND YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP) ORDER BY View DESC
LIMIT 1" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row['View'];
  }
} else {
    echo "";
}
$db->close();
?>
