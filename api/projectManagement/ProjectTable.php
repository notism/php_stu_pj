<?php

include('../config/connect.php');

$sql = "SELECT * FROM projectinfo where Status = 'อนุมัติแล้ว'";
$result = $db->query($sql);



if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

      $lcolor = "#56187f";
      $bcolor = "#ffffff00";

      $Str = $row["Description"];
      if(strlen($row["Description"])>900){
        $Str1 =  substr($row["Description"],0,901);
        $Str =  substr($Str1,0,900)."...อ่านต่อ";
      }
      
      if($row["Picture"]!=""){
        $Pic = "<img class='img-fluid rounded mb-3 mb-md-0' src='../img/".$row['Picture']."' alt='' style='width:500px;height:300px'>";
      }else{
        $Pic = "<img class='img-fluid rounded mb-3 mb-md-0' src='http://placehold.it/500x300' alt=''>";
      }
        echo "<tr style='pxcursor: pointer;border-Top: solid 5px ".$lcolor.";'>
        
        <td align='left'></td>
        
        <td align='left' style='pxcursor: pointer;border-Top: solid 3px ".$lcolor.";background-color:".$bcolor.";'>
            <!-- Project One -->
           <div class='row'>
           <div class='col-md-6'>
           <a href='#'>
           <span>จำนวนคนดู ".$row["View"]." ครั้ง <i class='fas fa-eye '></i> </span><div class='img-resize'> ".$Pic." </div>
          </a>
        </div>
        <div class='col-md-6'>
          <br>
          <h4>".$row["ProjectName"]."</h4><br>
          <div class='container'>
          <div class='row'>
          <div class='col-md-7'>".$Str." </div>
          <div class='col-md-5'>
          <center> <p style='pxcursor: pointer;border-left: solid 3px #039be5;background-color:#e1f5fe;'><br>โครงงาน : ".$row["Type"]."<br>วันที่ ".date("d-m-Y", strtotime($row["CreatedDate"]))."<br><br></p>
          <form   method='get' action='View.php' ><input type='hidden' name='Proid' value='".$row["Id"]."'> <button type='submit' class='btn purple-gradient btn-md' data-toggle='modal' data-target='#exampleModalCenter' ><h6>รายละเอียด</h6></button></form>
          </center></div></div></div>
         
        </div>
      </div>
      <!-- /.row -->

        </td>

        <td align='left'></td>
        

        </tr>";
    }
} else {
    echo "0 results";
}
$db->close();
?>
