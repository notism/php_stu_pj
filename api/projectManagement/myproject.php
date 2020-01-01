<html>
<body>
<table class='table'>
        
        <tbody>
<?php

include('../config/connect.php');

$sql = "SELECT * FROM projectinfo";
$result = $db->query($sql);
$i = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
          <tr>
            <th scope='row'>".$i."</th>
            <td><img class='img-fluid rounded mb-3 mb-md-0' src='../img/Project.jpg' alt='' width=100px></td>
            <td><b>เรื่อง</b> ".$row["ProjectName"]."</td>
            <td>".$row["Description"]."</td>
            <td>รออนุมัติ</td>
          </tr>
       
        
        
        ";$i++;
    }
} else {
    echo "0 results";
}
$db->close();
?>

</tbody></table></body></html>
