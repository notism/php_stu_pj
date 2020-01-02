<?php

include('../config/connect.php');

// Student
$sql = "SELECT * FROM users WHERE Role='student'" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
    $row_std = $result->num_rows;
} else {
    $row_std=0;
}

// Admin
$sql2 = "SELECT * FROM users WHERE Role='admin'" ;
$result2 = $db->query($sql2);
if ($result2->num_rows > 0) {
    $row_admin= $result2->num_rows;
} else {
    $row_admin=0;
}

// Advisor
$sql3 = "SELECT * FROM users WHERE Role='advisor'" ;
$result3 = $db->query($sql3);
if ($result3->num_rows > 0) {
    $row_advisor = $result3->num_rows;
} else {
    $row_advisor=0;
}

$dataUsers = array(
  array("label"=> "ผู้ดูแลระบบ", "y"=> $row_admin),
  array("label"=> "นักศึกษา", "y"=> $row_std),
  array("label"=> "อาจารย์", "y"=> $row_advisor),
);
$db->close();
?>
