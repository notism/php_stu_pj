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
        <td>
        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#editUserModel' data-id=".$row["Id"]." data-username=".$row["Username"]." data-email=".$row["Email"]."><i class='fas fa-pen'></i></button>
        </td>
        <td>
        <button type='button' class='btn btn-danger'data-toggle='modal' data-target='#deleteUserModel' data-del_id=".$row["Id"]." data-username=".$row["Username"]."><i class='fas fa-trash-alt'></i></button>
        </td>
        </tr>";
    }
} else {
    echo "0 results";
}
$db->close();
?>
