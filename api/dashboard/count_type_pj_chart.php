<?php

include('../config/connect.php');

// การศึกษา
$sql = "SELECT * FROM projectinfo WHERE Type='การศึกษา'" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
    $row_kl = $result->num_rows;
} else {
    $row_kl=0;
}

// สังคม
$sql2 = "SELECT * FROM projectinfo WHERE Type='สังคม'" ;
$result2 = $db->query($sql2);
if ($result2->num_rows > 0) {
    $row_social= $result2->num_rows;
} else {
    $row_social=0;
}

// ธุรกิจ
$sql3 = "SELECT * FROM projectinfo WHERE Type='ธุรกิจ'" ;
$result3 = $db->query($sql3);
if ($result3->num_rows > 0) {
    $row_business = $result3->num_rows;
} else {
    $row_business=0;
}

// อื่นๆ
$sql4 = "SELECT * FROM projectinfo WHERE Type!='การศึกษา' AND Type!='สังคม' AND Type!='ธุรกิจ'" ;
$result4 = $db->query($sql4);
if ($result4->num_rows > 0) {
    $row_other = $result4->num_rows;
} else {
    $row_other=0;
}

$dataPoints = array(
	array("label"=> "ธุรกิจ", "y"=> $row_business),
	array("label"=> "สังคม", "y"=> $row_social),
	array("label"=> "การศึกษา", "y"=> $row_kl),
	array("label"=> "อื่นๆ", "y"=> $row_other)
);
$db->close();
?>
