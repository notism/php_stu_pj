<?php

include('../config/connect.php');

$sql = "SELECT * FROM users";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td align='left'>".$row["Id"]."</td>
        <td align='left'>".$row["Username"]."</td>
        <td align='left'>".$row["Email"]."</td>
        <td align='left'>".date("d-m-Y", strtotime($row["CreatedDate"]))."</td>
        <td align='left'>".$row["Role"]."</td>
        </tr>";
    }
} else {
    echo "0 results";
}
$db->close();
?>
