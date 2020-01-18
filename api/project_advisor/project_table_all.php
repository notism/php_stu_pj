<?php

include('../config/connect.php');
$sql = "SELECT * FROM users JOIN projectinfo WHERE users.Id=projectinfo.CreatedBy AND Status='อนุมัติแล้ว'";
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
      if($row["Star"]!=null){
        if($row["Star"]<=0.5 ){

        }elseif ($row["Star"]<=1) {
          $star = '<i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
        }elseif ($row["Star"]<=1.5) {
          $star = '<i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
        }elseif ($row["Star"]<=2) {
          $star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
        }elseif ($row["Star"]<=2.5) {
          $star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
        }elseif ($row["Star"]<=3) {
          $star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
        }elseif ($row["Star"]<=3.5) {
          $star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>';
        }elseif ($row["Star"]<=4) {
          $star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>';
        }elseif ($row["Star"]<=4.5) {
          $star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>';
        }else{
          $star = '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
        }
      }else{
        $star = '<i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
      }
      if($row["File"]!=null){
        echo "<tr data-toggle='tooltip' title=".$row["ProjectName"].">
        <td align='left'>".$row["Id"]."</td>
        <td align='left'>".$row["ProjectName"]." <span class='badge badge-pill badge-".$classType."'>".$row["Type"]."</span></td>
        <td align='left'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]." | ".$row["Username"]."</td>
        <td align='left'><label style=color:orange;'>".$star."</label></td>
        <td align='left'>".$row["View"]."</td>
        <td align='left'>".date("d-m-Y", strtotime($row["CreatedDate"]))."</td>
        <td align='left'><a href='View.php?Proid=".$proid."'>เพิ่มเติม</a></td>
        </tr>";
      }else{
        echo "<tr data-toggle='tooltip' title=".$row["ProjectName"].">
        <td align='left'>".$row["Id"]."</td>
        <td align='left'>".$row["ProjectName"]." <span class='badge badge-pill badge-".$classType."'>".$row["Type"]."</span></td>
        <td align='left'>".$row["Prefix"]." ".$row["Firstname"]." ".$row["Lastname"]." | ".$row["Username"]."</td>
        <td align='left'><label style=color:orange;'>".$star."</label></td>
        <td align='left'>".$row["View"]."</td>
        <td align='left'>".date("d-m-Y", strtotime($row["CreatedDate"]))."</td>
        <td align='left'><a href='View.php?Proid=".$proid."'>เพิ่มเติม</a></td>
        </tr>";
      }

    }
} else {
    echo "0 results";
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
