<?php

$PDFNAME = $_POST["PDF"];
$file = '../file/'.$PDFNAME.'';


header('Content-Type: "application/octet-stream"');
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
header('Expires: 0');
header("Content-Transfer-Encoding: binary");
header("Content-Length: " . filesize($file));

if (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE"))
{
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Pragma: public');
}
else
{
	header('Pragma: no-cache');
}


readfile($file);
exit();