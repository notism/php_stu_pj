<?php

include('../config/connect.php');

$sql = "SELECT projectinfo.Id,projectinfo.ProjectName,projectinfo.Type,projectinfo.CreatedDate,projectinfo.Description,projectinfo.Status,projectinfo.File,projectinfo.View, users.Prefix, users.Firstname, users.Lastname FROM projectinfo LEFT JOIN users ON users.Id=projectinfo.Advisor";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($row["Type"]=='สังคม'){
        $classType = 'danger';
      }else if($row["Type"]=='การศึกษา'){
        $classType = 'success';
      }else if($row["Type"]=='ธุรกิจ'){
        $classType = 'primary';
      }else{
        $classType = 'info';
      }
      if($row["Status"]==='รออนุมัติ'){
        echo "<tr data-toggle='tooltip' title=".$row["Description"].">
        <td align='left'>".$row["Id"]."</td>
        <td align='left'>".$row["ProjectName"]."</td>
        <td align='left'><span class='badge badge-pill  badge-".$classType."'>".$row["Type"]."</span></td>
        <td align='left'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]."</td>
        <td align='left'>".$row["File"]."</td>
        <td align='left'>".date("d-m-Y", strtotime($row["CreatedDate"]))."</td>
        <td align='left'>".$row["View"]."</td>
        <td>
        <button type='button' class='btn btn-warning btn-block' data-toggle='modal' data-target='#pendingModel' data-id=".$row["Id"]." data-name=".$row["ProjectName"].">".$row["Status"]."</button>
        </td>
        </tr>";
      }else if($row["Status"]==='อนุมัติแล้ว'){
        echo "<tr data-toggle='tooltip' title=".$row["Description"].">
        <td align='left'>".$row["Id"]."</td>
        <td align='left'>".$row["ProjectName"]."</td>
        <td align='left'><span class='badge badge-pill badge-".$classType."'>".$row["Type"]."</span></td>
        <td align='left'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]."</td>
        <td align='left'>".$row["File"]."</td>
        <td align='left'>".date("d-m-Y", strtotime($row["CreatedDate"]))."</td>
        <td align='left'>".$row["View"]."</td>
        <td>
        <button type='button' class='btn btn-success btn-block' data-toggle='modal' data-target='#acceptModel' data-id=".$row["Id"]." data-name=".$row["ProjectName"].">".$row["Status"]."</button>
        </td>
        </tr>";
      }else if($row["Status"]==='ไม่อนุมัติ'){
        echo "<tr data-toggle='tooltip' title=".$row["Description"].">
        <td align='left'>".$row["Id"]."</td>
        <td align='left'>".$row["ProjectName"]."</td>
        <td align='left'><span class='badge  badge-pill badge-".$classType."'>".$row["Type"]."</span></td>
        <td align='left'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]."</td>
        <td align='left'>".$row["File"]."</td>
        <td align='left'>".date("d-m-Y", strtotime($row["CreatedDate"]))."</td>
        <td align='left'>".$row["View"]."</td>
        <td>
        <button type='button' class='btn btn-danger btn-block' data-toggle='modal' data-target='#unacceptModel' data-id=".$row["Id"]." data-name=".$row["ProjectName"].">".$row["Status"]."</button>
        </td>
        </tr>";
      }
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
