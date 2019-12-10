<?php
//Enter the connection details of your MySQL database here
$db_user = "root";
$db_pass = '';
$db_name = "student_project";
$db_host = "localhost";

//connect to db
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$db->query("SET NAMES UTF8");

?>
