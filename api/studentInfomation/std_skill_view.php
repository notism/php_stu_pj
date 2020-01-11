<?php
echo '';
include('../config/connect.php');
$student = $_SESSION['mem'];
$sql = "SELECT * FROM skills WHERE CreatedBy='$student'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "
      <tr>
      <td align='left'>".$row["Type"]."</td>
      <td align='left'>".$row["Skills"]."</td>
      </tr>

      ";
    }
}else{
echo "
      <tr>
      <td align='left'> ว่าง </td>
      <td align='left'> ว่าง </td>
      </tr>

      ";
}
$db->close();
?>
