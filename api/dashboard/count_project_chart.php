<?php

include('../config/connect.php');

// Student
$sql = "SELECT * FROM projectinfo WHERE Status='ไม่อนุมัติ'" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
    $row_unaccept = $result->num_rows;
} else {
    $row_unaccept=0;
}

// Admin
$sql2 = "SELECT * FROM projectinfo WHERE Status='อนุมัติแล้ว'" ;
$result2 = $db->query($sql2);
if ($result2->num_rows > 0) {
    $row_accept= $result2->num_rows;
} else {
    $row_accept=0;
}

// Advisor
$sql3 = "SELECT * FROM projectinfo WHERE Status='รออนุมัติ'" ;
$result3 = $db->query($sql3);
if ($result3->num_rows > 0) {
    $row_pending = $result3->num_rows;
} else {
    $row_pending=0;
}

$dataProject = array(
  array("label"=> "รอการดำเนินการ", "y"=> $row_pending),
  array("label"=> "ไม่อนุมัติ", "y"=> $row_unaccept),
  array("label"=> "อนุมัติแล้ว", "y"=> $row_accept),
);
$db->close();
?>
