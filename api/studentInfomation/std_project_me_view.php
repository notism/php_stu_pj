<?php
error_reporting(~E_NOTICE);
include('../config/connect.php');
$student = $_SESSION['userlogin']['Id'];
$sql = "SELECT * FROM projectinfo WHERE P1 ='$student' or P2 ='$student' or P3 ='$student' or P4 ='$student' or P5 ='$student'";
$result = $db->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "
      <tr>
      <td align='left' >
      &nbsp;&nbsp;&nbsp;&nbsp;
      <div class='row'>
      <div col-sm-3>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;<img class='img-fluid rounded mb-3 mb-md-0' src='../img/".$row["Picture"]."'  width=200px ></p>
      </div>
      <div col-sm-3>
      <p><br><br><form   method='get' action='View.php' ><input type='hidden' name='Proid' value='".$row["Id"]."'>&nbsp;&nbsp;&nbsp;&nbsp;<button type='submit' Style='background-color:#ffffff;border: 0px solid #d3d3d3;' ><font color='red'><u><h6><b>เรื่อง</b> ".$row["ProjectName"]."</h6></u></font></button></form></p>
      </div>
     </div>
      
      
      
      </td>
      </tr>

      ";
    }
}else{
echo "
<tr>
<td align='left' >
&nbsp;&nbsp;&nbsp;&nbsp;
<div class='row'>
<div col-sm-3>
<p> </p>
</div>
<div col-sm-3>
<p>&nbsp;&nbsp;&nbsp;&nbsp; ว่าง </p>
</div>
</div>



</td>
</tr>

";
}
$db->close();
?>
