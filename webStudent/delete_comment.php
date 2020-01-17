<?php
session_start();
if(!isset($_SESSION['userlogin'])){
    header("Location: ../login.php");
}
echo $cmids = $_POST['DeP'];
include('../config/connect.php');
$sql = "DELETE FROM project_comment WHERE cmid ='".$cmids."'"; 
if ($db->query($sql) === TRUE) {

    header('Location: ' . $_SERVER['HTTP_REFERER']);
   
}

?>