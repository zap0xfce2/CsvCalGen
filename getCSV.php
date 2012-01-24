<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"CSV-Calendar.csv\"");
$data=stripcslashes($_REQUEST['csv_text']);
echo $data; 
?>