<?php
	if(!isset($_SESSION['userlogin'])){
		header("Location: ../login.php");
    }
    
    $D = $_SESSION['userlogin']['Id'];
    include('../config/connect.php');
    $D = $_SESSION['userlogin']['Id'];
	$sql = "SELECT * FROM users where Id = '$D'";
	$result = $db->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
       $Picuser = $row["ImgUrl"];
        
		}
	} else {
		echo "0 results";
	}
	$db->close();
  
        if($Picuser==""){ 
        $Pic22 = "user.png"; 
        }else{ 
        $Pic22 = $Picuser;}
    echo '<img src="../img_user/'.$Pic22.'"  class="rounded-circle z-depth-0"  height="24">';
    
?>

