<?php

include('../config/connect.php');

// วิศวะกรรมศาสตร์
$sql = "SELECT * FROM projectinfo JOIN users JOIN profile WHERE projectinfo.CreatedBy=users.Id AND users.Username=profile.CreatedBy AND Faculty=1" ;
$result = $db->query($sql);
if ($result->num_rows > 0) {
    $row_01 = $result->num_rows;
} else {
    $row_01=0;
}

// แพทยศาสตร์
$sql2 = "SELECT * FROM projectinfo JOIN users JOIN profile WHERE projectinfo.CreatedBy=users.Id AND users.Username=profile.CreatedBy AND Faculty=2" ;
$result2 = $db->query($sql2);
if ($result2->num_rows > 0) {
    $row_02= $result2->num_rows;
} else {
    $row_02=0;
}

// เทคโนโลยีสังคม
$sql3 = "SELECT * FROM projectinfo JOIN users JOIN profile WHERE projectinfo.CreatedBy=users.Id AND users.Username=profile.CreatedBy AND Faculty=3" ;
$result3 = $db->query($sql3);
if ($result3->num_rows > 0) {
    $row_03 = $result3->num_rows;
} else {
    $row_03=0;
}

// สาธารณสุขศาสตร์
$sql4 = "SELECT * FROM projectinfo JOIN users JOIN profile WHERE projectinfo.CreatedBy=users.Id AND users.Username=profile.CreatedBy AND Faculty=4" ;
$result4 = $db->query($sql4);
if ($result4->num_rows > 0) {
    $row_04 = $result4->num_rows;
} else {
    $row_04=0;
}

// พยาบาลศาสตร์
$sql5 = "SELECT * FROM projectinfo JOIN users JOIN profile WHERE projectinfo.CreatedBy=users.Id AND users.Username=profile.CreatedBy AND Faculty=5" ;
$result5 = $db->query($sql5);
if ($result5->num_rows > 0) {
    $row_05 = $result5->num_rows;
} else {
    $row_05=0;
}

// วิทยศาสตร์
$sql6 = "SELECT * FROM projectinfo JOIN users JOIN profile WHERE projectinfo.CreatedBy=users.Id AND users.Username=profile.CreatedBy AND Faculty=6" ;
$result6 = $db->query($sql6);
if ($result6->num_rows > 0) {
    $row_06 = $result6->num_rows;
} else {
    $row_06=0;
}

// เทคโนโลยีการเกษตร
$sql7 = "SELECT * FROM projectinfo JOIN users JOIN profile WHERE projectinfo.CreatedBy=users.Id AND users.Username=profile.CreatedBy AND Faculty=7" ;
$result7 = $db->query($sql7);
if ($result7->num_rows > 0) {
    $row_07 = $result7->num_rows;
} else {
    $row_07=0;
}

// ทันตแพทยศาสตร์
$sql8 = "SELECT * FROM projectinfo JOIN users JOIN profile WHERE projectinfo.CreatedBy=users.Id AND users.Username=profile.CreatedBy AND Faculty=8" ;
$result8 = $db->query($sql8);
if ($result8->num_rows > 0) {
    $row_08 = $result8->num_rows;
} else {
    $row_08=0;
}

$dataUploadfac = array(
	array("label"=> 'วิศวะกรรมศาสตร์', "y"=> $row_01),
	array("label"=> 'แพทยศาสตร์', "y"=> $row_02),
	array("label"=> 'เทคโนโลยีสังคม', "y"=> $row_03),
	array("label"=> 'สาธารณสุขศาสตร์', "y"=> $row_04),
	array("label"=> 'พยาบาลศาสตร์', "y"=> $row_05),
	array("label"=> 'วิทยศาสตร์', "y"=> $row_06),
	array("label"=> 'เทคโนโลยีการเกษตร', "y"=> $row_07),
	array("label"=> 'ทันตแพทยศาสตร์', "y"=> $row_08)
);
$db->close();
?>
