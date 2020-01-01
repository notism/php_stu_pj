<?php
error_reporting(~E_NOTICE);
if($URL==""){
$URL1 = "Project.php";
}else{
$URL1 = "View.php?count=1&Pid=".$URL;
}

echo $URL1;
		 $QRcode = '<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=https://localhost/test/webStudent/'.$URL1.'/&choe=UTF-8" title="Link to my Website" width=100%/>';
?>



