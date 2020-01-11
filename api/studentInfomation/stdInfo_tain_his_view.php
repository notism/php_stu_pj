<?php

include('../config/connect.php');
$student = $_SESSION['mem'];
$sql = "SELECT * FROM trianninghistory WHERE CreatedBy='$student'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "
      <tr>
      <td align='left'>".$row["Header"]."</td>
      <td align='left'>".$row["Organize"]."</td>
      <td align='left'>".$row["Time"]."</td>
      
      </tr>

      ";
    }
  }else{
    echo "
      <tr>
      <td align='left'> ว่าง </td>
      <td align='left'> ว่าง </td>
      <td align='left'> ว่าง </td>
      
      </tr>

      ";
  }
$db->close();
?>
