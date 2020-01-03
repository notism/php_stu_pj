<?php

include('../config/connect.php');
$advisor_s = $_SESSION['userlogin']["Id"];
$sql = "SELECT * FROM projectinfo WHERE Advisor='$advisor_s' AND Status='รออนุมัติ'";
// $sql = "SELECT * FROM projectinfo WHERE Status='รออนุมัติ'";
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
      if($row["File"]!=null){
        echo "<tr data-toggle='tooltip' title=".$row["ProjectName"].">
        <td align='left'>".$row["Id"]."</td>
        <td align='left'>".$row["ProjectName"]." <span class='badge badge-pill badge-".$classType."'>".$row["Type"]."</span></td>
        <td align='left'>".$row["Description"]."</td>
        <td align='left'>".date("d-m-Y", strtotime($row["CreatedDate"]))."</td>
        <td align='left'><a href='../api/project_advisor/pdf_download.php?file=".$row["File"]."'>Download</a></td>
        <td>
        <button type='button' class='btn btn-warning btn-block' data-toggle='modal' data-target='#pendingModel' data-id=".$row["Id"]." data-name=".$row["ProjectName"].">".$row["Status"]."</button>
        </td>
        </tr>";
      }else{
        echo "<tr data-toggle='tooltip' title=".$row["ProjectName"].">
        <td align='left'>".$row["Id"]."</td>
        <td align='left'>".$row["ProjectName"]." <span class='badge badge-pill badge-".$classType."'>".$row["Type"]."</span></td>
        <td align='left'>".$row["Description"]."</td>
        <td align='left'>".date("d-m-Y", strtotime($row["CreatedDate"]))."</td>
        <td align='left'>ไม่พบไฟล์</td>
        <td>
        <button type='button' class='btn btn-warning btn-block' data-toggle='modal' data-target='#pendingModel' data-id=".$row["Id"]." data-name=".$row["ProjectName"].">".$row["Status"]."</button>
        </td>
        </tr>";
      }

    }
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
