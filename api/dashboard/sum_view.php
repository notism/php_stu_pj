<?php

include('../config/connect.php');

$sql = "SELECT SUM(View) as SUM_VIEW FROM projectinfo" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row['SUM_VIEW'];
  }
} else {
    echo "0";
}
$db->close();
?>
