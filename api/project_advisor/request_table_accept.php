<?php

include('../config/connect.php');
$advisor_s = $_SESSION['userlogin']["Id"];
$sql = "SELECT * FROM users JOIN projectinfo WHERE users.Id=projectinfo.CreatedBy AND Advisor='$advisor_s' AND Status='อนุมัติแล้ว'";
// $sql = "SELECT * FROM projectinfo WHERE Status='อนุมัติแล้ว'";
$result = $db->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $proid = $row["Id"];
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
        <td align='left'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]." | ".$row["Username"]."</td>
        <td align='left'>".date("d-m-Y", strtotime($row["CreatedDate"]))."</td>
        <td align='left'><a href='View.php?Proid=".$proid."'>เพิ่มเติม</a></td>
        <td>
        <button type='button' class='btn btn-success btn-block'>".$row["Status"]."</button>
        </td>
        </tr>";
      }else{
        echo "<tr data-toggle='tooltip' title=".$row["ProjectName"].">
        <td align='left'>".$row["Id"]."</td>
        <td align='left'>".$row["ProjectName"]." <span class='badge badge-pill badge-".$classType."'>".$row["Type"]."</span></td>
        <td align='left'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]." | ".$row["Username"]."</td>
        <td align='left'>".date("d-m-Y", strtotime($row["CreatedDate"]))."</td>
        <td align='left'><a href='View.php?Proid=".$proid."'>เพิ่มเติม</a></td>
        <td>
        <button type='button' class='btn btn-success btn-block'>".$row["Status"]."</button>
        </td>
        </tr>";
      }

    }
}

$db->close();
?>
