<?php


function generateCSVFile($heading_array,$data_array)
{


header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="mailinglist.csv"');
//initiate file download
$fp = fopen('php://output', 'wb');
 fputcsv($fp, $heading_array, ',');
$user_CSV= [];
foreach ($data_array as $data_row) {
 fputcsv($fp, $data_row, ',');
}
fclose($fp);

}
/*
Use case
generateCSVFile(array('firstname','lastname'),array(array('niyi','philip'),array('ola','dare')));
*/
?>