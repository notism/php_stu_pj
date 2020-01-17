<?php

include('../config/connect.php');
$advisor_s = $_SESSION['userlogin']["Id"];
$sql = "SELECT * FROM project_update_history LEFT JOIN projectinfo ON projectinfo.Id=project_update_history.ProjectId WHERE UpdateBy='$advisor_s' ORDER BY updateId DESC";
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

        echo "<tr data-toggle='tooltip' title=".$row["Description"]." >
        <td align='left'>
          <div class='d-flex w-100 justify-content-between'>
          <h5>".$row["ProjectName"]."</h5>
          <small><h4><span class='badge badge-pill badge-".$classType."'><i class='fas fa-".$classIcon."'></i> ".$row["Status_update"]."</span></small>
          </div>
          <small>อัพเดตเมื่อวันที่ ".date("d M Y ณ เวลา H:i", strtotime($row["UpdateDate"]))." น.</small>
        </td>
        </tr>";
    }
} else {
    echo "0 results";
}
$db->close();
?>

<!--
<td>
<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#editUserModel' data-id=".$row["Id"]." data-username=".$row["Username"]." data-email=".$row["Email"]."><i class='fas fa-pen'></i></button>
</td>
<td>
<button type='button' class='btn btn-danger'data-toggle='modal' data-target='#deleteUserModel' data-del_id=".$row["Id"]." data-username=".$row["Username"]."><i class='fas fa-trash-alt'></i></button>
</td> -->


<!-- echo "<tr>
<td align='left'>".$row["Id"]."</td>
<td align='left'>".$row["ProjectName"]."</td>
<td align='left'>".$row["Type"]."</td>
<td align='left'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]."</td>
<td align='left'>".$row["File"]."</td>
<td align='left'>".date("d-m-Y", strtotime($row["CreatedDate"]))."</td>
<td align='left'>".$row["View"]."</td>

</tr>"; -->
