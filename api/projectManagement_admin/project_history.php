<?php

include('../config/connect.php');
$advisor_s = $_SESSION['userlogin']["Id"];
$sql = "SELECT * FROM project_update_history LEFT JOIN projectinfo ON projectinfo.Id=project_update_history.ProjectId LEFT JOIN users ON users.Id=project_update_history.UpdateBy ORDER BY updateId DESC";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($row["Status_update"]=='ไม่อนุมัติ'){
        $classType = 'danger';
        $classIcon = 'times';
      }else if($row["Status_update"]=='อนุมัติแล้ว'){
        $classType = 'success';
        $classIcon = 'check';
      }else if($row["Status_update"]=='รออนุมัติ'){
        $classType = 'warning';
      }

        echo "<tr data-toggle='tooltip' title=".$row["Description"]." class='table-light'>
        <td align='left'>
          <div class='d-flex w-100 justify-content-between'>
          <h5 class='mb-1'>".$row["ProjectName"]."</h5>
          <small><h4><span class='badge badge-pill badge-".$classType."'><i class='fas fa-".$classIcon."'></i> ".$row["Status_update"]."</span></small>
          </div>
          <small>อัพเดตเมื่อวันที่ ".date("d M Y ณ เวลา H:i", strtotime($row["UpdateDate"]))." น. โดย ".$row["Username"]."</small>
          <div class='dropdown-divider'></div>
        </td>
        </tr>";
    }
} 
$db->close();
?>
