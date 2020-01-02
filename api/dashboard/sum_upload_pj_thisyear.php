<?php

include('../config/connect.php');

// มกราคม
$sql = "SELECT CreatedDate FROM projectinfo WHERE MONTH(CreatedDate)=1 AND YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP)" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
    $row_01 = $result->num_rows;
} else {
    $row_01=0;
}

// กุมภาพันธ์
$sql2 = "SELECT CreatedDate FROM projectinfo WHERE MONTH(CreatedDate)=2 AND YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP)" ;
$result2 = $db->query($sql2);
if ($result2->num_rows > 0) {
    $row_02= $result2->num_rows;
} else {
    $row_02=0;
}

// มีนาคม
$sql3 = "SELECT CreatedDate FROM projectinfo WHERE MONTH(CreatedDate)=3 AND YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP)" ;
$result3 = $db->query($sql3);
if ($result3->num_rows > 0) {
    $row_03 = $result3->num_rows;
} else {
    $row_03=0;
}

// เมษายน
$sql4 = "SELECT CreatedDate FROM projectinfo WHERE MONTH(CreatedDate)=4 AND YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP)" ;
$result4 = $db->query($sql4);
if ($result4->num_rows > 0) {
    $row_04 = $result4->num_rows;
} else {
    $row_04=0;
}

// พฤษภาคม
$sql5 = "SELECT CreatedDate FROM projectinfo WHERE MONTH(CreatedDate)=5 AND YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP)" ;
$result5 = $db->query($sql5);
if ($result5->num_rows > 0) {
    $row_05 = $result5->num_rows;
} else {
    $row_05=0;
}

// มิถุนายน
$sql6 = "SELECT CreatedDate FROM projectinfo WHERE MONTH(CreatedDate)=6 AND YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP)" ;
$result6 = $db->query($sql6);
if ($result6->num_rows > 0) {
    $row_06 = $result6->num_rows;
} else {
    $row_06=0;
}

// กรกฎาคม
$sql7 = "SELECT CreatedDate FROM projectinfo WHERE MONTH(CreatedDate)=7 AND YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP)" ;
$result7 = $db->query($sql7);
if ($result7->num_rows > 0) {
    $row_07 = $result7->num_rows;
} else {
    $row_07=0;
}

// สิงหาคม
$sql8 = "SELECT CreatedDate FROM projectinfo WHERE MONTH(CreatedDate)=8 AND YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP)" ;
$result8 = $db->query($sql8);
if ($result8->num_rows > 0) {
    $row_08 = $result8->num_rows;
} else {
    $row_08=0;
}

// กันยายน
$sql9 = "SELECT CreatedDate FROM projectinfo WHERE MONTH(CreatedDate)=9 AND YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP)" ;
$result9 = $db->query($sql9);
if ($result9->num_rows > 0) {
    $row_09 = $result9->num_rows;
} else {
    $row_09=0;
}

// ตุลาคม
$sql10 = "SELECT CreatedDate FROM projectinfo WHERE MONTH(CreatedDate)=10 AND YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP)" ;
$result10 = $db->query($sql10);
if ($result10->num_rows > 0) {
    $row_010 = $result10->num_rows;
} else {
    $row_010=0;
}

// พฤศจิกายน
$sql11 = "SELECT CreatedDate FROM projectinfo WHERE MONTH(CreatedDate)=11 AND YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP)" ;
$result11 = $db->query($sql11);
if ($result11->num_rows > 0) {
    $row_011 = $result11->num_rows;
} else {
    $row_011=0;
}

// ธันวาคม
$sql12 = "SELECT CreatedDate FROM projectinfo WHERE MONTH(CreatedDate)=12 AND YEAR(CreatedDate)=YEAR(CURRENT_TIMESTAMP)" ;
$result12 = $db->query($sql12);
if ($result12->num_rows > 0) {
    $row_012 = $result12->num_rows;
} else {
    $row_012=0;
}

$dataUpload = array(
	array("y" => $row_01, "label" => "มกราคม"),
	array("y" => $row_02, "label" => "กุมภาพันธ์"),
	array("y" => $row_03, "label" => "มีนาคม"),
	array("y" => $row_04, "label" => "เมษายน"),
	array("y" => $row_05, "label" => "พฤษภาคม"),
	array("y" => $row_06, "label" => "มิถุนายน"),
	array("y" => $row_07, "label" => "กรกฎาคม"),
	array("y" => $row_08, "label" => "สิงหาคม"),
	array("y" => $row_09, "label" => "กันยายน"),
	array("y" => $row_010, "label" => "ตุลาคม"),
	array("y" => $row_011, "label" => "พฤศจิกายน"),
	array("y" => $row_012, "label" => "ธันวาคม")
);
$db->close();
?>
