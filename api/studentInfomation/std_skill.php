<?php

include('../config/connect.php');
$student = $_SESSION['userlogin']['Id'];
$sql = "SELECT * FROM skills WHERE CreatedBy='$student'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "
      <tr>
      <td align='left'>".$row["Type"]."</td>
      <td align='left'>".$row["Skills"]."</td>
      <td>
      <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#editskillsModel' data-id=".$row["Id"]." data-ty=".$row["Type"]."
      data-sk=".$row["Skills"]."><i class='fas fa-pen'></i></button>
      </td>
      <td>
      <button type='button' class='btn btn-danger'data-toggle='modal' data-target='#deleteskillsModel' data-del_id=".$row["Id"]." data-ty=".$row["Type"]."><i class='fas fa-trash-alt'></i></button>
      </td>
      </tr>

      ";
    }
}else{
  echo "
  <tr>
  <td align='left'> ว่าง </td>
  <td align='left'> ว่าง </td>
  <td>
  </td>
  <td>
  </td>
  </tr>
  
        ";
  }
$db->close();
?>
