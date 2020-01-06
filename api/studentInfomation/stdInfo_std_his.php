<?php

include('../config/connect.php');
$student = $_SESSION['userlogin']['Id'];
$sql = "SELECT * FROM studyhistory WHERE CreatedBy='$student'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "
      <tr>
      <td align='left'>".$row["Level"]."</td>
      <td align='left'>".$row["SchoolName"]."</td>
      <td align='left'>".$row["Qualification"]."</td>
      <td align='left'>".$row["Time"]."</td>
      <td>
      <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#editshisModel' data-id=".$row["Id"]." data-lv=".$row["Level"]."
      data-time=".$row["Time"]." data-sc=".$row["SchoolName"]." data-qu=".$row["Qualification"]."><i class='fas fa-pen'></i></button>
      </td>
      <td>
      <button type='button' class='btn btn-danger'data-toggle='modal' data-target='#deleteshisModel' data-del_id=".$row["Id"]." data-sc=".$row["SchoolName"]."><i class='fas fa-trash-alt'></i></button>
      </td>
      </tr>

      ";
    }
}
$db->close();
?>
