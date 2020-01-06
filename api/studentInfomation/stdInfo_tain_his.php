<?php

include('../config/connect.php');
$student = $_SESSION['userlogin']['Id'];
$sql = "SELECT * FROM trianninghistory WHERE CreatedBy='$student'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "
      <tr>
      <td align='left'>".$row["Header"]."</td>
      <td align='left'>".$row["Organize"]."</td>
      <td align='left'>".$row["Time"]."</td>
      <td>
      <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#editthisModel' data-id=".$row["Id"]." data-hd=".$row["Header"]." data-og=".$row["Organize"]."
      data-time=".$row["Time"]."><i class='fas fa-pen'></i></button>
      </td>
      <td>
      <button type='button' class='btn btn-danger'data-toggle='modal' data-target='#deletethisModel' data-del_id=".$row["Id"]." data-hd=".$row["Header"]."><i class='fas fa-trash-alt'></i></button>
      </td>
      </tr>

      ";
    }
}
$db->close();
?>
