<?php




if($_GET["u"]==""){
    header('Location: forgot_password.php');
}









?>

<html>
<head>
<title>Student Project</title>
	<link rel="stylesheet" href="nice/css/mdb.min.css">
	
	<style>
body{
	background-image:url("../img/back.gif")
}

input[type=password], select {
  width: 55%;
  height: 45px;
  px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #d3d3d3;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>
</head>
</body>

<Table width=75% align='right'><tr><td><br><br><h3>ขั้นตอนที่ 3.</h3></td></tr><tr><td>                      
                        <form action="" method="post">
                        <input type='password' name='reset1' placeholder='กรอกรหัสผ่านใหม่'><input type="hidden" name="SM" value="<?php echo $preset; ?>"><br><input type='password' name='reset2' placeholder='กรอกรหัสผ่านใหม่อีกครั้ง'><br>
 </td></tr>
 <tr><td><center><button type="submit" name="submit" class="btn purple-gradient btn-rounded mx-2 " > ยืนยัน </button></form>

</center></td></tr>
 
 
 <?php 
 
 if(isset($_POST["submit"])){

       if($_POST["reset1"]==$_POST["reset2"]){
        $P = md5($_POST['reset1']);
        include('config/connect.php');
        $sql = "UPDATE users
        SET Password = '".$P."'        
        WHERE Id = '".$_GET['u']."'";
        if ($db->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('เปลี่ยนรหัสผ่านเรียบร้อยแล้ว');</script>";
        header('Location:login.php');
                }
       }else{
        echo "<tr><td ><p Style='cursor: pointer;border-left: solid 3px #ffbb33;background-color:#fffde7;width:60%' ><br>&nbsp; หมายเหตุ : รหัสผ่านไม่ตรงกัน ตรวจสอบอีกครั้ง <br><br></p></td></tr>";
                            
       }






 }
 
 
 ?>
 
 
 
 
 
 
 </Table>
 </body></html>


 